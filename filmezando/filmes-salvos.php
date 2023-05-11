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
    values(null,'$nomeFilme','$anoFilme','$genFilme','$diretorFilme','$roteiroFilme','$elencoFilme','$sinopse','$imagemFilme')");	    
	$stmt ->execute();    

    //header("location:cadastro-filmes.php");  
    echo ("test");  
    
?>