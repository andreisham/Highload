<a href="login.php">login</a>
<?php
require_once ('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log',Logger::WARNING));

$log->warning('FOO_warn');
$log->error('Bar_err');

$log->warning('Memory '.memory_get_usage());

echo phpinfo();

$log->warning('Memory_peak '.memory_get_peak_usage());
$log->warning('Memory_xdebug '.xdebug_memory_usage());
$log->warning('Memory_xdebug_peak '.xdebug_peak_memory_usage());