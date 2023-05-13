<?php include("conexao2.php"); ?>
<?php include("cabecalho.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de filmes</title>

    <style>.form2{
     
     margin-top: 40px;
    }
</style>

</head>
<body>
<section>
        <div class="form">
        <div class="title">
            <h1>Cadastre os novos filmes</h1>
</div>
            <form action="filmes-alterar.php" method="POST" enctype="multipart/form-data">      
                <div>
                    <input type="text" placeholder="Filme" name="txFilme" <?php echo @$_GET['nomeFilme']; ?>/>
                </div>	
                </div>
                
                <input type="text" placeholder="Link imagem Filme"name="imagemFilme" id="imgFilme"<?php echo @$_GET['imagemFilme']; ?>  required> <br><br>

                <div>
                    <input type="text" placeholder="Gênero" name="txGen"  <?php echo @$_GET['&genFilme']; ?>/>
                </div>		
                
                <div>
                    <input type="text" placeholder="Data de lançamento" name="txData"  <?php echo @$_GET['anoFilme']; ?>/>
                </div>
                <div>
                    <input type="text" placeholder="Diretor" name="txDir" <?php echo @$_GET['diretorFilme']; ?> />
                </div>	
                <div>
                    <input type="text" placeholder="Roteiro" name="txRot"  <?php echo @$_GET['roteiroFilme']; ?>/>
                </div>	
                <div>
                    <input type="text" placeholder="Elenco" name="txElen"  <?php echo @$_GET['elencoFilme']; ?>/>
                </div>	
                <div>
                <div class="mb-3 col-12">
                    <textarea  cols="30" rows="10" class="control" placeholder="Sinopse" name="txSin" <?php echo @$_GET['sinopse']; ?>></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>




    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <div class="form2">
                <th scope="col">idFilme</th>
                <th scope="col">nomeFilme</th>
                <th scope="col">Link_Imagem</th>
                <th scope="col">Data de lançamento</th>
                <th scope="col">Gênero</th>
                <th scope="col">Diretor</th>			
                <th scope="col">Roteiro</th>
                <th scope="col">Elenco</th>
                <th scope="col">Sinopse</th>
                </div>
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select *from filmes");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "<td> $row[6] </td>";
                    echo "<td> $row[7] </td>";
                    echo "<td> $row[8] </td>";
                    echo "<td> 
                    <a href='filmes-alterar.php?id=$row[0]&nomeFilme=$row[1]&imagemFilme=$row[2]&genFilme=$row[3]
                    &anoFilme=$row[4]& &diretorFilme=$row[5]&roteiroFilme=$row[6]& &elencoFilme=$row[7]& &sinopse=$row[8]' > Editar </a>
                            <a href='filmes-excluir.php?id=$row[0]'> Excluir </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>

</body>
</html>