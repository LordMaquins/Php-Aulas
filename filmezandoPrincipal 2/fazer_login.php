<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar o usuário e senha
    $usuario_correto = "usuario"; // Altere para o usuário correto
    $senha_correta = "senha"; // Altere para a senha correta

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