<?php 
        $servidor = "localhost";
        $banco="projeto-filmes";
        $usuario="root";
        $senha="";
        
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


?>