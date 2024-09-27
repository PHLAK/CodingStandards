<?php

namespace Tests;

use PHLAK\CodingStandards\ConfigFactory;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(ConfigFactory::class)]
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

    #[Test]
    public function it_can_be_initialized_with_custom_rules(): void
    {
        $config = ConfigFactory::make(Finder::create()->in(__DIR__), [
            'array_syntax' => 'long',
            'class_attributes_separation' => [
                'elements' => ['const', 'property'],
            ],
            'visibility_required' => [
                'elements' => ['const', 'property'],
            ],
        ]);

        $this->assertInstanceOf(Config::class, $config);
        $this->assertEquals('long', $config->getRules()['array_syntax']);
        $this->assertEquals([
            'elements' => ['const', 'property'],
        ], $config->getRules()['class_attributes_separation']);
        $this->assertEquals([
            'elements' => ['const', 'property'],
        ], $config->getRules()['visibility_required']);
    }
}
