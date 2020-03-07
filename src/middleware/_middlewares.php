<?php

/**
*   middlewares
*
*   @version 191222
*/
declare(strict_types=1);

namespace middleware;

//これは共通
require_once(realpath(__DIR__ . '/middleware_log.php'));

//httpとcliと異なるがどうする
require_once(realpath(__DIR__ . '/middleware_auth.php'));

//httpとcliと異なるがどうする
require_once(realpath(__DIR__ . '/../router/routers.php'));



