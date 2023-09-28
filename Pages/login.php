<?php
include "../DB/conexao.php";
include "../Components/header.php";

session_start();
if (isset($_SESSION['user'])) {
    header('Location: home.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'login' && $password === '123') {
        $_SESSION['user'] = 'usertest';
        header("location: home.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <form method="POST">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <h1 class="text-4xl mb-8">Login</h1>
            <div class="bg-blue-500 p-8 rounded-lg shadow-md">
                <div class="bg-white shadow-md rounded p-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">
                            Usuário
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            type="text" placeholder="Usuário" required="" name="username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-grey-darker text-sm font-bold mb-2">
                            Senha
                        </label>
                        <input
                            class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                            type="password" placeholder="Senha" required="" name="password">
                        <p class="text-red text-xs italic">Escreva a sua senha</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="submit" name='submit' class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                            Entrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>