<?php

require __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()->in([
    // List of paths you wish to include
]);

return PHLAK\CodingStandards\ConfigFactory::make($finder);
