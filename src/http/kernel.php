<?php

/**
*   kernel
*
*   @version 191222
*/
declare(strict_types=1);

namespace http;

use Concerto\http\EmitterInterface;
use Psr\Http\Message\ServerRequestInterface;

$middleware = $containe->get(RequestHandlerInterface::class);
$request = $containe->get(ServerRequestInterface::class);

require_once(realpath(__DIR__ . '/middlewares.php'));

$response = $middleware->handle($request);

$emitter = $containe->get(EmitterInterface::class);
$emitter->emit($request);
