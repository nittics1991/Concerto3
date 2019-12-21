<?php

/**
*   app
*
*   @version 191222
*/
declare(strict_types=1);

use Psr\Http\Message\ServerRequestInterface;

$app = $containe->get('router');
$request = $containe->get(ServerRequestInterface::class);

require_once(realpath(__DIR__ . '/middlewares.php'));

$response = $app->dispatch($request);

$emitter = $containe->get('emitter');
$emitter->emit($request);
