# CRUD Simples em PHP + MySQL

Este é um projeto de **CRUD (Create, Read, Update, Delete)** simples feito em **PHP** com **MySQL**, ideal para iniciantes que estão a aprender PHP e bases de dados.

O objetivo deste projeto é mostrar como criar, ler, atualizar e apagar dados numa base de dados de forma simples, usando **formulários HTML** e **funções básicas do PHP** (`mysqli_connect`, `mysqli_query`, `$_POST`, `$_GET`).

---

## Estrutura do projeto

- `db.php` → ligação à base de dados  
- `index.php` → listar dados (Read)  
- `criar.php` → criar dados (Create)  
- `editar.php` → editar dados (Update)  
- `apagar.php` → apagar dados (Delete)  

> Todos os ficheiros usam o `db.php` para conectar à base de dados.

---

## Como usar

1. Criar a base de dados MySQL:

```sql
CREATE DATABASE crud_simples;
USE crud_simples;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  email VARCHAR(100)
);
```
2. Colocar os ficheiros do projeto na pasta do servidor PHP (`htdocs` no XAMPP, WAMP ou MAMP).  

3. Abrir o `index.php` no navegador:
- http://localhost/crud_simples/index.php

4. Usar os links para **criar, editar ou apagar** utilizadores.

---

## Funcionalidades

- **Listar** todos os utilizadores (`index.php`)  
- **Criar** novo utilizador (`criar.php`)  
- **Editar** utilizador existente (`editar.php`)  
- **Apagar** utilizador (`apagar.php`)  

---

## Conceitos abordados

- Conexão com base de dados: `mysqli_connect()`  
- Executar queries SQL: `mysqli_query()`  
- Ler resultados: `mysqli_fetch_assoc()`  
- Formulários HTML com `$_POST`  
- URLs com `$_GET` para identificar registos  
- Estruturas de decisão: `if`, `isset()`  
- Ciclos: `while` para percorrer resultados  

---

## Observações

- Este projeto **não utiliza PDO nem prepared statements**; é um exemplo didático para iniciantes.  
- Em produção, recomenda-se **usar prepared statements** para evitar SQL Injection.

---

> Feito como exercício didático para iniciantes em PHP e MySQL © bcat025.
