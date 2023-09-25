<?php
include "conexao.php";
include "header.php";
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
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="w-20 text-center py-3 rounded bg-blue-500 text-white mt-8">Voltar</a>
    </div>
</body>

</html>