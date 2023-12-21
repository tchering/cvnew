<?php
require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
var_dump($_ENV['DB_HOST']);
var_dump($_ENV['DB_DATABASE']);
phpinfo();
