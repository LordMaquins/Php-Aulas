<?php include("cabecalho.php");
include("conexao2.php");

?>



            <h2 class="h1 text-center my-5"> Filmes  <strong></strong></h2>
            <div class="lista-de-imagens row">              
                <?php
                        $stmt = $pdo->prepare ("select * from filmes");
                        $stmt->execute();

                        while ($row = $stmt->fetch( PDO::FETCH_BOTH)) {

                            echo "
                                    
                                    <div class='preto'></div>
                                    <div class='descricao'>
                                        <h2>$row[nomeFilme]</h2>
                                        Ano: $row[anoFilme]</h4>
                                        <div class='oculto'>
                                        <h3>$row[genero]</h3>
                                        <h4>$row[diretor]<br></h4>
                                        <h4>$row[elenco]<br></h4>
                                                <h5>Roteiro: $row[roteiro]</h5>
                                                <div class='pet col-xl-3 col-md-5' style='--imagem-fundo: url(" . "$row[imagemFilme]');'>
                                        </div>
                                    </div>
                                </div>
                                    ";

                        }
                ?>
                
            </div>
        </div>
