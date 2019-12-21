<?php

/**
*   autoload
*
*   @version 191221
*/
declare(strict_types=1);

spl_autoload_extensions(spl_autoload_extensions() . ',.class.php');
spl_autoload_register('spl_autoload');
require_once realpath(__DIR__ . '/../../vendor/autoload.php');
