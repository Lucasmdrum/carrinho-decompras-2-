<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Cadastro</h1>

        <form id="form-cadastro" method="post" action="cadastrar.php">
            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <label for="confirma-senha">Confirmar senha:</label>
            <input type="password" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço completo" required>

            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <footer>
        <p>Todos os direitos reservados.</p>
    </footer>
</body>
</html>
