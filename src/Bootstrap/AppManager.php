<?php

namespace PHLAK\CodingStandards\Bootstrap;

use PHLAK\CodingStandards\Commands\Initialize;
use Symfony\Component\Console\Application;

class AppManager
{
    public static function create(): Application
    {
        $application = new Application;

        $application->add(new Initialize);

        return $application;
    }
}
