<?php 

require_once("../../../conexao.php");

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM funcionarios WHERE cargo = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(@count($res) == 0){

	$pdo->query("DELETE FROM cargos WHERE id = '$id'");
}else {

	echo 'Existem '.@count($res).' funcionários assiciados a este cargo, exclua primeiramente esses fucnionários para depois excluir o cargo!';
	exit();
}


echo 'Excluído com Sucesso!';

?>