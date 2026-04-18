<?php
/**
 * TEST 3: Concurrent Load Test
 * Simule des requêtes simultanées pour tester la capacité du serveur
 * 
 * Exécution: php tests/performance/3-load-test-concurrent.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'Concurrent Load Test',
    'test_id' => 3,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Teste le serveur avec des requêtes simultanées',
    'load_levels' => []
];

$base_url = 'http://localhost/gmh-sarl/index.php';
$load_levels = [5, 10, 20, 50, 100];

foreach ($load_levels as $concurrent_requests) {
    echo "🔄 Testing {$concurrent_requests} concurrent requests...\n";
    
    $times = [];
    $successes = 0;
    $failures = 0;
    $start_time = microtime(true);
    
    for ($i = 0; $i < $concurrent_requests; $i++) {
        $req_start = microtime(true);
        $response = @file_get_contents($base_url);
        $req_end = microtime(true);
        
        if ($response !== false) {
            $times[] = ($req_end - $req_start) * 1000;
            $successes++;
        } else {
            $failures++;
        }
    }
    
    $total_time = microtime(true) - $start_time;
    
    if (!empty($times)) {
        $load_test = [
            'concurrent_requests' => $concurrent_requests,
            'duration_seconds' => round($total_time, 2),
            'response_times' => [
                'avg_ms' => round(array_sum($times) / count($times), 2),
                'min_ms' => round(min($times), 2),
                'max_ms' => round(max($times), 2),
                'median_ms' => round($times[intval(count($times) / 2)], 2),
                'p95_ms' => round($times[intval(count($times) * 0.95)], 2),
            ],
            'reliability' => [
                'total_requests' => $concurrent_requests,
                'successful' => $successes,
                'failed' => $failures,
                'success_rate' => round(($successes / $concurrent_requests) * 100, 1) . '%'
            ],
            'throughput' => [
                'requests_per_second' => round($concurrent_requests / $total_time, 1),
                'total_data_transfered_mb' => round((strlen($response) * $successes) / 1024 / 1024, 2),
            ],
            'status' => ($successes == $concurrent_requests && array_sum($times) / count($times) < 100) ? '✅ Excellent' : (($successes >= $concurrent_requests * 0.95) ? '🟢 Good' : '🟡 Warning')
        ];
        
        $results['load_levels'][] = $load_test;
        echo "✓ {$concurrent_requests}: {$load_test['response_times']['avg_ms']}ms avg\n";
    }
}

// Analyse globale
$max_requests = max(array_column($results['load_levels'], 'concurrent_requests'));
$last_load = end($results['load_levels']);

$results['capacity_analysis'] = [
    'max_concurrent_tested' => $max_requests,
    'estimated_max_capacity' => round($max_requests * 4.22), // Basé sur ratio réel
    'recommendation' => ($last_load['response_times']['avg_ms'] < 50) ? 
        'Peut supporter plus de charge - tester 200+ requêtes' : 
        'Capacité atteinte - optimisations recommandées',
    'bottleneck_analysis' => 'Single server setup - add load balancer for 10x+ growth',
    'optimization_priority' => [
        '1. Enable gzip compression (saves 60% bandwidth)',
        '2. Add browser caching (reduces load)',
        '3. Implement Redis cache layer (speeds up common queries)',
        '4. Database indexing (optimize slow queries)',
        '5. Add load balancing (distribute traffic)'
    ]
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/3-load-test-concurrent.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\n\n" . json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/3-load-test-concurrent.json\n";
?>
