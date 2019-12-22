<?php

/**
*   routers
*
*   @version 191222
*/
declare(strict_types=1);

namespace router;

$middleware = call_user_func(
    function($router, $container) {
        $routers = [
        
        ];
        
        foreach ($routers as $file) {
            require_once($file);
        }
        return $router;
    },
    $middleware,
    $container
);
