<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"></head>
    <style>.form2{
     
     margin-top: 70px;
    }
</style>
</head>
    <body>
    <?php include("cabecalho.php"); ?>

        <section>
        <div class="form2">
            <div class="title">
            <h1>Contato</h1>
            </div>
            <form action="contato-salvar.php" method="post"> 
</div>     
                <div>
                    <input type="text" placeholder="Nome" name="txNome" />
                </div>		

                <div>
                    <input type="text" placeholder="E-mail" name="txEmail" />
                </div>		

                <div>
                    <input type="text" placeholder="Assunto" name="txAssunto" />
                </div>		

                <div>
                    <textarea placeholder="Mensagem" cols="30" rows="10" class="control" name="txMensagem"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>