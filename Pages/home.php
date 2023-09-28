<?php
include "../DB/conexao.php";
include "../Components/header.php";
include "../Components/verifica_sessao.php";

?>
<!doctype html>
<html>


<body>
    <div class="flex flex-col justify-center items-center">
        <p class="text-2xl text-center mb-4">Bem vindo!
            <?php echo $_SESSION['user']; ?>
        </p>

        <div class="text-center">
            <ul>
                <li><a href="criar.php" class="hover:text-blue-500 text-xl">Criar</a></li>
                <li><a href="listar.php" class="hover:text-blue-500 text-xl">Listar</a></li>
            </ul>
        </div>
        <a href="../Components/logout.php" class="w-20 text-center p-3 rounded bg-blue-500 text-white mt-8">Logout</a>
    </div>
</body>

</html>