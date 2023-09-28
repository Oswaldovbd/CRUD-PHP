<?php
include "../DB/conexao.php";
include "../Components/header.php";
include "../Components/verifica_sessao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    try {
        $stmt->execute();
        header('location: home.php');
        exit;
    } catch (PDOException $e) {
        echo "Erro ao inserir: " . $e->getMessage();
    }
}
?>
<!doctype html>
<html>

<body>
    <!-- component -->
    <form method="post">
        <div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Criar Usuário</h1>
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="nome"
                        placeholder="Nome Completo" />

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" />

                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="senha"
                        placeholder="Senha" />

                    <button type="submit" name="submit"
                        class="w-full text-center py-3 rounded bg-blue-500 text-white">Criar
                        Usuário</button>
                </div>
                <a href="home.php" class="w-20 text-center py-3 rounded bg-blue-500 text-white mt-8">Voltar</a>
            </div>
        </div>
    </form>
</body>

</html>