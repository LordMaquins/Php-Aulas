<style>.form{
     
     margin-top: 100px;

    }
    </style>

    <body>  
    <div class="form">
        <div class="title">
            <h1>LOGIN</h1>
</div>

<?php



include("fazer_login.php") ?>
    <?php include("cabecalho.php"); ?>


        <section>

            <form action="fazer_login.php" method="post">      
                	

                <div>
                    <input type="text" placeholder="E-mail" name="txEmail" />
                </div>		
                <div>
                    <input type="password" placeholder="Senha" name="txSenha" />
                </div>
                <?php
        if(isset($_GET['mensagem'])){
    ?>
        <div>
            <p> <?php echo $_GET['mensagem']; ?> </p>
        </div>    
    <?php } ?>

                <div>
                    <input type="submit" value="Login" />
                </div>
            </form>
            <p>Não possui uma conta? <a href="cadastro.php">Criar Conta</a></p>
        </div>
        </section> 
    </body>   
    
</html>
 