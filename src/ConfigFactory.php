<?php

namespace PHLAK\CodingStandards;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;

class ConfigFactory
{
    /** Create a PHP CS Fixer Config object. */
    public static function make(Finder $finder, array $rules = []): ConfigInterface
    {
        return Config::create()->setFinder($finder)->setRules(
            array_replace_recursive(require self::rulesFilePath(), $rules)
        );
    }

    /** Get the path to the rules file. */
    public static function rulesFilePath(): string
    {
        return dirname(__DIR__) . '/definitions/rules.php';
    }
}
