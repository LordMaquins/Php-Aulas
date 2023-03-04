<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
$nota1= "";
$nota2="";
$nota3="";
$nota4="";
$media="";

        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "Sua média é: $media <br>";

        if ($media >= 6) {
            echo "<span style='color: blue;'>Aprovado</span>";
        } else {
            echo "<span style='color: red;'>Reprovado</span>";
        }
    ?

    </php>
</body>
</html>
?<php>

<?php
