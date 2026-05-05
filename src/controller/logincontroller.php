<?php

require_once __DIR__ . '/../config/data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($user) || empty($password)) {
        die("Por favor, preencha todos os campos.");
    }
    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $user);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && password_verify($password, $result['senha'])) {
            $_SESSION['user_id'] = $result['id'];
            echo "Login bem-sucedido!";
        } else {
            echo "Credenciais inválidas.";
        }
    }
    } catch (PDOException $e) {
        die("Erro na consulta: " . $e->getMessage());
    }
