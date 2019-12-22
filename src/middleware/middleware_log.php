<?php

/**
*   middleware_log
*
*   @version 191222
*/
declare(strict_types=1);

namespace middleware;

$middleware->add(function($request, $handler) use ($container) {
	
	try {
		return $handler->handle($request);
	} catch (Throwable $e) {
		$logger = $container->get(LoggerInterface::class);
		$formatter = $container->get(LoggerFormatterInterface::class);
		
		
		
		$logger->log();
		
	}
});
