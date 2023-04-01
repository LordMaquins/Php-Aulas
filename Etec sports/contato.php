<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<nav>
    <ul>
        <div class="nav">
            <li> <a href="index.php"> Home </a> </li>
            <li> <a href="quem_somos.php"> Quem somos </a> </li>

            <li> <a href="noticias.php"> Notícias </a> </li>
            <li> <a href="esportes.php"> Esportes </a> </li>
        </div>
    </ul>
</nav>
<style>
    .haland {
        font-weight: bold;
        font-family: Arial;
        font-size: 34px;


    }

    .nav {
        display: flex;
        list-style: none;
        gap: 20px;
        font-size: 34px;
    }
</style>

<body>
    <div class="haland">
        <h1>Formulário</h1>
    </div>


    <form action="exibirdados.php" method="post">
        <input type="text" placeholder="Nome" name="txName" />
        <input type="text" placeholder="Mensagem" name="txMensagem" />
        <input type="submit" value="Enviar dados" />

    </form>
</body>

</html>