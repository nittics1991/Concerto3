<?php
/**
*   container
*
*   @version 191221
*/
declare(strict_types=1);

use Movement\container\{
    ReflectionContainer,
    ServiceContainer,
    ServiceProviderContainer
};

$container = call_user_func(function () {
    $delegates = [
        ReflectionContainer::class,
        ServiceProviderContainer::class,
    ];
    
    $providers = [
        
    ];
    
    $container = new ServiceContainer();
    
    foreach ($delegates as $delegate) {
        $container->delegate(new $delegate());
    }
    
    foreach ($providers as $provider) {
        $container->addServiceProvider(new $provider());
    }
    return $container;
});
