<?php 
require_once("../../conexao.php"); 

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data_hoje = utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today')));


$dataInicial = $_GET['dataInicial'];
$dataFinal = $_GET['dataFinal'];
$id_usuario = $_GET['usuario'];

$query = $pdo->query("SELECT * FROM usuarios where id >= '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = $res[0]['nome'];


$dataInicialF = implode('/', array_reverse(explode('-', $dataInicial)));
$dataFinalF = implode('/', array_reverse(explode('-', $dataFinal)));



if($dataInicial != $dataFinal){
	$apuracao = $dataInicialF. ' até '. $dataFinalF;
}else{
	$apuracao = $dataInicialF;
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Relatório de Comissões</title>
	<link rel="shortcut icon" href="../img/favicon.ico" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>

		@page {
			margin: 0px;

		}


		body{
			margin-top:15px;
		}

		.footer {
			margin-top:20px;
			width:100%;
			background-color: #ebebeb;
			padding:10px;
			position:absolute;
			bottom:0;
		}

		.cabecalho {    
			background-color: #ebebeb;
			padding:10px;
			margin-bottom:30px;
			width:100%;
			height:100px;
		}

		.titulo{
			margin:0;
			font-size:28px;
			font-family:Arial, Helvetica, sans-serif;
			color:#6e6d6d;

		}

		.subtitulo{
			margin:0;
			font-size:12px;
			font-family:Arial, Helvetica, sans-serif;
			color:#6e6d6d;
		}

		.areaTotais{
			border : 0.5px solid #bcbcbc;
			padding: 15px;
			border-radius: 5px;
			margin-right:25px;
			margin-left:25px;
			position:absolute;
			right:20;
		}

		.areaTotal{
			border : 0.5px solid #bcbcbc;
			padding: 15px;
			border-radius: 5px;
			margin-right:25px;
			margin-left:25px;
			background-color: #f9f9f9;
			margin-top:2px;
		}

		.pgto{
			margin:1px;
		}

		.fonte13{
			font-size:13px;
		}

		.esquerda{
			display:inline;
			width:50%;
			float:left;
		}

		.direita{
			display:inline;
			width:50%;
			float:right;
		}

		.table{
			padding:15px;
			font-family:Verdana, sans-serif;
			margin-top:20px;
		}

		.texto-tabela{
			font-size:12px;
		}


		.esquerda_float{

			margin-bottom:10px;
			float:left;
			display:inline;
		}


		.titulos{
			margin-top:10px;
		}

		.image{
			margin-top:-10px;
		}

		.margem-direita{
			margin-right: 80px;
		}

		.margem-direita50{
			margin-right: 50px;
		}

		hr{
			margin:8px;
			padding:1px;
		}


		.titulorel{
			margin:0;
			font-size:16px;
			font-family:Arial, Helvetica, sans-serif;
			color:#6e6d6d;


		}

		.margem-superior{
			margin-top:30px;
		}

		.areaSubtituloCab{
			margin-top:15px;
			margin-bottom:15px;
		}


		.area-tab{
			
			display:block;
			width:100%;
			height:30px;

		}

		
		.coluna{
			margin: 0px;
			float:left;
			height:30px;
		}


		hr .hr-table{
			
			padding:2px;
			margin:0px;
		}


	</style>


</head>
<body>


	<div class="img-cabecalho my-4">
			<img src="<?php echo $url ?>sistema/img/topo.jpg" width="100%">
		</div>

	<div class="container">

		<br>
		<div align="center" class="">	
			<span class="titulorel">Comissões do <?php echo $nome_usuario ?> </span>
		</div>
		

		<hr>
		<br><br>





	<small>	
	<section class="area-tab">
					
						<div class="linha-cab">
							<div class="coluna" style="width:15%"><b>Valor</b></div>
							<div class="coluna" style="width:15%"><b>Comissão</b></div>
							<div class="coluna" style="width:15%"><b>Couvert</b></div>
							<div class="coluna" style="width:20%"><b>SubTotal</b></div>
							<div class="coluna" style="width:15%"><b>Mesa</b></div>
							
							<div class="coluna" style="width:20%"><b>Data</b></div>
							
						</div>
					
				</section>
				<hr class="hr-table">
			<?php 
			$saldo = 0;	
			$totalComissaoF = 0;
			$totalComissao = 0;		
			$query = $pdo->query("SELECT * FROM pedidos where data >= '$dataInicial' and data <= '$dataFinal' and pago = 'Sim' and comissao > 0 and garcon = '$id_usuario' order by data asc");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			$totalItens = @count($res);
			
			for ($i=0; $i < @count($res); $i++) { 
				foreach ($res[$i] as $key => $value) {
				}
				
				$data = $res[$i]['data'];
							
				$data = implode('/', array_reverse(explode('-', $data)));		

				$valor = $res[$i]['valor']; 
				$comissao = $res[$i]['comissao']; 
				$couvert = $res[$i]['couvert']; 
				$subtotal = $res[$i]['subtotal']; 
				$mesa = $res[$i]['mesa'];	

				

				$valor = number_format($valor, 2, ',', '.');
				$comissaoF = number_format($comissao, 2, ',', '.');
				$couvert = number_format($couvert, 2, ',', '.');
				$subtotal = number_format($subtotal, 2, ',', '.');

				$totalComissao += $comissao;
				$totalComissaoF = number_format($totalComissao, 2, ',', '.');


				
				$id = $res[$i]['id'];

						


				?>

				<section class="area-tab">
					
				<div class="linha-cab">

												
				
				<div class="coluna" style="width:15%">R$ <?php echo $valor ?> </div>

				<div class="coluna" style="width:15%">R$ <?php echo $comissaoF ?> </div>
				<div class="coluna" style="width:15%">R$ <?php echo $couvert ?> </div>

				<div class="coluna" style="width:20%">R$ <?php echo $subtotal ?> </div>

				<div class="coluna" style="width:15%"> <?php echo $mesa ?> </div>

				<div class="coluna" style="width:20%"> <?php echo $data ?> </div>
				

				
				

			</div>
		</section>

		<hr class="hr-table">

			
			<?php } ?>

		</small>	
	

		<hr>


		
		

		<div class="row">
			<div class="col-sm-8 esquerda">	
				<span class=""> <b> Período da Apuração </b> </span>
				
				<span class=""> <?php echo $apuracao ?> </span>
			</div>
			<div class="col-sm-4 direita" align="right">	
				<span class=""> <b> Total Comissão : R$ <?php echo $totalComissaoF ?> </b> </span>
			</div>
		</div>


		

		<hr>


	</div>


	<div class="footer">
		<p style="font-size:14px" align="center"><?php echo $rodape_relatorios ?></p> 
	</div>




</body>
</html>
