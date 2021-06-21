<?php 
$pagina = 'compras';
?>

<small>
<table id="example" class="table table-hover table-sm my-4" style="width:98%;">
<thead>
<tr>
	<th>Total</th>
	<th>Data</th>
	<th>Funcionário</th>
	<th>Fornecedor</th>
	<th>Excluir</th>

</tr>
</thead>
<tbody>

	<?php 
			$query = $pdo->query("SELECT * FROM compras order by id desc");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			for($i=0; $i < @count($res); $i++){
				foreach ($res[$i] as $key => $value){	}
					$id_reg = $res[$i]['id'];
				$id_forn = $res[$i]['fornecedor'];
				$id_func = $res[$i]['usuario'];

				//BUSCAR O NOME RELACIONADO
				$query2 = $pdo->query("SELECT * FROM fornecedores where id = '$id_forn'");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				$nome_forn = $res2[0]['nome'];

				//BUSCAR O NOME RELACIONADO
				$query2 = $pdo->query("SELECT * FROM usuarios where id = '$id_func'");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				$nome_func= $res2[0]['nome'];


				?>
				<tr>
					<td>R$ <?php echo number_format($res[$i]['total'], 2, ',', '.'); ?></td>
					<td><?php echo $data = implode('/', array_reverse(explode('-', $res[$i]['data'])));
 ?></td>
					<td><?php echo $nome_func ?></td>
					<td><?php echo $nome_forn ?></td>
					
					<td>
							<a href="index.php?pag=<?php echo $pagina ?>&funcao=excluir&id=<?php echo $id_reg ?>" title="Excluir Compra">
								<i class="bi bi-trash text-danger"></i></a>
							</td>
						</tr>

					<?php } ?>

	</tbody>
</table>
</small>



<!-- Modal -->
<div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Excluir Compra</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form method="post" id="form-excluir">
			<div class="modal-body">

				

				<input type="hidden" name="id"  value="<?php echo @$_GET['id']?>">

				<span class="mb-2">Deseja Realmente Excluir esta Compra?</span>
				<br><br>
				<small><div align="center" id="mensagem-excluir" >
				</div></small>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-excluir">Fechar</button>
				<button type="submit" class="btn btn-danger">Excluir</button>
			</div>
		</form>
	</div>
</div>
</div>



<?php 
if(@$_GET['funcao'] == 'excluir'){ ?>
<script type="text/javascript">
	var myModal = new bootstrap.Modal(document.getElementById('excluir'), {
		
	})

	myModal.show();
</script>
<?php } ?>




<script type="text/javascript">
$(document).ready(function() {
	$('#example').DataTable({
		"ordering": false
	});
} );
</script>



<!-- Ajax para excluir dados -->
<script type="text/javascript">
$("#form-excluir").submit(function () {
	event.preventDefault();
	var formData = new FormData(this);
	var pag = "<?=$pagina?>";

	$.ajax({
		url: pag + "/excluir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {

			$('#mensagem-excluir').removeClass()

			if (mensagem.trim() == "Excluído com Sucesso!") {

        //$('#nome').val('');
        //$('#cpf').val('');
        $('#btn-fechar-excluir').click();
        window.location = "index.php?pag="+pag;

    } else {

    	$('#mensagem-excluir').addClass('text-danger')
    }

    $('#mensagem-excluir').text(mensagem)

},

cache: false,
contentType: false,
processData: false,

});

});
</script>