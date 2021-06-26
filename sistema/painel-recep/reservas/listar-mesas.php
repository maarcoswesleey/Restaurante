<?php 

require_once("../../../conexao.php"); 

echo "<div class='col-md-4 mt-2'>";

//$data = $_POST['data'];

$query = $pdo->query("SELECT * FROM mesas order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for($i=0; $i < @count($res); $i++){
	foreach ($res[$i] as $key => $value){	}
		$id_reg = $res[$i]['id'];
		$nome_mesa = $res[$i]['nome'];

	echo "<div class='mx-2 mb-4' style='float: left;'>";
	echo "<a href='#' onclick='modalReserva($nome_mesa)' type='button' class='btn btn-success' style='width: 90px;'>".$nome_mesa." </a>";
	echo "</div>";

}

?>