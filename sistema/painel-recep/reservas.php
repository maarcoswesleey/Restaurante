<?php 
$pagina = 'reservas';

require_once("verificar.php"); 

$agora = date('Y-m-d');

?>

<div class="row">
	<div class="col-md-2  col-lg-2 col-sm-1">
		<span>Reservas de Mesas</span>

	</div>

	<div class="col-md-2 col-lg-2 col-sm-1">

		<div class="mb-3">
			
			<input type="date" class="form-control" id="data" name="data" placeholder="Data" value="<?php echo @$agora ?>">
		</div>	
		
	</div>

</div>

<div id="listar">


</div>


<script type="text/javascript">
	$(document).ready(function() {
		mostrarMesas()
	} );
</script>


<!-- Ajax para listar HTML -->

<script type="text/javascript">
	var pag = "<?=$pagina?>";
	function mostrarMesas(){
		$.ajax({
			url: pag + "/listar-mesas.php",
			method: 'POST',
			data: $('#form').serialize(),
			dataType: "html",

			success:function(result){
				$("#listar").html(result);
			}
		});
	}
</script>

<script type="text/javascript">
	var pag = "<?=$pagina?>";
	function modalReserva(teste){
		event.preventDefault(); 
		console.log(teste)
	}
</script>




