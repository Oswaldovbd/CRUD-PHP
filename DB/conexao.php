<?php
$host = 'localhost';
$dbname = 'crud';
$user = 'root';
$psswd = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=crud', $user, $psswd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar no bando ' . $e->getMessage();
}