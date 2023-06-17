<head>
    <title>Página de Filmes</title>
    <style>
        /* Adicione estilos CSS para o layout da página */
        .movie-container {
            display: flex;
        }
        .movie-poster {
            width: 390px;
            margin-left: 30px;
        }
        .movie-details {
            flex: 1;
        }
        div.item2 {
    padding: 10px;
    width: 500px;
    margin: 20px;
}

div.item2:hover {
    background-color: (5, 49, 131);
    cursor: pointer;
    
}

div.item2 img {
    
    
    width: 100%;
    border-radius: 50px;
}
.body {
  display: flex;
  align-items: right;
  justify-content: right;
  height: 0vh;
  margin-right: 400px;
  margin-top: 50px;
  
  
}

.texto-centralizado {
  text-align: left;
  margin-left:40px;
}
.form{
    
     margin-top: 100px;
     border-bottom: 5px solid red;
     padding-bottom: 10px;
     text-decoration: none;
     display: inline-block;
     
     



    }

    </style>
</head>
 <?php include("cabecalho.php"); ?>
<?php
$filmes = json_decode(file_get_contents('filmes6.json'), true);
?>
<?php foreach ($filmes as $filme): ?>
   
    <div class="form">
          <h1>  PÁGINA DO FILME</h1>
</div>  
</DIV>
  <div class="movie-container">
      <div class="movie-poster">
          <!-- Aqui será exibido o cartaz do filme -->
          
          <div class="row">
    <div class="item2 ">
        
          <img src="images/barbie_ver2_xlg.jpg" alt="Cartaz do Filme">
      </div>
</div>
</div>

<div class="body">
<div class="texto-centralizado">
      <div class="movie-details">
          <!-- Aqui serão exibidas as informações do filme -->
          <h2><?php echo $filme['titulo']; ?></h2>
          <p ><strong>Data de Lançamento: </strong><?php echo $filme['dataLancamento']; ?></p>
          <p><strong>Genero: </strong><?php echo $filme['genero']; ?> </p>
          <p><strong>Duração: </strong><?php echo $filme['duracao']; ?> minutos</p>
          <p><strong>Sinopse: </strong><?php echo $filme['sinopse']; ?></p>
          <p><strong>Elenco: </strong><?php echo $filme['elenco']; ?></p>
          <p><strong>Roteiro/Diretor: </strong><?php echo $filme['roteiroDiretor']; ?></p>
          <p><strong>Distribuição: </strong><?php echo $filme['distribuidora']; ?></p>
          <p><strong>Link trailer:</strong><a href='https://youtu.be/_4is7I_ZxTg'>https://youtu.be/_4is7I_ZxTg</p></a>
          
      </div>
</div>
  </div>
<?php endforeach; ?>
