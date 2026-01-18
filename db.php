<?php
// Criar ligação à base de dados MySQL
// mysqli_connect(servidor, utilizador, password, base_de_dados)
$conn = mysqli_connect("localhost", "root", "", "crud_simples");

// Verificar se a ligação falhou
if (!$conn) {

    // Se a ligação falhar, o script pára
    // e mostra esta mensagem de erro
    die("Erro na ligação à base de dados");
}

// Se chegar aqui, a ligação foi feita com sucesso
