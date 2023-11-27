<?php
// Iniciar ou resumir uma sessão
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Site de compras</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <link href="css/header.css" rel="stylesheet" type="text/css" />
  <link href="css/produto.css" rel="stylesheet" type="text/css" />
  <link href="css/alerta.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
  
</head>
<body>
<header>
<header>
    <nav class="navbar">
      <div class="container">
        <button class="logo">EABR</button>
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
<?php
if (isset($_SESSION['user_id'])) {
    $nome = $_SESSION['nome'];
      echo '<a class="user-btn" href="/profile.php">';
	echo '<svg viewBox="0 0 512 512" width="100" title="user-alt">';
  echo '<path d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z" />
</svg>';
echo '<span>' . htmlspecialchars($nome) . '</span>';
}
?>
	</a>
      </div>
      <div class="container">	
      <button class="category-btn" id="toggle-category">Categorias
      <svg viewBox="0 0 320 512" title="angle-down">
      <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
      </svg></button>
      <?php
      if (!isset($_SESSION['user_id'])) {
      echo '<div class="entry-btns">';
      echo '<a href="/singup.php" class="sing-up">Cadastrar</a>';
    echo '<span>|</span>';
      echo '<a href="/login.php" class="log-in">Entrar</a>';
      echo '</div>';
    }
    ?>
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

<div class="alert" id="alert">
    <div class="alert-info">
      <span id="text"></span>
      <button class="close-btn" onclick="closeAlert()">X</button>
    </div>
  </div>

  <script src="scripts/alert.js"></script>

     
<?php
// Verifique se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    // Conecte-se ao banco de dados e recupere as informações do produto
    $produto_id = $_GET['id'];


    $conexao = mysqli_connect("localhost", "root", "", "website");
    
    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM produtos WHERE produto_id = $produto_id";
    $resultado = mysqli_query($conexao, $query);

    // Verifique se a consulta foi bem-sucedida
    if ($resultado) {
        // Recupere os dados do produto
        $produto = mysqli_fetch_assoc($resultado);

        // Exiba as informações do produto na página
        echo "<div class='produto'>";
        echo "<img src='{$produto['imagem']}' class='icon-promo'>";
        echo "<div class='produto-conteiner'>";
        echo "<div class='produto-nome'>";
        echo "<h2>{$produto['nome']}</h2>";
        echo "</div>";
        echo "<div class='produto-preco'>";
        $velho = $produto['preco'] * 1.20;
        echo "<p class='velho'>R$ {$velho}</p>";
        echo "<p class='novo'>R$ {$produto['preco']}</p>";
        echo "</div>";
        echo "<div class='sizes'>";
        echo "<label for='size'>Tamanhos: </label>";
        echo "<select id='size'>";
        echo "<option value='P'>P</option>";
        echo "<option value='M'>M</option>";
        echo "<option value='G'>G</option>";
        echo "</select>";
        echo "</div>";
        echo "<button class='btn-preco carrinho' onclick='adicionarAoCarrinho()'>Adicionar ao Carrinho</button>";
        echo "<button class='btn-preco comprar'>Comprar Agora</button>";
        echo "</div>";
        echo "</div>";

        echo "<script>";
echo "function adicionarAoCarrinho() {";
echo "  let nome = '{$produto['nome']}';";
echo "  let preco = {$produto['preco']};";
echo "  let imagem = '{$produto['imagem']}';";
echo "  let tamanho = getSize();"; // Chama a função JavaScript getSize() para obter o tamanho selecionado
echo "  add(nome, preco, imagem, tamanho);";
echo "}";
echo "</script>";

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
    } else {
        echo "Erro na consulta ao banco de dados: " . mysqli_error($conexao);
    }
} else {
    echo "ID do produto não especificado na URL.";
}
?>


<script>
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    let total = 0;

    function getSize() {
      // Retorna o tamanho selecionado no seletor
      const sizeSelect = document.getElementById('size');
      return sizeSelect.value;
    }

      function add(nome, preco, imagem, tamanho) {
      // Verificar se o produto já está no carrinho
      const produtoExistente = carrinho.find(item => item.nome === nome);

      if (!produtoExistente) {
        carrinho.push({ nome, preco, imagem, tamanho });
        total += preco;
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
        showAlert('Produto adicionado ao carrinho.');
      } else {
        showAlert('Produto já está no carrinho.');
      }
    }
  </script>

</body>
</html>