<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de contatos</title>
    <style>.form3{
     
     margin-top: 55px;

    }
    </style>

</head>
<body>

<header>
    <nav id="menu_h">
        <ul >
        <h1> FILMEZANDO</h1>
        
            
        <li><a href="index.php">Início</a></li>
        <li><a href="index.php">Início</a></li>
            <li><a href="filmes.php">Filmes</a></li>
            <li><a href="noticias.php">Notícias</a></li>
            <li> <a href="contato.php"> Contato </a> </li>
            <li> <a href="contato-lista.php"> Listar Contatos </a> </li>
            <li> <a href="lista-filmes.php"> Listar filmes </a> </li>
            <li><a href="cadastro-filmes.php">Cadastro Filmes</a></li>
        </ul>
    </nav>
</header>










    <section>
        <table class="table table-striped">
            <thead>
                <div class="form3">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Assunto</th>
                <th scope="col">Mensagem</th>			
                <th scope="col">Ações</th>
                </div>
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbcontato");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> 
                            <a href='contato-excluir.php?id=$row[0]'> Excluir </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>

</body>
</html>