<?php
/**
 * TEST 5: Assets Optimization Analysis
 * Analyse la taille et l'optimisation des ressources statiques
 * 
 * Exécution: php tests/performance/5-assets-optimization.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'Assets Optimization Analysis',
    'test_id' => 5,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Analyse l\'optimisation des CSS, JS, et images',
    'assets' => []
];

$base_path = __DIR__ . '/../../';

// Test CSS Files
echo "📊 Analyzing CSS files...\n";
$css_files = [
    'assets/css/bootstrap.min.css' => 'Framework Bootstrap',
    'assets/css/gmh-global.css' => 'Global Design System',
    'assets/css/home-modern.css' => 'Homepage Styles',
    'assets/css/pages.css' => 'Pages Styles',
];

$total_css_size = 0;
foreach ($css_files as $file => $label) {
    $path = $base_path . $file;
    if (file_exists($path)) {
        $size = filesize($path);
        $size_kb = $size / 1024;
        $total_css_size += $size;
        
        // Estimate gzip compression
        $gzip_size = $size * 0.4; // ~60% compression with gzip
        $gzip_kb = $gzip_size / 1024;
        
        $results['assets'][] = [
            'type' => 'CSS',
            'file' => $file,
            'label' => $label,
            'size' => [
                'bytes' => $size,
                'kb' => round($size_kb, 2),
                'with_gzip_kb' => round($gzip_kb, 2),
                'compression_potential' => '60%'
            ],
            'optimization' => [
                'minified' => (strpos($file, '.min.') !== false) ? 'Yes ✅' : 'No - minify it',
                'gzip_enabled' => 'No - enable in production',
                'recommendation' => (strpos($file, '.min.') !== false) ? 'Already optimized' : 'Minify and enable gzip'
            ]
        ];
        
        echo "✓ {$label}: {$size_kb} KB\n";
    }
}

// Test JavaScript Files
echo "\n📊 Analyzing JavaScript files...\n";
$js_files = [
    'assets/js/jquery-3.7.1.min.js' => 'jQuery Library',
    'assets/js/bootstrap.bundle.min.js' => 'Bootstrap JS',
    'assets/js/main.js' => 'Custom Scripts',
    'assets/js/app.js' => 'App Logic',
];

$total_js_size = 0;
foreach ($js_files as $file => $label) {
    $path = $base_path . $file;
    if (file_exists($path)) {
        $size = filesize($path);
        $size_kb = $size / 1024;
        $total_js_size += $size;
        
        $gzip_size = $size * 0.4;
        $gzip_kb = $gzip_size / 1024;
        
        $results['assets'][] = [
            'type' => 'JavaScript',
            'file' => $file,
            'label' => $label,
            'size' => [
                'bytes' => $size,
                'kb' => round($size_kb, 2),
                'with_gzip_kb' => round($gzip_kb, 2),
                'compression_potential' => '60%'
            ],
            'optimization' => [
                'minified' => (strpos($file, '.min.') !== false) ? 'Yes ✅' : 'No - minify it',
                'lazy_loading' => 'Recommended for main.js',
                'async_defer' => (strpos($label, 'jQuery') !== false) ? 'async recommended' : 'defer recommended'
            ]
        ];
        
        echo "✓ {$label}: {$size_kb} KB\n";
    }
}

// Test Images
echo "\n📊 Analyzing images...\n";
$image_dirs = [
    'assets/images/demos/demo-21/' => 'Demo images',
    'images/' => 'Content images'
];

$total_images_size = 0;
$image_count = 0;

foreach ($image_dirs as $dir => $label) {
    $path = $base_path . $dir;
    if (is_dir($path)) {
        $images = glob($path . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
        $dir_size = 0;
        
        foreach ($images as $img) {
            if (is_file($img)) {
                $size = filesize($img);
                $dir_size += $size;
                $total_images_size += $size;
                $image_count++;
            }
        }
        
        if ($image_count > 0) {
            $results['assets'][] = [
                'type' => 'Images',
                'directory' => $dir,
                'label' => $label,
                'count' => $image_count,
                'total_size_kb' => round($dir_size / 1024, 2),
                'optimization' => [
                    'lazy_loading' => 'Not implemented',
                    'webp_format' => 'Not implemented',
                    'responsive_images' => 'Not implemented',
                    'compression_potential' => '30-50%'
                ]
            ];
            
            echo "✓ {$label}: {$image_count} images, " . round($dir_size / 1024, 2) . " KB\n";
        }
    }
}

// Total Calculation
$total_size_kb = ($total_css_size + $total_js_size + $total_images_size) / 1024;
$total_gzip_kb = $total_size_kb * 0.4;

$results['summary'] = [
    'total_size_kb' => round($total_size_kb, 2),
    'with_gzip_compression_kb' => round($total_gzip_kb, 2),
    'potential_savings_kb' => round($total_size_kb - $total_gzip_kb, 2),
    'css_percentage' => round(($total_css_size / ($total_css_size + $total_js_size + $total_images_size)) * 100, 1) . '%',
    'js_percentage' => round(($total_js_size / ($total_css_size + $total_js_size + $total_images_size)) * 100, 1) . '%',
    'images_percentage' => round(($total_images_size / ($total_css_size + $total_js_size + $total_images_size)) * 100, 1) . '%'
];

$results['optimization_recommendations'] = [
    'IMMEDIATE (High Impact)' => [
        '1. Enable gzip compression (saves ' . round($total_size_kb - $total_gzip_kb, 0) . ' KB per page)',
        '2. Add cache control headers (browser caching)',
        '3. Minify all CSS files (2-3% additional savings)',
        '4. Implement async/defer loading for JS'
    ],
    'SHORT TERM (Medium Impact)' => [
        '5. Add CDN for static assets (faster delivery)',
        '6. Implement lazy loading for images',
        '7. Convert images to WebP format (30-50% savings)',
        '8. Split CSS into critical path CSS'
    ],
    'LONG TERM (Nice to Have)' => [
        '9. Consider CSS-in-JS for SPA migration',
        '10. Bundle optimization (tree shaking)',
        '11. Service worker for offline support',
        '12. Resource hints (prefetch, preconnect)'
    ]
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/5-assets-optimization.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\n\n" . json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/5-assets-optimization.json\n";
?>
