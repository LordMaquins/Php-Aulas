<head>
    <link href="contato.php">
</head>
<nav>
    <ul>
        <li> <a href="index.php"> Home </a> </li>
        <li> <a href="quem_somos.php"> Quem somos </a> </li>
        <li> <a href="contato.php"> Contato </a> </li>
        <li> <a href="noticias.php"> Notícias </a> </li>
        <li> <a href="esportes.php"> Esportes </a> </li>
    </ul>
</nav>
<style>
    .cptext {
        font-size: 26px;
        background-image: url("haaland certo.jpg");
        background-size: cover;
        padding: 20p;
        text-align: center;
    }
</style>

<body>
    <div class="cptext">
        <?php


        $nome = $_POST['txName'];

        echo "Olá $nome e obrigado por enviar a mensagem.";

        ?>
    </div>
</body>