<?php 

require_once("../../../conexao.php");

$id = $_POST['id'];

//BUSCAR O REGISTRO JÁ CADASTRADO NO BANCO

$query = $pdo->query("SELECT * FROM funcionarios WHERE  id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$cpf_banco = @$res[0]['cpf'];


$pdo->query("DELETE FROM funcionarios WHERE id = '$id'");
$pdo->query("DELETE FROM usuarios WHERE cpf = '$cpf_banco'");
$pdo->query("DELETE FROM chef WHERE funcionario = '$id'");

echo 'Excluído com Sucesso!';

?>