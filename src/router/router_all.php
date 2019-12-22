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
        
        //Controller->methodを解決
        
        
        $resolver = $container->get(RouteNameResolverInterface::class);
		
        return call_user_func(
            $resolver
            
        );
        
        
        
    }
);
