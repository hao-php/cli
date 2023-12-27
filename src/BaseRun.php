<?php

namespace Haoa\Cli;


abstract class BaseRun
{


    public array $options = [];

    abstract function main(): void;

}