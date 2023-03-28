<?php


// start session 




session_start();

if (!isset($_SESSION["admin"])) {
  // Sessão de admin não está ativa, redireciona para a página de login
  header("Location: login.php");
  exit;
}






  // Conecta ao banco de dados
$conn = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

// Busca os produtos no banco de dados
$query = "SELECT * FROM produtos";
$result = mysqli_query($conn, $query);

// Exibe os produtos em uma tabela
echo "<table>";
echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Imagem</th><th>Preço</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row["id"] . "</td>";
  echo "<td>" . $row["nome"] . "</td>";
  echo "<td>" . $row["descricao"] . "</td>";
  echo "<td><img src='" . $row["imagem"] . "'></td>";
  echo "<td>" . $row["preco"] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn)






//  para adicionar ao banco de dados 









  
