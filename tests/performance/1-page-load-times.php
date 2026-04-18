<?php
/**
 * TEST 1: Page Load Times Analysis
 * Mesure le temps de réponse de chaque page du site
 * 
 * Exécution: php tests/performance/1-page-load-times.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'Page Load Times',
    'test_id' => 1,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Mesure le temps de réponse des pages principales',
    'samples_per_page' => 10,
    'pages' => []
];

$pages_to_test = [
    'index.php' => ['label' => 'Accueil', 'type' => 'public'],
    'pages/produits.php' => ['label' => 'Produits', 'type' => 'public'],
    'pages/about.php' => ['label' => 'À propos', 'type' => 'public'],
    'pages/contact.php' => ['label' => 'Contact', 'type' => 'public'],
    'pages/login.php' => ['label' => 'Login', 'type' => 'public'],
    'pages/register.php' => ['label' => 'Inscription', 'type' => 'public'],
    'pages/services.php' => ['label' => 'Services', 'type' => 'public'],
    'pages/galerie.php' => ['label' => 'Galerie', 'type' => 'public'],
];

$base_url = 'http://localhost/gmh-sarl/';
$warmup = true; // Première requête pour warmer les caches

foreach ($pages_to_test as $page => $info) {
    $times = [];
    $successes = 0;
    $failures = 0;
    $sizes = [];
    
    // Warmup (pas compté)
    if ($warmup) {
        @file_get_contents($base_url . $page);
        $warmup = false;
    }
    
    // 10 essais
    for ($i = 0; $i < 10; $i++) {
        $start = microtime(true);
        $response = @file_get_contents($base_url . $page);
        $end = microtime(true);
        
        if ($response !== false) {
            $time_ms = ($end - $start) * 1000;
            $times[] = $time_ms;
            $sizes[] = strlen($response);
            $successes++;
        } else {
            $failures++;
        }
    }
    
    if (!empty($times)) {
        $avg_time = array_sum($times) / count($times);
        $min_time = min($times);
        $max_time = max($times);
        $std_dev = sqrt(array_sum(array_map(function($x) use ($avg_time) { 
            return pow($x - $avg_time, 2); 
        }, $times)) / count($times));
        
        $results['pages'][] = [
            'page' => $page,
            'label' => $info['label'],
            'type' => $info['type'],
            'metrics' => [
                'avg_ms' => round($avg_time, 2),
                'min_ms' => round($min_time, 2),
                'max_ms' => round($max_time, 2),
                'std_dev' => round($std_dev, 2),
                'median_ms' => round($times[intval(count($times) / 2)], 2),
                'p95_ms' => round($times[intval(count($times) * 0.95)], 2),
                'p99_ms' => round($times[intval(count($times) * 0.99)], 2),
            ],
            'reliability' => [
                'successes' => $successes,
                'failures' => $failures,
                'success_rate' => round(($successes / 10) * 100, 1) . '%'
            ],
            'size' => [
                'avg_bytes' => round(array_sum($sizes) / count($sizes)),
                'min_bytes' => min($sizes),
                'max_bytes' => max($sizes),
            ],
            'status' => ($avg_time < 50) ? '✅ Excellent' : (($avg_time < 200) ? '🟢 Good' : '🟡 Fair')
        ];
    }
}

// Statistiques globales
$all_times = [];
foreach ($results['pages'] as $page) {
    $all_times[] = $page['metrics']['avg_ms'];
}

$results['summary'] = [
    'total_pages_tested' => count($results['pages']),
    'global_avg_ms' => round(array_sum($all_times) / count($all_times), 2),
    'global_min_ms' => round(min($all_times), 2),
    'global_max_ms' => round(max($all_times), 2),
    'pages_under_50ms' => count(array_filter($results['pages'], function($p) { return $p['metrics']['avg_ms'] < 50; })),
    'pages_over_100ms' => count(array_filter($results['pages'], function($p) { return $p['metrics']['avg_ms'] >= 100; })),
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/1-page-load-times.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/1-page-load-times.json\n";
?>
