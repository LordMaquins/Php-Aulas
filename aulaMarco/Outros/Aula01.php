<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       #tunado{ 
        color:#ff0
       }
       #bler{
        color:#00ff
       }
       #ta{
        color:#ff00ff
       }
        </style>
</head>
<body>
    <?php
    echo "Salário" . '<br />';
    
    $nome = "João";
    $salario = 4000;
    $idade = 13;

    $salario += 200;
    
    echo "Nome  <span id='tunado'> $nome </span> <br>";
    echo "Salário: R$ <span id='bler'> $salario </span><br>";
    echo "Idade: <span id='ta'> $idade anos </span> ";
    if ($idade >17) 
{
            echo"<p>Maior de idade</p>";
    }
    else{
        echo "<p> Menor de idade </p>";
    }
    ?>
    
</body>
</html> 