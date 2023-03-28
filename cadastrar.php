<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="cadastrar.css">
  </head>
  <body>
    <header>
      <h1>Cadastro de Usuário</h1>
    </header>
    <nav>
      <ul>
        <li><a href="minhaloja.php">Home</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </nav>
    <main>
      <form action="cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit" name="cadastrar">Cadastrar</button>
      </form>
    </main>
  </body>
</html>



<?php
if (isset($_POST['cadastrar'])) {
  // Receber os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  // Conectar ao banco de dados e inserir os dados
  $conn = new mysqli('localhost', 'usuario', 'senha', 'banco_de_dados');
  
  if ($conn->connect_error) {
    die('Erro ao conectar ao banco de dados: ' . $conn->connect_error);
  }
  
  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  
  if ($conn->query($sql) === TRUE) {
    echo 'Usuário cadastrado com sucesso!';
  } else {
    echo 'Erro ao cadastrar o usuário: ' . $conn->error;
  }
  
  $conn->close();
}
?>
