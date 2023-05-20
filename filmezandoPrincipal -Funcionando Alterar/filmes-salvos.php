<style>
p{
    font-size: 60px;
    font-family: Arial;
    text-align: center;
}
</style>
<?php  
    include("conexao2.php");
    $nomeFilme = $_POST['txFilme'];
    $imagemFilme = $_POST['imagemFilme'];
    $ano = $_POST['txData'];
    $temp = $_POST['txTemp'];
    $class = $_POST['txClass'];
    $genero = $_POST['txGen'];
    $diretor = $_POST['txDir'];
    $roteiro = $_POST['txRot'];
    $elenco = $_POST['txElen'];
    $sinopse = $_POST['txSin'];
    
    

    $stmt = $pdo->prepare("insert into filmes
    values(null,'$nomeFilme','$imagemFilme','$ano','$genero','$temp','$class','$diretor','$roteiro','$elenco','$sinopse')");	    
	$stmt ->execute();    

    //Verificando se cadastrou com sucesso

    if($stmt->rowCount()){
        echo "<p style= 'color: green;'>Filme cadastrado com sucesso</p>";
    } else{
        echo "<p style= 'color: red;'>Erro: filme não cadastrado </p>";
    }
    
    
?>