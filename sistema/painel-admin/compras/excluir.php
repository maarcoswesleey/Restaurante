<?php 

require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE FROM compras WHERE id = '$id'");
$pdo->query("DELETE FROM contas_pagar WHERE id_compra = '$id'");


echo 'Excluído com Sucesso!';

?>