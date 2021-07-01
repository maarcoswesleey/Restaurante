<?php 
require_once("../../../conexao.php");

$id = $_POST['id'];

$query = $pdo->query("SELECT * from produtos WHERE categoria = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0) {
    echo 'Existem imagens associadas a esta categoria, exclua primeiro as imagens para depois excluir a categoria!';
    exit();
}

$pdo->query("DELETE from categorias WHERE id = '$id'");

echo 'Excluído com Sucesso!';
?>