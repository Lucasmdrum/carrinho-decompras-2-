<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Minha Loja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Minha Loja</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Carrinho</a></li>
        <li><a href="#">Cadastro</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?php
    $produtos = [
      [
        'nome' => 'Produto 1',
        'imagem' => 'produto1.jpg',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel erat in lacus dapibus luctus. Aenean eu magna et ipsum tempor euismod vitae nec ante. Praesent tristique fringilla quam, eu blandit augue varius vel.'
      ],
      [
        'nome' => 'Produto 2',
        'imagem' => 'produto2.jpg',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel erat in lacus dapibus luctus. Aenean eu magna et ipsum tempor euismod vitae nec ante. Praesent tristique fringilla quam, eu blandit augue varius vel.'
      ],
      [
        'nome' => 'Produto 3',
        'imagem' => 'produto3.jpg',
        'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel erat in lacus dapibus luctus. Aenean eu magna et ipsum tempor euismod vitae nec ante. Praesent tristique fringilla quam, eu blandit augue varius vel.'
      ]
    ];
    ?>

    <?php foreach ($produtos as $produto) { ?>
      <section class="produto">
        <h2><?php echo $produto['nome']; ?></h2>
        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
        <p><?php echo $produto['descricao']; ?></p>
        <button type="button">Adicionar ao carrinho</button>
      </section>
    <?php } ?>
  </main>
</body>
</html>
