<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Site de compras</title>
  <link href="css/singup.css" rel="stylesheet" type="text/css" />
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
  
</head>
<body>

 <form class="conteiner" action="callback.php" method="post">
<h1>Criar Conta</h1>
    <input type="text" name="nome" placeholder="Nome" required/>
        <input type="text" name="sobrenome" placeholder="Sobrenome (Opcional)"/>
        <input type="email" name="email" placeholder="E-mail" required/>
        <input type="password" name="senha" placeholder="Senha" required/>
        <span>Tem uma conta? <a href="login.php">Entre</a></span>
	<button type="submit" class="singup-btn">Inscrever-se</button>
   </form>


</body>
</html>