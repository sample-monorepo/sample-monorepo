<?php

use Symplify\MonorepoBuilder\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\ValueObject\Option;

require_once __DIR__ . '/vendor/autoload.php';

return static function (MBConfig $mbConfig): void {
    // where are the packages located?
    $mbConfig->packageDirectories([
        // default value
        __DIR__ . '/packages',
        // custom
    ]);
};
