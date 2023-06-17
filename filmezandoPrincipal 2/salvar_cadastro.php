<style>
p{
    font-size: 60px;
    font-family: Arial;
    text-align: center;
}
</style>
<?php  
    include("conexao2.php");
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];
    $hash = md5($senha);

    

    $stmt = $pdo->prepare("insert into tbusuario
    values(null,'$nome','$email','$hash')");	    
	$stmt ->execute();    

    //Verificando se cadastrou com sucesso

    if($stmt->rowCount()){
        echo "<p style= 'color: green;'>Cadastrado com sucesso</p>";
    } else{
        echo "<p style= 'color: red;'>Erro: não foi possível cadastrar, tente novamente mais tarde </p>";
    }
    
    
    
?>