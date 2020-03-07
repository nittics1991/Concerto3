<?php

/**
*   router_all
*
*   @version 191222
*/
declare(strict_types=1);

$router->addRoute(
    ['GET', 'POST'],
	'/{project}/{action}/{resource:.*}',
    function($request, $project, $resource) use ($container) {
        
        //Controller->methodを解決するもの=>RouteNameResolver
        
        //RouteNameResolverの中身は?
        $resolver = $container->get(RouteNameResolverInterface::class);
		
        //引数は?
        // [$container, $request, $project, $resource]
        return call_user_func(
            $resolver
            
        );
        
        
        
    }
);
