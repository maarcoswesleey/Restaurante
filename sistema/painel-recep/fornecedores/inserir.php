<?php 
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$produto = $_POST['produto'];
$endereco = $_POST['endereco'];
$id = $_POST['id'];

//BUSCAR O REGISTRO JÁ CADASTRADO NO BANCO
$query = $pdo->query("SELECT * FROM fornecedores WHERE  id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$cpf_banco = @$res[0]['cpf'];
$email_banco = @$res[0]['email'];


if($email != $email_banco){
	$query = $pdo->prepare("SELECT * FROM fornecedores WHERE  email = :email");
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
	$query = $pdo->prepare("INSERT INTO fornecedores SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, produto = :produto");
}else{
	$query = $pdo->prepare("UPDATE fornecedores SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, produto = :produto WHERE id = '$id'");
}

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":produto", "$produto");
$query->execute();


echo 'Salvo com Sucesso!';
?>