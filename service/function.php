<?php
// include("config/parametre.php");
function connection()
{
    $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']};charset=utf8";

    try {
        $connection = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo "<h3>Connection failed: " . $error->getMessage() . "</h3>";
        die();
    }
    return $connection;
}
function generate($base = "page/baseIndex.html.php")
{
    if (file_exists($base)) {
        ob_start();
        include($base);
        $content = ob_get_clean();
        echo $content;
    } else {
        echo "<h3>File not found</h3>";
    }
}
