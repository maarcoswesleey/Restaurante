<?php 
require_once("../../../conexao.php");

$id = $_POST['id'];

//BUSCAR A IMAGEM PARA EXCLUIR DA PASTA
$query_con = $pdo->query("SELECT * FROM galeria WHERE id = '$id'");
$res_con = $query_con->fetchAll(PDO::FETCH_ASSOC);
$imagem = $res_con[0]['imagem'];
if($imagem != 'sem-foto.jpg'){
	@unlink('../../img/galeria/'.$imagem);
}


$pdo->query("DELETE from galeria WHERE id = '$id'");


echo 'Excluído com Sucesso!';
?>