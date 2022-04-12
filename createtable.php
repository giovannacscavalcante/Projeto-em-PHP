<?php
$servername = "localhost";
$username = "u228666546_cavalcante";
$password = "xr?GloW7I+";
$dbname = "u228666546_cavalcante";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// sql to create table
/*$sql = "CREATE TABLE usuarios (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";*/

/*$sql = "CREATE TABLE clientes (
    id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomecompleto VARCHAR(100) NOT NULL,
    datanasc date NOT NULL,
    rg int(10) not NULL UNIQUE,
    cpf int(15) not null UNIQUE,
    endereco varchar(100) not null,
    telefone int(20) not null,
    email varchar(50) not null
 ); */   

$sql = "CREATE TABLE clientes (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    data VARCHAR(20) NOT NULL,
    rg VARCHAR(20) not NULL ,
    cpf VARCHAR(20) not null,
    endereco varchar(100) not null,
    telefone VARCHAR(25) not null,
    email varchar(50) not null
 )";


if ($conn->query($sql) === TRUE) {
  echo "Tabela clientes criada com sucesso";
} else {
  echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
?>