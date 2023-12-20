<?php 
    include("./service/function.php");
    $action="";
    extract($_POST);
    if ($action== "send") {
        $name=htmlspecialchars($name);
        $email=htmlspecialchars($email);
        $message=htmlspecialchars($message);
        $connection=connection();
        $sql="INSERT INTO form (name,email,message) VALUES (?,?,?)";
        $req=$connection->prepare($sql);
        $req->execute([$name,$email,$message]);
        echo "<div class='alert alert-success'>Message sent</div>";
    }

?>