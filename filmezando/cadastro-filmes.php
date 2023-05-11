<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Filmes</title>
    <head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>.form{
     
     margin-top: 100px;

    }
        </style>
<?php include("cabecalho.php"); ?>

        <section>
        <div class="form">
            <h1>Cadastre os novos filmes</h1>
            <form action="filmes-salvos.php" method="POST" enctype="multipart/form-data">      
                <div>
                    <input type="text" placeholder="Filme" name="txFilme" />
                </div>	
                </div>
                <label > Cartaz do filme </label>	
                <input type="text" name="imagemFilme" id="Img_filme" required> <br><br>

                <div>
                    <input type="text" placeholder="Gênero" name="txGen" />
                </div>		
                
                <div>
                    <input type="text" placeholder="Data de lançamento" name="txData" />
                </div>
                <div>
                    <input type="text" placeholder="Diretor" name="txDir" />
                </div>	
                <div>
                    <input type="text" placeholder="Roteiro" name="txRot" />
                </div>	
                <div>
                    <input type="text" placeholder="Elenco" name="txElen" />
                </div>	
                <div>
                    <textarea placeholder="Sinopse" name="txSin"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>