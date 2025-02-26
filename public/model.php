<?php
// Configuração de conexão com o banco de dados usando PDO
$dsn = 'mysql:host=senacHistory_db;dbname=senacMyhistory';
$username = 'root';
$password = 's3nacHlst0ry';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
