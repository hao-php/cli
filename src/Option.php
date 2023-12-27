<?php

namespace Haoa\Cli;

/**
 * Class Option
 * @package Haoa\Cli
 */
class Option
{

    /**
     * @var array
     */
    public $names = [];

    /**
     * @var string
     */
    public $usage = '';

    /**
     * Option constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        foreach ($config as $key => $value) {
            $this->$key = $value;
        }
    }

}
