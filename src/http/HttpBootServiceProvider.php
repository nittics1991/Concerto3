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
use Concerto\http\{
    EmitterInterface,
    LeagueRequestHandlerAdapter
};
use League\Route\Router;
use Psr\Http\Message\{
    ResponseInterface,
    ServerRequestInterface
};
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\{
    ServerRequestFactory,
    Response
};
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

class HttpBootServiceProvider extends AbstractServiceProvider implements
    BootableServiceProviderInterface
{
    protected $provides = [
        RequestHandlerInterface::class,
        ServerRequestInterface::class,
        ResponseInterface::class,
        EmitterInterface::class
    ];

    public function register()
    {
        $this->share(
            Router::class,
            function($container) {
                return new Router();
            }
        );
        
        $this->share(
            RequestHandlerInterface::class,
            function($container) {
                return new LeagueRequestHandlerAdapter(
                    $container->get(Router::class)
                );
            }
        );
        
        $this->share(
            ServerRequestInterface::class,
                function($container) {
                    return ServerRequestFactory::fromGlobals(
                        $_SERVER,
                        $_GET,
                        $_POST,
                        $_COOKIE,
                        $_FILES
                    );
                }
        );
        
        $this->share(
            ResponseInterface::class,
                function($container) {
                return new Response();
            }
        );
        
        $this->share(
            EmitterInterface::class,
            function($container) {
                return new SapiEmitter();
            }
        );
    }
    
    public function boot()
    {
        
    }
}
