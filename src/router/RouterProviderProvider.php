<?php

/**
*   RouterProviderProvider
*
*   @ver 191222
**/
declare(strict_types=1);

namespace router;

use Psr\Http\Server\RequestHandlerInterface;

//Zend\Diactoros? Movementに作るもの?
use Zend\Diactoros\RouteNameResolverInterface;
use Movement\http\RouteNameResolverInterface;



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
