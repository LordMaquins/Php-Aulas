
    <style>.form{
     
     margin-top: 100px;

    }
        </style>
        
<?php include("cabecalho.php"); ?>

        <section>
        <div class="form">
        <div class="title">
            <h1>Cadastro de novos filmes</h1>
</div>
            <form action="filmes-salvos.php" method="POST" enctype="multipart/form-data">      
                <div>
                    <input type="text" placeholder="Filme" name="txFilme" />
                </div>	
               
        <input type="text" placeholder="Link da imagem" name="imagemFilme">
        
    
                

                <div>
                    <input type="text" placeholder="Data de lançamento" name="txData" />
                </div>
                <div>
                    <select  name="txGen" >
                        <option value="1"> Drama </option>
                        <option value="2"> Ação  </option>
                        <option value="3"> Aventura </option>
                        <option value="3"> Terror </option>
                        <option value="3"> Animação </option>
                        <option value="3"> Comédia </option>
                        <option value="3"> Ficção Científica </option>

                    </select>
                </div>	
                <div>
                    <input type="text" placeholder="Duração" name="txTemp" />
                </div>
                <div>
                    <input type="text" placeholder="Classificação" name="txClass" />
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
    <?php include("rodape.php"); ?>   
</html>