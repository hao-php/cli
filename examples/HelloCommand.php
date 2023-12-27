<?php

use Haoa\Cli\BaseRun;
use Haoa\Cli\Flag;
use Haoa\Cli\Option;

class HelloCommand extends BaseRun
{

    public function __construct()
    {
        $this->options = [
            new Option([
                'names' => ['n', 'name'],
                'usage' => 'Your name'
            ]),
        ];
    }

    public function main(): void
    {
        $name = Flag::match('n', 'name')->string('Xiao Ming');
        var_dump($name);
        var_dump(Flag::arguments()->array());
        echo "hello";
    }
}