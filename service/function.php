<?php
include("config/parametre.php");
function connection($host = host, $dbname = dbname, $user = user, $password = password)
{
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    try {
        $connection = new PDO($dsn, $user, $password);
    } catch (Exception $error) {
        echo "<h3>Connection failed: " . $error->getMessage() . "</h3>";
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
