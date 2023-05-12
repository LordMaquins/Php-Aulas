
    <style>.form{
     
     margin-top: 100px;

    }
        </style>
<?php include("cabecalho.php"); ?>?>

        <section>
        <div class="form">
        <div class="title">
            <h1>Cadastre os novos filmes</h1>
</div>
            <form action="filmes-salvos.php" method="POST" enctype="multipart/form-data">      
                <div>
                    <input type="text" placeholder="Filme" name="txFilme" />
                </div>	
                </div>
                
                <input type="text" placeholder="Link imagem Filme"name="imagemFilme" id="imgFilme" required> <br><br>

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
                <div class="mb-3 col-12">
                    <textarea  cols="30" rows="10" class="control" placeholder="Sinopse" name="txSin"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>