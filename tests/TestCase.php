<?php

namespace Tests;

use PHLAK\CodingStandards\Bootstrap\AppManager;
use Symfony\Component\Console\Application;
use Yoast\PHPUnitPolyfills\TestCases\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected const TEST_DATA_PATH = __DIR__ . '/_data';
    protected const CONFIG_FILE_NAME = '.php-cs-fixer.dist.php';
    protected const CONFIG_FILE_PATH = self::TEST_DATA_PATH . '/' . self::CONFIG_FILE_NAME;
    protected const CONFIG_FILE_SUBDIR_PATH = self::TEST_DATA_PATH . '/subdir/' . self::CONFIG_FILE_NAME;

    /** Property description... */
    protected Application $application;

    protected function setUp(): void
    {
        parent::setUp();

        chdir(self::TEST_DATA_PATH);

        $this->application = AppManager::create();
    }

    protected function tearDown(): void
    {
        if (file_exists(self::CONFIG_FILE_PATH)) {
            unlink(self::CONFIG_FILE_PATH);
        }

        parent::tearDown();
    }
}
