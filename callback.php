<?php
// Iniciar ou resumir uma sessão
session_start();

// Verifica se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "website";

    // Conectar ao banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Recuperar dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Recomendável usar hash para armazenar senhas

    // Inserir dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        $last_user_id = $conn->insert_id; // Obtém o ID do usuário inserido

        // Fechar a conexão
        $conn->close();
		
		// Armazenar informações do usuário na sessão
        $_SESSION['user_id'] = $last_user_id;
        $_SESSION['nome'] = $nome;
		$_SESSION['sobrenome'] = $sobrenome;
		$_SESSION['email'] = $email;

        // Redirecionar para index.php
        header("Location: home.php");
        exit();
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
} else {
    // Se alguém acessar esta página diretamente sem enviar dados do formulário, redirecione para a página de registro
    header("Location: singup.php");
    exit();
}
?>