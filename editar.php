<?php
// Incluir o ficheiro da ligação à base de dados
require "db.php";

// Receber o ID enviado pela URL
// Exemplo: editar.php?id=3
$id = $_GET['id'];

// Buscar os dados atuais do utilizador com esse ID
$res = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

// Converter o resultado da query num array
$u = mysqli_fetch_assoc($res);

// Verificar se o formulário foi submetido
if (isset($_POST['nome'])) {

    // Guardar os novos dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Executar a query SQL para atualizar os dados
    mysqli_query(
        $conn,
        "UPDATE users SET nome='$nome', email='$email' WHERE id=$id"
    );

    // Mostrar mensagem de sucesso
    echo "Utilizador atualizado! <a href='index.php'>Voltar</a>";

    // Parar o script
    exit;
}
?>

<!--
    Formulário com os dados atuais do utilizador
    Os valores aparecem preenchidos nos campos
-->

<form method="post">
    Nome: <input name="nome" value="<?php echo $u['nome']; ?>"><br>
    Email: <input name="email" value="<?php echo $u['email']; ?>"><br>
    <button>Atualizar</button>
</form>

<!-- Link para cancelar -->
<a href="index.php">Cancelar</a>
