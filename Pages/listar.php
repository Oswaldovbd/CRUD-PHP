<?php
include "../DB/conexao.php";
include "../Components/header.php";
include "../Components/verifica_sessao.php";
?>
<!DOCTYPE html>



<body>
    <div class="min-h-screen flex flex-col items-center justify-center">
        <table>
            <thead>
                <tr>
                    <th class="bg-blue-500 border text-white text-left px-8 py-4">ID</th>
                    <th class="bg-blue-500 border text-white text-left px-8 py-4">Nome</th>
                    <th class="bg-blue-500 border text-white text-left px-8 py-4">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM usuario";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $fetchData = $stmt->fetchAll();

                foreach ($fetchData as $key => $data) {
                    ?>
                    <tr>
                        <td class="border px-8 py-4">
                            <?php echo $data['id']; ?>
                        </td>
                        <td class="border px-8 py-4">
                            <?php echo $data['nome']; ?>
                        </td>
                        <td class="border px-8 py-4">
                            <?php echo $data['email']; ?>
                        </td>
                        <td class="border px-8 py-4">
                            <form action="deletar.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <button type="submit" class="bg-red-500 text-white p-2 rounded" name="deletar">Deletar
                                </button>
                            </form>
                        </td>

                        <td class="border px-8 py-4">
                            <a href="atualizar.php" class="bg-blue-500 text-white p-2 rounded">Atualizar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="home.php" class="w-20 text-center py-3 rounded bg-blue-500 text-white mt-8">Voltar</a>
    </div>
</body>

</html>