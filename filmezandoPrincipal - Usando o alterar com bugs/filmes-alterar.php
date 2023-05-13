<?php  
    $id=$_POST['idFilme'];
    $nomeFilme = $_POST['txFilme'];
    $imagemFilme = $_POST['imagemFilme'];
    $anoFilme = $_POST['txData'];
    $genFilme = $_POST['txGen'];
    $diretorFilme = $_POST['txDir'];
    $roteiroFilme = $_POST['txRot'];
    $elencoFilme = $_POST['txElen'];
    $sinopse = $_POST['txSin'];
    
    include("conexao2.php");

    $stmt = $pdo->prepare("
        update filmes set
        txFilme='$nomeFilme',
        imagemFilme='$imagemFilme',
        txData='$anoFilme',
        txGen='$$genFilme'
        txDir='$diretorFilme'
        txRot='$roteiroFilme'
        txElen='$elencoFilme'
        txSin='$sinopse'


            where idFilme ='$id';
    ");	    
	$stmt ->execute();    

    header("location:filme-lista.php");    
    
?>