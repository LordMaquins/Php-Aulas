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
                    <input type="text" placeholder="Filme" name="txFilme" value="<?php echo @$_GET['nomeFilme']; ?>"/>
                </div>	
                </div>
                
                <input type="text" placeholder="Link imagem Filme"name="imagemFilme" id="imgFilme"    value="<?php echo @$_GET['imagemFilme']; ?>" required> <br><br>

                <div>
                    <input type="text" placeholder="Gênero" name="txGen"  value="<?php echo @$_GET['genero']; ?>"/>
                </div>	
                <div>
                    <input type="text" placeholder="Duração" name="txTemp" value= "<?php echo @$_GET['temp']; ?>" />
                </div>
                <div>
                    <input type="text" placeholder="Classificação" name="txClass" value= "<?php echo @$_GET['class']; ?>" />
                </div>	
                
                <div>
                    <input type="text" placeholder="Data de lançamento" name="txData" value= "<?php echo @$_GET['ano']; ?>"/>
                </div>
                <div>
                    <input type="text" placeholder="Diretor" name="txDir" value="<?php echo @$_GET['diretor']; ?>" />
                </div>	
                <div>
                    <input type="text" placeholder="Roteiro" name="txRot" value= "<?php echo @$_GET['roteiro']; ?>"/>
                </div>	
                <div>
                    <input type="text" placeholder="Elenco" name="txElen"  value="<?php echo @$_GET['elenco']; ?>"/>
                </div>	
                <div>
                <div class="mb-3 col-12">
                    <textarea  cols="30" rows="10" class="control" placeholder="Sinopse" name="txSin" ><?php echo @$_GET['sinopse']; ?></textarea>
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
                <th scope="col">Duração</th>
                <th scope="col">Classificação</th>
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
                    echo "<td> $row[9] </td>";
                    echo "<td> $row[10] </td>";
                    echo "<td> 
                    <a href='?id=$row[0]&nomeFilme=$row[1]&imagemFilme=$row[2]&genero=$row[3]&temp=$row[4]&class=$row[5]
                    &ano=$row[6]& &diretor=$row[7]&roteiro=$row[8]& &elenco=$row[9]& &sinopse=$row[10]' > Editar </a>
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