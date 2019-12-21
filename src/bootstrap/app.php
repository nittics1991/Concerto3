<?php

/**
*   app
*
*   @version 191221
*/
declare(strict_types=1);

if (PHP_SAPI === 'cli') {
    require_once(realpath(__DIR__ . '/../console/kernel.php'));
} else {
    require_once(realpath(__DIR__ . '/../http/kernel.php'));
}
