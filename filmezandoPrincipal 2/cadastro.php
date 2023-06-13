
<style>.form{
     
     margin-top: 100px;

    }
        </style>
        
<?php include("cabecalho.php"); ?>

        <section>
        <div class="form">
        <div class="title">
            <h1>Novo Usuário</h1>
</div>  
            <form action="salvar_cadastro.php" method="post">      
            <div>
                        <input type="text" placeholder="Nome de usuário" name="txNome" />
                    </div>		
                    <div>
                        <input type="email" placeholder="E-mail" name="txEmail" />
                    </div>		
                    <div>
                        <input type="password" placeholder="Senha" name="txSenha" />
                    </div>

                <div>
                    <input type="submit" value="Cadastrar" />
                </div>
            </form>
            <p>Já possui uma conta? <a href="login.php">Faça login</a></p>
            
        </section>
        
    </body>
</html>