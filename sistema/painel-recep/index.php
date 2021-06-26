<?php 
@session_start();
require_once("../../conexao.php"); 
require_once("verificar.php"); 

// MENUS PARA O PAINEL

$menu1 = 'home';
$menu2 = 'reservas';
$menu3 = 'clientes';
$menu4 = 'pagar';
$menu5 = 'receber';
$menu6 = 'compras';
$menu6 = 'movimentacoes';



// RECUPERAR OS DADOS DO USUÁRIO

$id_usuario = $_SESSION['id'];
$query = $pdo->query("SELECT * FROM usuarios WHERE id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($total_reg > 0){
	$nome_usu = $res[0]['nome'];
	$email_usu = $res[0]['email'];
	$cpf_usu = $res[0]['cpf'];
	$senha_usu = $res[0]['senha'];
	$nivel_usu = $res[0]['nivel'];
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<!-- Favicon -->
	<link rel="shortcut icon" href="../img/icone.png" type="image/x-icon">
	<link href="../vendor/css/painel.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title> Painel Administrativo | <?php echo $nome_sistema ?>  </title>
	<!-- JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Scritp Data Tables-->
	<link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="../vendor/css/datatables.min.css"/>
	<script type="text/javascript" src="../vendor/DataTables/datatables.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg " >
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="../img/sologo.png" width="250px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="index.php?pag=<?php echo $menu1 ?>">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="index.php?pag=<?php echo $menu2 ?>">Reservas</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="index.php?pag=<?php echo $menu3 ?>">Clientes</a>
					</li>


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Contas / Movimentações
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu4 ?>">Contas à Pagar</a></li>
							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu5 ?>">Contas à Receber</a></li>
							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu6 ?>">Compras</a></li>

							<li><a class="dropdown-item" href="index.php?pag=<?php echo $menu7 ?>">Movimentações</a></li>

						</ul>
					</li>


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Relatórios
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" target="blank" href="../rel/rel_produtos_class.php">Produtos</a></li>

							<li><a class="dropdown-item" target="blank" href="../rel/rel_cardapio_class.php">Cardápio</a></li>

							<li><a class="dropdown-item" target="blank" href="../rel/rel_estoque_class.php">Estoque</a></li>

							<li><a class="dropdown-item" target="blank" href="../rel/rel_pratos_class.php">Pratos</a></li>

							<li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#ModalRelCompras">Compras</a></li>

						</ul>
					</li>



				</ul>
				<form class="d-flex mr-4">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php echo $nome_usu; ?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href=""data-bs-toggle="modal" data-bs-target="#perfil">
								Editar Perfil
							</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="../logout.php">Sair</a></li>

						</ul>
					</li>
				</form>
			</div>
		</div>
	</nav>

	<div class="container-fluid mt-4 mx-4 px-4">
		<?php 
		if(@$_GET['pag'] == $menu1){
			require_once($menu1.'.php');

		}else if(@$_GET['pag'] == $menu2){
			require_once($menu2.'.php');
			
		}else if(@$_GET['pag'] == $menu3){
			require_once($menu3.'.php');
			
		}else if(@$_GET['pag'] == $menu4){
			require_once($menu4.'.php');
			
		}else if(@$_GET['pag'] == $menu5){
			require_once($menu5.'.php');

		}else if(@$_GET['pag'] == $menu6){
			require_once($menu6.'.php');

		}else if(@$_GET['pag'] == $menu7){
			require_once($menu7.'.php');
		}

		else{
			require_once($menu1.'.php');
		}

		?>
	</div>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" id="form-perfil">
				<div class="modal-body">

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nome</label>
						<input type="text" class="form-control" placeholder="Nome" id="nome_perfil" name="nome_perfil" value="<?php echo $nome_usu ?>" required>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="email" class="form-control" placeholder="nome@exemplo.com" id="email_perfil" name="email_perfil" value="<?php echo $email_usu ?>" required>
					</div>

					<div class="row">
						
						<div class="col-6">
							
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">CPF</label>
								<input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf_perfil" value="<?php echo $cpf_usu ?>" required>
							</div>
						</div>

						<div class="col-6">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Senha</label>
								<input type="text" class="form-control" placeholder="Senha" id="senha_perfil" name="senha_perfil" value="<?php echo $senha_usu ?>" required>
							</div>	
						</div>
					</div>

					<input type="hidden" name="id_perfil" value="<?php echo $id_usuario ?>">

					<small><div id="mensagem-perfil" align="center"></div></small>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-perfil">Fechar</button>
					<button type="submit" class="btn btn-primary">Salvar Alterações</button>
				</div>

			</form>
		</div>
	</div>
</div>

<!-- Mascaras JS -->
<script type="text/javascript" src="../../assets/js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 


<!-- Ajax para inserir ou editar dados -->
<script type="text/javascript">
	$("#form-perfil").submit(function () {
		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "editar-perfil.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {

				$('#mensagem-perfil').removeClass()

				if (mensagem.trim() == "Salvo com Sucesso!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar-perfil').click();
                    //window.location = "index.php?pagina="+pag;

                } else {

                	$('#mensagem-perfil').addClass('text-danger')
                }

                $('#mensagem-perfil').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

	});
</script>



<!--  Modal Rel Compras-->
<div class="modal fade" tabindex="-1" id="ModalRelCompras" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Relatório de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="../rel/rel_compras_class.php" method="POST" target="_blank">
       
                <div class="modal-body">

                 <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label >Data Inicial</label>
                            <input value="<?php echo date('Y-m-d') ?>" type="date" class="form-control mt-1"  name="dataInicial" >
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group mb-3">
                            <label >Data Final</label>
                            <input value="<?php echo date('Y-m-d') ?>" type="date" class="form-control mt-1"  name="dataFinal" >
                        </div>


                    </div>

                    <div class="col-md-4">

                        <div class="form-group mb-3">
                            <label >Pago</label>
                            <select class="form-select mt-1"  name="status">
                                <option value="">Todas</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                               
                            </select>
                        </div>


                    </div>

                </div>     

            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >Gerar Relatório</button>
         
        </div>
        </form>


    </div>
</div>
</div>


