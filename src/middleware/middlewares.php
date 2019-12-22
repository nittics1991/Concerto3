<?php

/**
*   middlewares
*
*   @version 191222
*/
declare(strict_types=1);

namespace middleware;

require_once(realpath(__DIR__ . '/middleware_log.php'));
require_once(realpath(__DIR__ . '/middleware_auth.php'));
require_once(realpath(__DIR__ . '/../router/routers.php'));
