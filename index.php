<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "root", "", "website");
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Site de compras</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <link href="css/header.css" rel="stylesheet" type="text/css" />
  <link href="css/footer.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
  
</head>
<body>
<header>
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
      </div>
      <div class="container">	
      <button class="category-btn" id="toggle-category">Categorias
      <svg viewBox="0 0 320 512" title="angle-down">
      <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
      </svg></button>
      <div class="entry-btns">
      <a href="/singup.php" class="sing-up">Cadastrar</a>
      <span>|</span>
      <a href="/login.php" class="log-in">Entrar</a>
      </div>
      </div>
    </nav>
    <div class="menu">
      <div class="menu-content">
        <div class="ctn-ctg">
          <div class="ctn-links">
          <h2>Promoçoes</h2>
           <ul>
              <li><a href="#">Liquida Geral</a></li>
          </ul>
        </div>
        <div class="ctn-links">
          <h2>Masculino</h2>
           <ul>
              <li><a href="#">Camisetas</a></li>
              <li><a href="#">Calças</a></li>
              <li><a href="#">Sapatos</a></li>
              <li><a href="#">Casacos</a></li>
              <li><a href="#">Acessórios</a></li>
              <li><a href="#">Roupas Íntimas</a></li>
          </ul>
        </div>
        <div class="ctn-links">
          <h2>Feminino</h2>
           <ul>
              <li><a href="#">Blusas</a></li>
              <li><a href="#">Calças Femininos</a></li>
              <li><a href="#">Vestidos Femininas</a></li>
              <li><a href="#">Sapatos</a></li>
              <li><a href="#">Bijuterias</a></li>
              <li><a href="#">Lingerie</a></li>
          </ul>
        </div>
        <div class="ctn-links">
          <h2>Infantil</h2>
          <ul>
              <li><a href="#">Roupas de Bebê</a></li>
              <li><a href="#">Roupas Infantis</a></li>
              <li><a href="#">Calçados Infantis</a></li>
              <li><a href="#">Acessórios Infantis</a></li>
          </ul>
        </div>
          </div>
      </div>
    </div>
  </header>
<script src="scripts/category.js"></script>

  </br>
</br>
</br>
</br>
</br>
      <div class="content">
        <div onclick="carrouselLeft()"><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path
              d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
          </svg>
        </div>
        <div class="carrousel">
          <div class="carrousel-item" id="carrouselimg1">
            <img
              src="https://cf.shopee.com.br/file/br-50009109-7a100dcea9b63258a3ff26f11524c27a_xxhdpi">
          </div>
          <div class="carrousel-item" id="carrouselimg2">
            <img src="https://cf.shopee.com.br/file/br-50009109-2b61477443dcfd2cb3ca7b599e8cfcb6">
          </div>
          <div class="carrousel-item" id="carrouselimg3">
            <img src="https://cf.shopee.com.br/file/br-50009109-4160b07257b933aaafa4e3174fe8ca1d">
          </div>
          <div class="carrousel-item" id="carrouselimg4">
            <img
              src="https://cf.shopee.com.br/file/br-50009109-4c8796316ecb648c855dd307d6119478">
          </div>
          <div class="carrousel-item" id="carrouselimg5">
            <img
              src="https://cf.shopee.com.br/file/br-50009109-129fab97370a00c5188bf72ed45000b9_xxhdpi">
          </div>
        </div>
        <div onclick="carrouselRight()"><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path
              d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
          </svg>
        </div>
      </div>
      <div id="carousel-dots">
          <span class="dot" ></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
      </div>

      <script src="scripts/carrosel.js"></script>


      <div class="promo">
    <br>
    <h2>Promoções</h2>
    <div class="cards">
        <?php
        // Consultar produtos no banco de dados
$query = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $query);

// Exibir a lista de produtos
while ($produto = mysqli_fetch_assoc($resultado)) {
  echo "<a href='/produto.php?id={$produto['produto_id']}' class='card'>";
  echo "<img src='{$produto['imagem']}' class='icon-promo'>";
  echo "<button class='preco'>{$produto['preco']}</button>";
  echo "<h4>{$produto['nome']}</h4>";
  echo '</a>';
}

// Fechar a conexão
mysqli_close($conexao);
?>
    </div>
  </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php
include 'footer.php';
?>

</body>
</html>