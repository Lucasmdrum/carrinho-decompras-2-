<?php
$erro = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Verifica se o usuário e a senha são válidos
  if ($_POST['usuario'] == 'admin' && $_POST['senha'] == '123') {
    // Redireciona para a página inicial do site
    header('Location: index.php');
    exit;
  } else {
    // Exibe uma mensagem de erro
    $erro = 'Usuário ou senha inválidos.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - Minha Loja</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <header>
    <h1>Minha Loja</h1>
    <img src="logo.png" alt="Logo da Minha Loja">
  </header>

  <form method="post">
    <?php if ($erro): ?>
      <div class="erro">
        <?php echo $erro; ?>
      </div>
    <?php endif; ?>

    <div>
      <label for="usuario">Usuário:</label>
      <input type="text" id="usuario" name="usuario" required>
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>
