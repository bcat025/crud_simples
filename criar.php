<?php
// Incluir o ficheiro da ligação à base de dados
require "db.php";

// Verificar se o formulário foi submetido
// Se existir $_POST['nome'], significa que o utilizador carregou no botão
if (isset($_POST['nome'])) {

    // Guardar os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Executar a query SQL para inserir um novo utilizador
    mysqli_query(
        $conn,
        "INSERT INTO users (nome, email) VALUES ('$nome', '$email')"
    );

    // Mostrar mensagem de sucesso
    echo "Utilizador criado! <a href='index.php'>Voltar</a>";

    // Parar o script para não mostrar o formulário outra vez
    exit;
}
?>

<!--
    Se o formulário ainda NÃO foi enviado,
    o código HTML abaixo será mostrado
-->

<form method="post">
    <!-- Campo para o nome -->
    Nome: <input name="nome"><br>

    <!-- Campo para o email -->
    Email: <input name="email"><br>

    <!-- Botão para enviar o formulário -->
    <button>Guardar</button>
</form>

<!-- Link para cancelar e voltar -->
<a href="index.php">Cancelar</a>