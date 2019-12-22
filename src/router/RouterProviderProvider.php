<?php

/**
*   RouterProviderProvider
*
*   @ver 191222
**/
declare(strict_types=1);

namespace router;

use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\RouteNameResolverInterface;

class RouterProviderProvider extends AbstractServiceProvider implements
    BootableServiceProviderInterface
{
    protected $provides = [
        RouteNameResolverInterface::class,
    ];

    public function register()
    {
        $this->share(
            RouteNameResolverInterface::class,
            function($container) {
                return new RouteNameResolver($container);
            }
        );
    }
    
    public function boot()
    {
        
    }
}
