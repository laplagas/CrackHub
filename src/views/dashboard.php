<?php 
require_once __DIR__ . '/../config/authcheck.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> src="https://cdn.tailwindcss.com"></script>
    <title>Crack Hub - Dashboard</title>
</head>

<style>
    body{
        font-family:Arial,Helvetica,sans-serif;
        background:linear-gradient(90deg,#11111b,#181820,#11111b);
    }
    .shadow-custom{
        box-shadow:10px 10px 0px #000;
    }  
</style>

<body class="min-h-screen flex items-center justify-center overflow-hidden relative">
    <header class="absolute top-0 left-0 w-full p-5 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="../assets/images/logocrackhub.png" alt="Logo" class="w-[150px]">
        </div>
    </header>
</body>
</html>