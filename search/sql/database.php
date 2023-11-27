<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}

$dbName = "DEVDOSSIER";

$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
} else {
    $conn->close();
}

$conn->select_db($dbName);

$sql = 'CREATE TABLE USER(
COD_USER INT NOT NULL AUTO_INCREMENT,
EMAIL VARCHAR(255),
PASSWORD VARCHAR(255),
    
PRIMARY KEY (COD_USER)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

//User table
$sql = 'CREATE TABLE TITLE(
COD_TITLE INT NOT NULL AUTO_INCREMENT,
TITLE_REAL VARCHAR(255), 
TITLE_SEARCH VARCHAR(255), 
TYPE VARCHAR(255),
ID VARCHAR(20),
COLOR VARCHAR(6),
    
PRIMARY KEY (COD_TITLE)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

$conn->close();
?>