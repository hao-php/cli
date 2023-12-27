<?php


require __DIR__ . '/autoload.php';
require __DIR__ . '/HelloCommand.php';

use Haoa\Cli\Cli;

Cli::init();

// 使用字符串动态加载类
$cmds = [
    [
        'name' => 'hello',
        'short' => 'hello',
        'class' => 'HelloCommand',
    ]
];
Cli::addArrCommand(...$cmds)->run();