<?php

/**
*   paths
*
*   @version 191221
*/
declare(strict_types=1);

call_user_func(function () {
    $paths = [
        __DIR__ . '/../projects',
    ];

    foreach ($paths as $path) {
        set_include_path(get_include_path() . ';' . realpath($path));
    }
});
