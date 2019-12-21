<?php
/**
*   container
*
*   @version 191221
*/
declare(strict_types=1);

$container = call_user_func(function () {
    $providers = [
        
    ];
    
    $container = new Container();
    $container->delegate(new ServiceProviderContainer());
    
    foreach ($providers as $provider) {
        $container->addServiceProvider($provider);
    }
    return $container;
});
