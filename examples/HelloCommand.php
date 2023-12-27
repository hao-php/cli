<?php

use Haoa\Cli\BaseRun;

class HelloCommand extends BaseRun
{

    public function main(): void
    {
        echo "hello";
    }
}