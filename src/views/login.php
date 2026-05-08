<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crack Hub - Login</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
body{
    font-family:Arial,Helvetica,sans-serif;
    background:linear-gradient(90deg,#11111b,#181820,#11111b);
}
.shadow-custom{
    box-shadow:10px 10px 0px #000;
}
</style>
</head>
<body class="min-h-screen flex items-center justify-center overflow-hidden relative">
<div class="relative bg-[#2b2b3d] w-[470px] rounded-[35px] shadow-custom border-[3px] border-black px-10 py-8">
    <div class="flex justify-center mb-5">
        <img src="../assets/images/logocrackhub.png" alt="Logo" class="w-[100px]">
    </div>
    <form method="POST" action="../controller/LoginController.php" class="flex flex-col items-center gap-5">
        <input type="email" name="email" placeholder="EMAIL" required class="w-[300px] h-[48px] rounded-[12px] bg-[#ececec] text-center text-[#9c9c9c] text-[18px] font-bold outline-none">
        <input type="password" name="password" placeholder="SENHA" required class="w-[300px] h-[48px] rounded-[12px] bg-[#ececec] text-center text-[#9c9c9c] text-[18px] font-bold outline-none">
        <button type="submit" class="w-[300px] h-[50px] rounded-full bg-[#b8d0ee] border-[3px] border-black text-black text-[20px] font-bold hover:scale-[1.02] transition">
            Entrar →
        </button>
    </form>
    <div class="flex flex-col items-center mt-10 text-white text-[17px] gap-2">
        <a href="register.php" class="hover:underline">Não tem uma conta? Registre-se</a>
        <a href="../forgot-password.php" class="hover:underline">Esqueci a senha</a>
    </div>
</div>

</body>
</html>