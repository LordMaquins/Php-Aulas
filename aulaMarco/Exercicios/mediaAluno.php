<?php
        $nota1 = $_POST["txNota1"];
        $nota2 = $_POST["txNota2"];
        $nota3 = $_POST["txNota3"];
        $nota4 = $_POST["txNota4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo "Sua média é: $media <br>";
        if ($media >= 6) {
            echo "<p style='color: blue;'>Aprovado</p>";
        } else {
            echo "<p style='color: red;'>Reprovado</p>";
        }
?>