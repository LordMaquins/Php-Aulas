<?php  
    include("conexao2.php");
    $id = $_POST['txIdFilme'];
    $nomeFilme = $_POST['txFilme'];
    $imagemFilme = $_FILES['imagemFilme'];
    $ano = $_POST['txData'];
    $temp = $_POST['txTemp'];
    $class = $_POST['txClass'];
    $genero = $_POST['txGen'];
    $diretor = $_POST['txDir'];
    $roteiro = $_POST['txRot'];
    $elenco = $_POST['txElen'];
    $sinopse = $_POST['txSin'];
    

    $stmt = $pdo->prepare("
        update filmes set
        nomeFilme='$nomeFilme',
        imgFilme='$imagemFilme',
        anoFilme='$ano',
        genero='$$genero'
        diretor='$diretor'
        roteiro='$roteiro'
        elenco='$elenco'
        sinopse='$sinopse'
        where idFilme ='$id';
    ");	    
	$stmt ->execute();    

 header("location:lista-filmes.php");  
 
?>