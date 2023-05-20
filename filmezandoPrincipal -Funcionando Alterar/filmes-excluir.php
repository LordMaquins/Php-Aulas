
<style>
p{
    font-size: 60px;
    font-family: Arial;
    text-align: center;
}

    </style>

<?php

 include("conexao2.php");
    $id = $_GET['id'];

    
    $stmt = $pdo->prepare("delete from filmes where idFilme = $id");	    
	$stmt ->execute();    

    if($stmt->rowCount()){
        echo "<p style= 'color: green;'>Filme Excluído com sucesso, pressione f5 ao voltar a página</p>";
    } else{
        echo "<p style= 'color: red;'>Erro: filme não excluído </p>";
    }


?>