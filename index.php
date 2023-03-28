<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Carrinho de Compras</h1>
    
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>
        <button type="submit">Finalizar Compra</button>
    </form>

    <h2>Produtos</h2>
    <ul>
        <li>
            <span>Produto 1</span>
            <span>R$ 10,00</span>
            <button class="add-to-cart" data-id="1">Adicionar ao Carrinho</button>
        </li>
        <li>
            <span>Produto 2</span>
            <span>R$ 20,00</span>
            <button class="add-to-cart" data-id="2">Adicionar ao Carrinho</button>
        </li>
        <li>
            <span>Produto 3</span>
            <span>R$ 30,00</span>
            <button class="add-to-cart" data-id="3">Adicionar ao Carrinho</button>
        </li>
    </ul>

    <h2>Carrinho</h2>
    <ul id="cart-items"></ul>

    <script src="cadastro.js"></script>
</body>
</html>
