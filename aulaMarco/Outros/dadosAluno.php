<?php
    $nome =$_POST['txNome'];
    $idade =$_POST['txIdade'];

    $verificacao="";
    if($idade<=10){
        $verificacao ="Uma criança";

    }else if($idade<18){
        $verificacao="DiMenoh :(";

    }else{
        $verificacao="Maior de idade";
    }

   
    echo "$nome $idade $verificacao";
    
?>