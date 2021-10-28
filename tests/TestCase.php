<?php

namespace Tests;

use Yoast\PHPUnitPolyfills\TestCases\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected const TEST_DATA_PATH = __DIR__ . '/_data';
    protected const CONFIG_FILE_PATH = self::TEST_DATA_PATH . '/.php-cs-fixer.dist.php';

    protected function setUp(): void
    {
        parent::setUp();

        chdir(self::TEST_DATA_PATH);
    }

    protected function tearDown(): void
    {
        if (file_exists(self::CONFIG_FILE_PATH)) {
            unlink(self::CONFIG_FILE_PATH);
        }

        parent::tearDown();
    }
}
