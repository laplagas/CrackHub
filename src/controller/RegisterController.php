<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../config/data.php';
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($email) || empty($password)) {
        die("Por favor, preencha todos os campos.");
    }
    try {
        $stmt = $conn->prepare("INSERT INTO users (email, senha) VALUES (:email, :senha)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $hashedPassword);
        $stmt->execute();
        header("Location: ../views/login.php");
        exit();
    } catch (PDOException $e) {
        die("Erro na consulta: " . $e->getMessage());
    }
}