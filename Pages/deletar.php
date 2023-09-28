<?php
include "../DB/conexao.php";
if (isset($_POST['deletar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM usuario WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        header("location: listar.php");
        exit;
    } catch (PDOException $e) {
        echo "Erro ao excluir: " . $e->getMessage();
    }
}
?>