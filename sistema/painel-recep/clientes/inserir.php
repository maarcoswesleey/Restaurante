<?php 
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$id = $_POST['id'];

//BUSCAR O REGISTRO JÁ CADASTRADO NO BANCO
$query = $pdo->query("SELECT * FROM clientes WHERE  id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$cpf_banco = @$res[0]['cpf'];
$email_banco = @$res[0]['email'];


if($email != $email_banco){
	$query = $pdo->prepare("SELECT * FROM clientes WHERE  email = :email");
	$query->bindValue(":email", "$email");
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'Email já Cadastrado!';
		exit();
	}
}




if($id == ""){
	$query = $pdo->prepare("INSERT INTO clientes SET nome = :nome, email = :email, telefone = :telefone");
}else{
	$query = $pdo->prepare("UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone WHERE id = '$id'");
}

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->execute();


echo 'Salvo com Sucesso!';
?>