<?php 

    $servidor = "localhost";
    $banco="filminho";
    $usuario="root";
    $senha="";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


?>