<?php
// Inicia a sessão
session_start();

// Define o nível de acesso do usuário (pode ser 'comum' ou 'admin')
$_SESSION['nivel_acesso'] = 'comum';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar o usuário e senha
    $usuario_correto = "mv20040908@gmail.com"; 
    $senha_correta = "1234567"; 

    $usuario_correto = "usuario@gmail.com"; // Altere para o usuário correto
    $senha_correta = "1234567"; // Altere para a senha correta

    $usuario_correto = "allan@gmail.com"; // Altere para o usuário correto
    $senha_correta = "1234567"; // Altere para a senha correta

    $usuario = $_POST["txEmail"];
    $senha = $_POST["txSenha"];
    

    // Verificar se o usuário e a senha estão corretos
    if ($usuario == $usuario_correto && $senha == $senha_correta) {
        // Redirecionar para a tela principal
        header("Location: index.php");
        exit();
    } else {
        header("location:login.php?mensagem=Usuário ou senha inválidos.");
        

    }
}
?>