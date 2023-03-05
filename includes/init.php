<?php

define('DB_HOST', 'db');
define('DB_NAME', 'restaurant');
define('DB_USER', 'user');
define('DB_PASS','123456');

spl_autoload_register(function ($class) {
    require_once dirname(__DIR__) . "/classes/{$class}.php";
});
