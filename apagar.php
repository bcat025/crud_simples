<?php
// Incluir o ficheiro da ligação à base de dados
require "db.php";

// Receber o ID enviado pela URL
// Exemplo: apagar.php?id=5
$id = $_GET['id'];

// Executar a query SQL para apagar o utilizador
mysqli_query($conn, "DELETE FROM users WHERE id=$id");

// Mostrar mensagem de confirmação
echo "Utilizador apagado! <a href='index.php'>Voltar</a>";
