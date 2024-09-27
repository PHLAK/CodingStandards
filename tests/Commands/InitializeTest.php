<?php

namespace Tests\Commands;

use PHLAK\CodingStandards\Commands\Initialize;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;

#[CoversClass(Initialize::class)]
class InitializeTest extends TestCase
{
    /** @var CommandTester */
    private $command;

    protected function setUp(): void
    {
        parent::setUp();

        $this->command = new CommandTester($this->application->find('init'));
    }

    protected function tearDown(): void
    {
        if (file_exists(self::CONFIG_FILE_SUBDIR_PATH)) {
            unlink(self::CONFIG_FILE_SUBDIR_PATH);
        }

        parent::tearDown();
    }

    #[Test]
    public function it_can_create_a_coding_standards_config_in_the_current_directory(): void
    {
        $this->command->execute([]);

        $this->assertMatchesRegularExpression('/Initialized coding standards configuration in .+/', $this->command->getDisplay());
        $this->assertEquals(Command::SUCCESS, $this->command->getStatusCode());
        $this->assertFileExists(self::CONFIG_FILE_PATH);
        $this->assertStringEqualsFile(self::CONFIG_FILE_PATH, (string) file_get_contents(dirname(__DIR__, 2) . '/stubs/.php-cs-fixer.dist.php'));
    }

    #[Test]
    public function it_prompts_for_overwrite_when_a_coding_standards_config_already_exists(): void
    {
        file_put_contents(self::CONFIG_FILE_PATH, 'Test file; please ignore');

        $this->command->execute([]);

        $this->assertEquals("Configuration file already exists. Overwrite? (y|N) Aborted!\n", $this->command->getDisplay());
    }

    #[Test]
    public function it_can_create_a_coding_standards_config_in_a_specified_directory(): void
    {
        $this->command->execute(['path' => 'subdir']);

        $this->assertMatchesRegularExpression('/Initialized coding standards configuration in subdir/', $this->command->getDisplay());
        $this->assertEquals(Command::SUCCESS, $this->command->getStatusCode());
        $this->assertFileExists(self::CONFIG_FILE_SUBDIR_PATH);
        $this->assertStringEqualsFile(self::CONFIG_FILE_SUBDIR_PATH, (string) file_get_contents(dirname(__DIR__, 2) . '/stubs/.php-cs-fixer.dist.php'));
    }
}
