<?php
include("service/function.php");

require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$action = $_GET['action'] ?? '';

switch ($action) {
    case "send":
        $nom = $_POST['nom'] ?? '';
        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';

        $connection = connection();
        if (!$connection) {
            echo "Error: Unable to connect to the database.";
            break;
        }

        $sql = "INSERT INTO form_data (nom,email,message) VALUES (?,?,?)";
        $req = $connection->prepare($sql);
        $result = $req->execute([$nom, $email, $message]);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo ' Your message has been sent successfully.';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"onclick="reload()" id="close-btn"></button>';
            echo '</div>';
        } else {
            echo "Error executing query: " . implode(", ", $req->errorInfo());
        }

        break;
    default:
        generate();
        break;
}
