<?php

use Illuminate\Contracts\Console\Kernel;

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

$outputDir = realpath(__DIR__ . '/../..') . DIRECTORY_SEPARATOR . 'docs';

if (! is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

file_put_contents($outputDir . DIRECTORY_SEPARATOR . 'index.html', view('welcome')->render());
file_put_contents($outputDir . DIRECTORY_SEPARATOR . '.nojekyll', '');

$photo = realpath(__DIR__ . '/../public/photo-me.jpg');
if ($photo !== false) {
    copy($photo, $outputDir . DIRECTORY_SEPARATOR . 'photo-me.jpg');
}

foreach (['nstw', 'dostv', 'rewards', 'uiux'] as $folder) {
    $sourceDir = realpath(__DIR__ . '/../public/' . $folder);
    if ($sourceDir !== false) {
        $targetDir = $outputDir . DIRECTORY_SEPARATOR . $folder;
        if (! is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        foreach (glob($sourceDir . DIRECTORY_SEPARATOR . '*.{jpg,jpeg,png,webp}', GLOB_BRACE) as $image) {
            copy($image, $targetDir . DIRECTORY_SEPARATOR . basename($image));
        }
    }
}

echo "Static site exported to ../docs/index.html" . PHP_EOL;
