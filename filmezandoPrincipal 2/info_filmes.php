<?php include("cabecalho.php"); 
include("conexao2.php");
?>
<?php
$query = "SELECT * FROM filmes";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Processar os dados aqui
} else {
    echo "Nenhum resultado encontrado.";
}
?>

<?php
while ($row = $result->fetch_assoc()) {
    echo "idFilme: " . $row["txIdFilme"] . "<br>";
    echo "nomeFilme: " . $row["nomeFilme"] . "<br>";
   
    // Outros campos que você queira exibir
    echo "<br>";
}
?>
