<?php 
require_once("../../../conexao.php");

$id = $_POST['id'];

$query = $pdo->query("DELETE from galeria WHERE categoria '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0) {
    echo 'Existem fotos associadas a esta categoria, exclua primeiro as fotos para depois excluir a categoria!'
    exit();
}

$pdo->query("DELETE from categoria_img WHERE id = '$id'");

echo 'Excluído com Sucesso!';

?>
