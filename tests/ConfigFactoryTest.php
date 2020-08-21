<?php

namespace Tests;

use PHLAK\CodingStandards\ConfigFactory;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PHPUnit\Framework\TestCase;

/** @covers \PHLAK\CodingStandards\ConfigFactory */
class ConfigFactoryTest extends TestCase
{
    public function test_it_can_be_intialized_with_default_rules(): void
    {
        $config = ConfigFactory::make(Finder::create()->in(__DIR__));

        $this->assertInstanceOf(Config::class, $config);
        $this->assertEqualsCanonicalizing(
            require ConfigFactory::rulesFilePath(),
            $config->getRules()
        );
    }

    public function test_it_can_be_initialized_with_custom_rules(): void
    {
        $config = ConfigFactory::make(Finder::create()->in(__DIR__), [
            'array_syntax' => 'long',
        ]);

        $this->assertInstanceOf(Config::class, $config);
        $this->assertEquals('long', $config->getRules()['array_syntax']);
    }
}
