<?php 
$pagina = 'produtos';

require_once("verificar.php"); 
?>

<small>
	<table id="example" class="table table-hover table-sm my-4" style="width:98%;">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Valor Compra</th>
				<th>Valor Venda</th>
				<th>Categoria</th>
				<th>Fornecedor</th>
				<th>Estoque</th>
				<th>Imagem</th>
				<th>Ações</th>

			</tr>
		</thead>
		<tbody>
			<?php 
			$query = $pdo->query("SELECT * FROM produtos where estoque < '$nivel_estoque' order by id desc");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			for($i=0; $i < @count($res); $i++){
				foreach ($res[$i] as $key => $value){	}
					$id_reg = $res[$i]['id'];

				$id_cat = $res[$i]['categoria'];
				$id_forn = $res[$i]['fornecedor'];

					//BUSCAR O NOME RELACIONADO
				$query2 = $pdo->query("SELECT * FROM categorias where id = '$id_cat'");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				$nome_cat = $res2[0]['nome'];

				//BUSCAR O NOME RELACIONADO
				$query2 = $pdo->query("SELECT * FROM fornecedores where id = '$id_forn'");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				if(@count($res2) == 0){
					$nome_forn = 'Sem Fornecedor';
				}else{
					$nome_forn = $res2[0]['nome'];
				}
				

				$valor_compra = number_format($res[$i]['valor_compra'], 2, ',', '.');
				$valor_venda = number_format($res[$i]['valor_venda'], 2, ',', '.');



				?>
				<tr>
					<td><?php echo $res[$i]['nome'] ?></td>
					<td>R$ <?php echo $valor_compra ?></td>
					<td>R$ <?php echo $valor_venda ?></td>
					<td><?php echo $nome_cat ?></td>
					<td><?php echo $nome_forn ?></td>
					<td><?php echo $res[$i]['estoque'] ?></td>
					<td><img src="../img/<?php echo $pagina ?>/<?php echo $res[$i]['imagem'] ?>" width="40"></td>
					<td>
						<a href="index.php?pag=<?php echo $pagina ?>&funcao=editar&id=<?php echo $id_reg ?>" title="Editar Produto">
							<i class="bi bi-pencil-square mr-1 text-primary"></i></a>

							<a href="index.php?pag=<?php echo $pagina ?>&funcao=excluir&id=<?php echo $id_reg ?>" title="Excluir Produto">
								<i class="bi bi-trash text-danger"></i></a>

								<a href="" onclick="dados('<?php echo $res[$i]["nome"] ?>', '<?php echo $valor_compra ?>', '<?php echo $valor_venda ?>', '<?php echo $nome_cat ?>', '<?php echo $nome_forn ?>', '<?php echo $res[$i]["estoque"] ?>', '<?php echo $res[$i]["imagem"] ?>', '<?php echo $res[$i]["descricao"] ?>')" title="Ver Dados">
									<i class="bi bi-info-circle-fill text-secondary"></i></a>


									<a href="#" onclick="comprarProdutos('<?php echo $res[$i]['id'] ?>')" title="Comprar Produtos" style="text-decoration: none">
									<i class="bi bi-bag text-success mx-1"></i>
								</a>

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
							<h5 class="modal-title" id="exampleModalLabel">Excluir Produto</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form method="post" id="form-excluir">
							<div class="modal-body">

								Deseja Realmente Excluir este Produto?

								<input type="hidden" name="id"  value="<?php echo @$id ?>">

								<small><div align="center" id="mensagem-excluir">
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





			<!-- Modal -->
			<div class="modal fade" id="modal-dados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="nome_registro"></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						
						<div class="modal-body">

							<div class="mb-2">
								<span><b>Valor Venda : R$ </b></span><span id="venda_registro"></span>
							</div>

							<div class="mb-2">
								<span><b>Valor Compra : R$ </b></span><span id="compra_registro"></span>
							</div>

							<div class="mb-2">
								<span><b>Categoria : </b></span><span id="categoria_registro"></span>
							</div>

							<div class="mb-2">
								<span><b>Fornecedor : </b></span><span id="fornecedor_registro"></span>
							</div>

							<div class="mb-2">
								<span><b>Estoque : </b></span><span id="estoque_registro"></span>
							</div>


							<div class="mb-2">
								<img src="" id="imagem_registro" width="100%">
							</div>

							<div class="mb-2">
								<span id="descricao_registro"></span>
							</div>

						</div>

						
					</div>
				</div>
			</div>





			<!-- Modal -->
			<div class="modal fade" id="modal-comprar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" >Comprar Produtos</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						
						<form method="post" id="form-comprar">
							<div class="modal-body">

								<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Quantidade </label>
											<input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" required >
										</div>	


										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Valor Compra </label>
											<input type="text" class="form-control" id="valor_compra" name="valor_compra" placeholder="Valor da Compra" required >
										</div>	



										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Fornecedores </label>
											<select class="form-select" aria-label="Default select example" name="fornecedor">
												<?php 
												$query = $pdo->query("SELECT * FROM fornecedores order by nome asc");
												$res = $query->fetchAll(PDO::FETCH_ASSOC);
												for($i=0; $i < @count($res); $i++){
													foreach ($res[$i] as $key => $value){	}
														$id_item = $res[$i]['id'];
													$nome_item = $res[$i]['nome'];
													?>
													<option value="<?php echo $id_item ?>"><?php echo $nome_item ?></option>

												<?php } ?>


											</select>
										</div>	

								
								<input type="hidden" id="id-comprar" name="id_comprar"  value="<?php echo @$id ?>">

								<small><div align="center" id="mensagem-comprar">
								</div></small>


							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-comprar">Fechar</button>
								<button type="submit" class="btn btn-primary">Comprar</button>
							</div>
						</form>

						
					</div>
				</div>
			</div>



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
                    window.location = "index.php?pag=estoque";

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


			<script type="text/javascript">
				function dados(nome, valor_compra, valor_venda, categoria, fornecedor, estoque, imagem, descricao){
					var pag = "<?=$pagina?>";
					event.preventDefault();
					var myModal = new bootstrap.Modal(document.getElementById('modal-dados'), {
						
					});

					myModal.show();
					$('#nome_registro').text(nome);
					$('#compra_registro').text(valor_compra);
					$('#venda_registro').text(valor_venda);
					$('#categoria_registro').text(categoria);
					$('#fornecedor_registro').text(fornecedor);
					$('#estoque_registro').text(estoque);
					$('#imagem_registro').attr('src', '../img/'+pag+'/' + imagem);
					$('#descricao_registro').text(descricao);
				}
			</script>






			<!--SCRIPT PARA CARREGAR IMAGEM -->
			<script type="text/javascript">

				function carregarImg() {

					var target = document.getElementById('target');
					var file = document.querySelector("input[type=file]").files[0];

					var arquivo = file['name'];
					resultado = arquivo.split(".", 2);
        //console.log(resultado[1]);

        if(resultado[1] === 'pdf'){
        	$('#target').attr('src', "../img/pdf.png");
        	return;
        }

        var reader = new FileReader();

        reader.onloadend = function () {
        	target.src = reader.result;
        };

        if (file) {
        	reader.readAsDataURL(file);


        } else {
        	target.src = "";
        }
    }

</script>




<script type="text/javascript">
				function comprarProdutos(id){
					event.preventDefault();

					$('#id-comprar').val(id);

					var myModal = new bootstrap.Modal(document.getElementById('modal-comprar'), {
						
					});

					myModal.show();
					
					
				}
			</script>




<!-- Ajax para comprar produtos -->
			<script type="text/javascript">
				$("#form-comprar").submit(function () {
					event.preventDefault();

					var formData = new FormData(this);
					var pag = "<?=$pagina?>";

					$.ajax({
						url: pag + "/comprar.php",
						type: 'POST',
						data: formData,

						success: function (mensagem) {

							$('#mensagem-comprar').removeClass()

							if (mensagem.trim() == "Salvo com Sucesso!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar-comprar').click();
                    window.location = "index.php?pag=estoque"

                } else {

                	$('#mensagem-comprar').addClass('text-danger')
                }

                $('#mensagem-comprar').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

				});
			</script>