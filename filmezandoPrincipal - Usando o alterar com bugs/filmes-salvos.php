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
    $anoFilme = $_POST['txData'];
    $genFilme = $_POST['txGen'];
    $diretorFilme = $_POST['txDir'];
    $roteiroFilme = $_POST['txRot'];
    $elencoFilme = $_POST['txElen'];
    $sinopse = $_POST['txSin'];
    
    

    $stmt = $pdo->prepare("insert into filmes
    values(null,'$nomeFilme','$imagemFilme','$anoFilme','$genFilme','$diretorFilme','$roteiroFilme','$elencoFilme','$sinopse')");	    
	$stmt ->execute();    

    //Verificando se cadastrou com sucesso

    if($stmt->rowCount()){
        echo "<p style= 'color: green;'>Filme cadastrado com sucesso</p>";
    } else{
        echo "<p style= 'color: red;'>Erro: filme não cadastrado </p>";
    }
    
    
?>