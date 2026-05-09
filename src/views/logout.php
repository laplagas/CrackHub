<?php 
require_once __DIR__ . '/../config/authcheck.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="min-h-screen flex items-center justify-center overflow-hidden relative">
    <h1>Crack Hub - Logout</h1>
    <form method="POST" action="../controller/LogoutController.php">
        <button type="submit">Sair</button>
    </form>
</body>
</html>