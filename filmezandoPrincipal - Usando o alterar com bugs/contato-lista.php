<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de contatos</title>
    <style>.form3{
     
     margin-top: 55px;

    }
    </style>

</head>
<body>

<?php include("cabecalho.php"); ?>

    <section>
<div class="form3">
    <form action="contato-alterar.php" method="post">      
        <div>
          <input type="hidden" name="txIdContato" value="<?php echo @$_GET['id']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="Nome" name="txNome" value="<?php echo @$_GET['nome']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="E-mail" name="txEmail" value="<?php echo @$_GET['email']; ?>" />
        </div>		

        <div>
            <input type="text" placeholder="Assunto" name="txAssunto" value="<?php echo @$_GET['assunto']; ?>" />
        </div>		

        <div>
        <div class="mb-3 col-12">
            <textarea cols="30" rows="10" class="control" placeholder="Mensagem" name="txMensagem" >
              <?php echo @$_GET['msg']; ?>  
            </textarea>
        </div>

        <div>
            <input type="submit" value="Salvar" />
        </div>
    </form>
    </div>




        <table class="table table-striped">
            <thead>
                <div class="form3">
                <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Assunto</th>
                <th scope="col">Mensagem</th>			
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbcontato");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> 
                            <a href='?id=$row[0]&nome=$row[1]&email=$row[2]&assunto=$row[3]&msg=$row[4]'> Editar </a>

                            <a href='contato-excluir.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>
            
            

</body>
</html>