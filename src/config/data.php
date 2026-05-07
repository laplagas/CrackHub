<?php

require __DIR__ . '/../../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__  . '/../../');
$dotenv->load();
$host = $_ENV['DB_HOST'] ?? 'localhost';
$dbname = $_ENV['DB_DATABASE'] ?? null;
$root = $_ENV['DB_ROOT'] ?? null;
$password = $_ENV['DB_PASSWORD'] ?? null;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $root, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
} catch (Exception $e) {
    die("Erro inesperado: " . $e->getMessage());
}