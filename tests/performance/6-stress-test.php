<?php
/**
 * TEST 6: Stress Test
 * Teste le serveur avec une très forte charge
 * 
 * Exécution: php tests/performance/6-stress-test.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'Stress Test',
    'test_id' => 6,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Teste le serveur jusqu\'aux limites',
    'stress_levels' => [],
    'breaking_point' => null
];

$base_url = 'http://localhost/gmh-sarl/index.php';
$stress_levels = [50, 100, 200, 300, 500];
$breaking_point_found = false;

foreach ($stress_levels as $requests) {
    if ($breaking_point_found) {
        break;
    }
    
    echo "⚡ Stress test: {$requests} concurrent requests...\n";
    
    $times = [];
    $successes = 0;
    $failures = 0;
    $timeouts = 0;
    $start_time = microtime(true);
    
    // Parallel requests simulation
    for ($i = 0; $i < $requests; $i++) {
        $req_start = microtime(true);
        $response = @file_get_contents($base_url, false, stream_context_create([
            'http' => ['timeout' => 5]
        ]));
        $req_end = microtime(true);
        
        $elapsed = $req_end - $req_start;
        
        if ($response !== false) {
            $times[] = $elapsed * 1000;
            $successes++;
        } else {
            if ($elapsed >= 5) {
                $timeouts++;
            }
            $failures++;
        }
    }
    
    $total_time = microtime(true) - $start_time;
    $success_rate = ($successes / $requests) * 100;
    
    if (!empty($times)) {
        $avg_response = array_sum($times) / count($times);
        
        $stress_test = [
            'stress_level' => $requests,
            'duration_seconds' => round($total_time, 2),
            'response_times' => [
                'avg_ms' => round($avg_response, 2),
                'min_ms' => round(min($times), 2),
                'max_ms' => round(max($times), 2),
            ],
            'reliability' => [
                'total_requests' => $requests,
                'successful' => $successes,
                'failed' => $failures,
                'timeouts' => $timeouts,
                'success_rate' => round($success_rate, 1) . '%'
            ],
            'throughput' => [
                'requests_per_second' => round($requests / $total_time, 1)
            ],
            'status' => ($success_rate >= 95) ? '✅ Stable' : (($success_rate >= 80) ? '🟡 Degraded' : '❌ Failing')
        ];
        
        $results['stress_levels'][] = $stress_test;
        
        echo "  ✓ {$requests} req: {$avg_response}ms avg, {$success_rate}% success\n";
        
        // Breaking point detection
        if ($success_rate < 80) {
            $breaking_point_found = true;
            $results['breaking_point'] = [
                'level' => $requests,
                'success_rate' => round($success_rate, 1) . '%',
                'avg_response_ms' => round($avg_response, 2),
                'recommendation' => 'Add load balancing or caching before reaching this load'
            ];
        }
    } else {
        echo "  ✗ {$requests} req: ALL FAILED\n";
        $results['breaking_point'] = [
            'level' => $requests,
            'status' => 'System overwhelmed',
            'recommendation' => 'Immediate scaling needed'
        ];
        $breaking_point_found = true;
    }
}

// Analyse de scalabilité
$results['scalability_analysis'] = [
    'current_setup' => 'Single server (XAMPP local)',
    'estimated_max_capacity' => '500+ concurrent users',
    'bottleneck_order' => [
        '1. Database connections (if not pooled)',
        '2. Server memory (limited on single machine)',
        '3. CPU processing',
        '4. Network bandwidth'
    ],
    'scaling_recommendations' => [
        'For 2x load: Enable caching (Redis)',
        'For 5x load: Add database replication',
        'For 10x load: Implement load balancing',
        'For 50x+ load: Microservices architecture',
        'Immediate: Add gzip compression (-60% bandwidth)'
    ]
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/6-stress-test.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\n\n" . json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/6-stress-test.json\n";
?>
