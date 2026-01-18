<?php
// Incluir o ficheiro da ligação à base de dados
require "db.php";

// Executar uma query SQL para buscar TODOS os utilizadores
$resultado = mysqli_query($conn, "SELECT * FROM users");

// Mostrar título
echo "<h2>UTILIZADORES</h2>";

// Link para criar um novo utilizador
echo "<a href='criar.php'>[ Criar novo ]</a><br><br>";

// Enquanto houver registos na base de dados
while ($u = mysqli_fetch_assoc($resultado)) {

    // $u é um array com os dados de UM utilizador
    // Exemplo: $u['id'], $u['nome'], $u['email']

    // Mostrar os dados numa linha simples
    echo "ID: " . $u['id'] . " | ";
    echo "Nome: " . $u['nome'] . " | ";
    echo "Email: " . $u['email'] . " | ";

    // Link para editar o utilizador
    // O ID é enviado pela URL usando GET
    echo "<a href='editar.php?id=".$u['id']."'>Editar</a> ";

    // Link para apagar o utilizador
    // O ID também é enviado pela URL
    echo "<a href='apagar.php?id=".$u['id']."'>Apagar</a>";

    // Quebra de linha
    echo "<br>";
}
