<?php  
    include("conexao2.php");
    $nomeFilme = $_POST['txFilme'];
    $anoFilme = $_POST['txData'];
    $genFilme = $_POST['txGen'];
    $diretorFilme = $_POST['txDir'];
    $roteiroFilme = $_POST['txRot'];
    $elencoFilme = $_POST['txElen'];
    $sinopse = $_POST['txSin'];
    $imagemFilme = $_POST['imagemFilme'];
    

    $stmt = $pdo->prepare("insert into filmes
    values(null,'$nomeFilme','$anoFilme','$genero','$diretor','$roteiroFilme','$elenco','$sinopse','$imagemFilme')");	    
	$stmt ->execute();    

    //("location:cadastro-filmes.php");  
    
    
?>