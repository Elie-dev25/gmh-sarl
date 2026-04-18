<?php
/**
 * TEST 7: API Endpoints Performance
 * Teste chaque endpoint de l'API pour identifier les goulots
 * 
 * Exécution: php tests/performance/7-api-endpoints-performance.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'API Endpoints Performance',
    'test_id' => 7,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Analyse la performance de chaque endpoint API',
    'endpoints' => []
];

$base_url = 'http://localhost/gmh-sarl/';

// Endpoints to test
$endpoints = [
    [
        'url' => 'api/check_login.php',
        'method' => 'GET',
        'description' => 'Check login status',
        'expected_time' => '5-10ms'
    ],
    [
        'url' => 'pages/login.php',
        'method' => 'GET',
        'description' => 'Login page load',
        'expected_time' => '10-15ms'
    ],
    [
        'url' => 'pages/produits.php',
        'method' => 'GET',
        'description' => 'Products listing',
        'expected_time' => '10-20ms'
    ],
    [
        'url' => 'api/send.php',
        'method' => 'POST',
        'description' => 'Contact form submission',
        'expected_time' => '20-50ms'
    ],
    [
        'url' => 'pages/account.php',
        'method' => 'GET',
        'description' => 'Account page (requires session)',
        'expected_time' => '15-25ms'
    ]
];

echo "🔍 Testing API endpoints...\n";

foreach ($endpoints as $endpoint) {
    $times = [];
    $successes = 0;
    $failures = 0;
    
    // Run 5 tests per endpoint
    for ($i = 0; $i < 5; $i++) {
        $start = microtime(true);
        
        if ($endpoint['method'] == 'GET') {
            $response = @file_get_contents($base_url . $endpoint['url']);
        } else {
            // POST simulation
            $options = [
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-Type: application/x-www-form-urlencoded',
                    'content' => http_build_query(['test' => 'data'])
                ]
            ];
            $response = @file_get_contents($base_url . $endpoint['url'], false, stream_context_create($options));
        }
        
        $end = microtime(true);
        
        if ($response !== false) {
            $times[] = ($end - $start) * 1000;
            $successes++;
        } else {
            $failures++;
        }
    }
    
    if (!empty($times)) {
        $avg_time = array_sum($times) / count($times);
        
        $api_test = [
            'endpoint' => $endpoint['url'],
            'method' => $endpoint['method'],
            'description' => $endpoint['description'],
            'expected_time_range' => $endpoint['expected_time'],
            'metrics' => [
                'avg_ms' => round($avg_time, 2),
                'min_ms' => round(min($times), 2),
                'max_ms' => round(max($times), 2),
                'median_ms' => round($times[intval(count($times) / 2)], 2)
            ],
            'status' => ($avg_time < 50) ? '✅ Fast' : (($avg_time < 100) ? '🟢 Good' : '🟡 Slow'),
            'reliability' => [
                'successes' => $successes,
                'failures' => $failures,
                'success_rate' => round(($successes / 5) * 100, 0) . '%'
            ]
        ];
        
        $results['endpoints'][] = $api_test;
        echo "✓ {$endpoint['url']}: {$avg_time}ms\n";
    }
}

// Performance Analysis
$avg_times = array_column($results['endpoints'], 'metrics');
$all_avg = array_column($avg_times, 'avg_ms');

$results['performance_summary'] = [
    'total_endpoints_tested' => count($results['endpoints']),
    'global_avg_ms' => round(array_sum($all_avg) / count($all_avg), 2),
    'fastest_endpoint' => $results['endpoints'][array_search(min($all_avg), array_column($results['endpoints'], 'metrics'))]['endpoint'] ?? 'N/A',
    'slowest_endpoint' => $results['endpoints'][array_search(max($all_avg), array_column($results['endpoints'], 'metrics'))]['endpoint'] ?? 'N/A'
];

// Bottleneck identification
$slow_endpoints = array_filter($results['endpoints'], function($ep) {
    return $ep['metrics']['avg_ms'] > 50;
});

if (!empty($slow_endpoints)) {
    $results['bottlenecks'] = [
        'found' => true,
        'slow_endpoints' => array_column($slow_endpoints, 'endpoint'),
        'recommendation' => 'Profile these endpoints to find slow queries or heavy computations'
    ];
}

// Optimization suggestions
$results['optimization_suggestions'] = [
    'Query Caching' => 'Add Redis cache for frequently accessed data',
    'Database Indexing' => 'Ensure proper indexing on frequently filtered columns',
    'Pagination' => 'Limit result sets (paginate instead of loading all)',
    'CDN for Assets' => 'Move static files to CDN',
    'Compression' => 'Enable gzip for all responses',
    'Minification' => 'Minify HTML, CSS, JS responses'
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/7-api-endpoints-performance.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\n\n" . json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/7-api-endpoints-performance.json\n";
?>
