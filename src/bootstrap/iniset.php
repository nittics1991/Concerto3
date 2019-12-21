<?php

/**
*   iniset
*
*   @version 191221
*/
declare(strict_types=1);

if (isset($_ENV['DEBUG']) && $_ENV['DEBUG']) {
    ini_set('display_errors', '1');
} else {
    ini_set('display_errors', '0');
}

error_reporting(E_ALL);

ini_set('memory_limit', '256M');
ini_set('max_execution_time', '120');

ini_set('log_errors', 1);
ini_set('log_errors_max_len', 0);
ini_set('error_log', 'E:\\www\\Concerto\\log\\phperr.log');

ini_set('date.timezone', 'Asia/Tokyo');

ini_set('opcache.revalidate_freq', 60);

mb_detect_order('UTF-8,SJIS,EUC-JP,JIS,ASCII');
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');
setlocale(LC_ALL, 'jpn_jpn');
