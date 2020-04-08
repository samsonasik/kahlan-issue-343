<?php // kahlan-config.php

use Kahlan\Filter\Filters;
use Kahlan\Jit\Patcher\Layer;

Filters::apply($this, 'patchers', function($next) {

    $files = $this->autoloader()->files();
    foreach ($files as $key => $file) {
        if ($file === __DIR__ . '/vendor/phunkie/phunkie/src/Phunkie/Functions/common.php') {
            unset($files[$key]);
        }
    }
    $this->autoloader()->files($files);
    \Kahlan\Jit\includeFile(__DIR__ . '/vendor/phunkie/phunkie/src/Phunkie/Functions/common.php');

    return $next();

});