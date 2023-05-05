<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
    
include("conexao.php");

$stmt = $pdo->prepare("insert into tb_contato values(null,'$nome','$email','$assunto','$mensagem')");	    
$stmt ->execute();    

header("location:contato.php");   
?>