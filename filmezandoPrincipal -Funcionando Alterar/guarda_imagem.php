<?php 

if(isset($_FILES["imagemFilme"])){
    $imgNome= $_FILES["imagemFilme"]["name"];
    $imgTipo= $_FILES["imagemFilme"]["type"];
    $imgTamanho= $_FILES["imagemFilme"]["size"];
    $imgNomeTemp= $_FILES["imagemFilme"]["tmp_name"];
    $erroImgMarc = $_FILES["imagemFilme"]["error"];

if($erroImgMarc==0){
    if(is_uploaded_file($imgNomeTemp)){
        if(move_uploaded_file($imgNomeTemp,"images/".$imgNome)){
            $caminhoI =$imgNome;
        }
        else{
                $erro="Falha ao mover imagem do marcador";
                echo"$erro";
            }
        }
        else{
            $erro="Erro no envio: A imagem do marcador não foi recebida com sucesso. ";
            echo "$erro";
        }
    }
    else{
        $erro= "Erro no envio: ".$erro;
        echo"$erro";
    }
}
else{
    $erro="Imagem do Marcador enviado não encontrado";
    echo"$erro";
}



?>