<?php

/**
*   HttpBootServiceProvider
*
*   @ver 191222
**/
declare(strict_types=1);

namespace http;

use Concerto\container\provider\{
    AbstractServiceProvider,
    BootableServiceProviderInterface
};
use League\Route\Router;
use Psr\Http\Message\{
    ResponseInterface,
    ServerRequestInterface
};
use Zend\Diactoros\{
    ServerRequestFactory,
    Response
};
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

use Concerto\container\provider{
    AbstractServiceProvider,
    BootableServiceProviderInterface
};

class HttpBootServiceProvider extends AbstractServiceProvider implements
    BootableServiceProviderInterface
{
    protected $provides = [
        'router',
        ServerRequestInterface::class,
        ResponseInterface::class,
        'emitter'
    ];

    public function register()
    {
        $this->share('router', function($container)) {
            return new Router();
        });
        
        $this->share(
            ServerRequestInterface::class,
            , function($container)
        ) {
            return new ServerRequestFactory::fromGlobals(
                $_SERVER,
                $_GET,
                $_POST,
                $_COOKIE,
                $_FILES
            );
        });
        
        $this->share(
            ResponseInterface::class,
            , function($container)
        ) {
            return new Response();
        });
        
        $this->share('emitter', function($container)) {
            return new SapiEmitter();
        });
        
        
        
        
    }
    
    public function boot()
    {
        
    }
}
