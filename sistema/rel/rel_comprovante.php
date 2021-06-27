<?php 


include('../../conexao.php');

$id = $_GET['id'];

//BUSCAR AS INFORMAÇÕES DO PEDIDO
$res = $pdo->query("SELECT * from pedidos where id = '$id' ");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$total_venda = $dados[0]['valor'];
$data = $dados[0]['data'];
$mesa = $dados[0]['mesa'];
$garcon = $dados[0]['garcon'];
$obs = $dados[0]['obs'];
$comissao = $dados[0]['comissao'];
$couvert = $dados[0]['couvert'];
$subtotal = $dados[0]['subtotal'];
$pago = $dados[0]['pago'];

$data2 = implode('/', array_reverse(explode('-', $data)));


$res = $pdo->query("SELECT * from usuarios where id = '$garcon' ");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$nome_garcon = $dados[0]['nome'];

?>


<style type="text/css">
	*{
	margin:0px;
	padding:5px;
	background-color:#f7fccc;

}
.text {
	&-center { text-align: center; }
}
.ttu { text-transform: uppercase;
	font-weight: bold;
	font-size: 1.2em;
 }

.printer-ticket {
	display: table !important;
	width: 100%;
	max-width: 400px;
	font-weight: light;
	line-height: 1.3em;
	padding: 5px;
	font-family: Tahoma, Geneva, sans-serif; 
	font-size: 12px; 
	
	
	
	}
	
	th { 
		font-weight: inherit;
		padding:5px;
		text-align: center;
		border-bottom: 1px dashed #BCBCBC;
	}

	

	
	
		
	.cor{
		color:#BCBCBC;
	}
	
	
	.title { font-size: 1.5em;  }

	.margem-superior{
		padding-top:25px;
	}
	
	
}
</style>



<table class="printer-ticket">

	<tr>
		<th class="title" colspan="3"><?php echo $nome_site ?></th>

	</tr>
	<tr>
		<th colspan="3">Mesa <?php echo $mesa ?> - Garçon <?php echo $nome_garcon ?> - Data: <?php echo $data2 ?> - Pago : <?php echo $pago ?></th>
	</tr>
	<tr>
		<th colspan="3">
			<b>Endereço</b> <?php echo $endereco_fisico ?> <br />
			<b>Telefone</b> <?php echo $telefone_fixo ?> <b>CNPJ</b> <?php echo $cnpj_site ?>
		</th>
	</tr>
	<tr>
		<th class="ttu margem-superior" colspan="3">
		<b>Detalhamento de Consumo</b>
			
		</th>
	</tr>
	<tr>
		<th colspan="3">
		<b>CUMPOM NÃO FISCAL</b>
			
		</th>
	</tr>
	
	<tbody>

		<?php 

		$res = $pdo->query("SELECT * from itens_pedidos where pedido = '$id' order by id asc");
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		$sub_tot;
		for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}

			$id_produto = $dados[$i]['item']; 
			$quantidade = $dados[$i]['quantidade'];
			$tipo = $dados[$i]['tipo'];
			$id_item= $dados[$i]['id'];

			if($tipo == 'Produto'){
				$res_p = $pdo->query("SELECT * from produtos where id = '$id_produto' ");
				$dados_p = $res_p->fetchAll(PDO::FETCH_ASSOC);
				$nome_produto = $dados_p[0]['nome'];  
				$valor = $dados_p[0]['valor_venda'];
			}else{
				$res_p = $pdo->query("SELECT * from pratos where id = '$id_produto' ");
				$dados_p = $res_p->fetchAll(PDO::FETCH_ASSOC);
				$nome_produto = $dados_p[0]['nome'];  
				$valor = $dados_p[0]['valor'];
			}
			
			

			$total_item = $valor * $quantidade;
	

			?>

			<tr>
				
					<td colspan="2" width="50%"><?php echo $quantidade ?> - <?php echo $nome_produto ?> 
						
					</td>
				

				<td align="right">R$ <?php

				@$total_item;
				@$sub_tot = @$sub_tot + @$total_item;
				$sub_total = $sub_tot;
				

				$sub_total = number_format( $sub_total , 2, ',', '.');
				$total_item = number_format( $total_item , 2, ',', '.');
				$total = number_format( $total_venda , 2, ',', '.');
				

				echo $total_item ;
				?></td>
			</tr>

		<?php } ?>

				
	</tbody>
	<tfoot>

		<tr>
			<td colspan="3" class="cor">
				--------------------------------------------------------------------------------------------------------------------------------------------------------------
			</td>
		</tr>

		
		
		
		<tr>
			<td colspan="2">Total</td>
			<td align="right">R$ <?php echo $total ?></td>
		</tr>

		<tr>
			<td colspan="2">Taxa de Serviço</td>
			<td align="right">R$ <?php echo $comissao ?></td>
		</tr>

			<tr>
			<td colspan="2">Couvert Artístico</td>
			<td align="right">R$ <?php echo $couvert ?></td>
		</tr>

		</tr>

			<tr>
			<td colspan="2">SubTotal</td>
			<td align="right">R$ <?php echo $subtotal ?></td>
		</tr>

		

	
		

		<?php if($obs != ""){ ?>	

		<tr>
			<td colspan="3" class="cor">
				--------------------------------------------------------------------------------------------------------------------------------------------------------------
			</td>
		</tr>


		<tr>
			<td colspan="3"><b>Observações </b>: <small><?php echo $obs ?></small></td>
			
		</tr>

		<?php } ?>

		<tr>
			<td colspan="3" class="cor">
				--------------------------------------------------------------------------------------------------------------------------------------------------------------
			</td>
		</tr>
		
		<tr>
			<td colspan="3" align="center">
				www.ddrsolucoesemti.com.br
			</td>
		</tr>
	</tfoot>
</table>