<?php
define('THINK_PATH', __DIR__."/BaseCore/");
define("APP_DEBUG", true);
define("APP_NAME", 'pc');
define("APP_PATH", "./".APP_NAME."/");
define("HTML_PATH","./".APP_NAME."/Runtime/cachehtml/");

require THINK_PATH.'ThinkPHP.php';