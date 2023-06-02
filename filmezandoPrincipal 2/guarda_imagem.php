<?php

//imagem do marcador 
// isset serve para verificar se aquela variavel foi definida ou não

if (isset($_FILES["arqimage"])) {
    $arqINome = $_FILES["imagemFilme"]["name"];
    $arqITipo = $_FILES["imagemFilme"]["type"];
    $arqITamanho = $_FILES["imagemFilme"]["size"];
    $arqINomeTemp = $_FILES["imagemFilme"]["tmp_name"];
    $erroImgMarc = $_FILES["imagemFilme"]["error"];

    if ($erroImgMarc == 0) {
        if (is_uploaded_file($arqINomeTemp)) {
            if (move_uploaded_file($arqINomeTemp, "images/" . $arqINome)) {
                $caminhoI = $arqINome;
            } else {
                $erro = "Falha ao mover imagem do marcador";
                echo $erro;
            }
        }
    } else {
        $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso";
        echo $erro;
    }


}

?>