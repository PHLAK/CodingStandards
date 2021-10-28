<?php

namespace Tests\Commands;

use PHLAK\CodingStandards\Commands\Initialize;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;

/** @covers \PHLAK\CodingStandards\Commands\Initialize */
class InitializeTest extends TestCase
{
    /** @test */
    public function it_can_initialize_coding_standards_in_the_current_directory(): void
    {
        $initialize = new CommandTester(new Initialize);

        $initialize->execute([]);

        $this->assertMatchesRegularExpression('/Initialized coding standards configuration in .+/', $initialize->getDisplay());
        $this->assertEquals(Command::SUCCESS, $initialize->getStatusCode());
        $this->assertFileExists(self::CONFIG_FILE_PATH);
        $this->assertStringEqualsFile(self::CONFIG_FILE_PATH, file_get_contents(dirname(__DIR__, 2) . '/stubs/.php-cs-fixer.dist.php'));
    }
}
