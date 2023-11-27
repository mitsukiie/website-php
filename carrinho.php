<?php
// Iniciar ou resumir uma sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redirecionar para a página de login ou outra página
    header("Location: singup.php");
    exit();
}

// Recuperar informações do usuário da sessão
$user_id = $_SESSION['user_id'];
$nome = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome']; 
$email = $_SESSION['email'];
?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Site de compras</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <link href="css/header.css" rel="stylesheet" type="text/css" />
  <link href="css/carrinho.css" rel="stylesheet" type="text/css" />
  <link href="css/footer.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
  
</head>
<body>
<header>
    <nav class="navbar">
      <div class="container">
        <button class="logo">Vougher</button>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Pesquisar">
            <button class="search-button"><svg viewBox="0 0 512 512" title="search">
              <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
            </svg></button>
        </div>
        <a class="carrinho-btn" href="/carrinho.php">
        <svg viewBox="0 0 576 512" title="shopping-cart">
      <path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" />
      </svg></a>
      <a class="user-btn" href="/profile.php">
	<svg viewBox="0 0 512 512" width="100" title="user-alt">
  <path d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z" />
</svg>
<?php
echo '<span>' . htmlspecialchars($nome) . '</span>';
?>
	</a>
      </div>
    </nav>
  </header>

  <div class="produtos-ctn">
    <h2>Carrinho</h2>
    <div id="carrinho" class="carrinho">
    </div>
  </div>

  <script>
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    let total = 0;

    function exibirCarrinho() {
      const carrinhoDiv = document.getElementById('carrinho');

      if (carrinho.length === 0) {
        carrinhoDiv.innerHTML = `
        <div class="no-product">
          <svg viewBox="0 0 384 512" width="100" title="ghost">
            <path d="M186.1.09C81.01 3.24 0 94.92 0 200.05v263.92c0 14.26 17.23 21.39 27.31 11.31l24.92-18.53c6.66-4.95 16-3.99 21.51 2.21l42.95 48.35c6.25 6.25 16.38 6.25 22.63 0l40.72-45.85c6.37-7.17 17.56-7.17 23.92 0l40.72 45.85c6.25 6.25 16.38 6.25 22.63 0l42.95-48.35c5.51-6.2 14.85-7.17 21.51-2.21l24.92 18.53c10.08 10.08 27.31 2.94 27.31-11.31V192C384 84 294.83-3.17 186.1.09zM128 224c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm128 0c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z" />
          </svg>
          <h1>Não há produtos no carrinho.</h1>
        </div>
      `;
      return;
    }

      carrinhoDiv.innerHTML = '';
      carrinho.forEach(item => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.dataset.id = item.id;
        card.innerHTML = `
          <img src="${item.imagem}">
          <span class="preco">${item.preco.toFixed(2)}</span>
          <h4>${item.nome}</h4>
          <p>Tamanho: ${item.tamanho}</p>
          <div class="card-btns">
            <button class="btn remover" onclick="removerItem(${item.id})">Remover do Carrinho</button>
            <button class="btn comprar">Comprar Agora</button>
          </div>
        `;
        carrinhoDiv.appendChild(card);
      });
    }

    function removerItem(id) {
    carrinho = carrinho.filter(item => item.id !== id);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    exibirCarrinho();
  }

    exibirCarrinho();
  </script>
<?php
include 'footer.php';
?>
</body>
</html>

