<?php require_once("../conexao.php"); 

//INSERIR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA NENHUM

$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($total_reg == 0){
	$pdo->query("INSERT INTO usuarios set nome = 'Administrador', cpf ='000.000.000-00', email = '$email_adm', senha = '12345', nivel = 'Administrador'");
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<title>Login</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="vendor/css/login.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	<div id="login">
		<div class="container">
			<div id="login-row" class="row justify-content-center align-items-center">
				<div id="login-column" class="col-md-6">
					<div id="login-box" class="col-md-12">
						<form id="login-form" class="form" action="autenticar.php" method="post">
							<h3 class="text-center text-info"><img src="img/logo.png" width="400px;" ></h3>
							<div class="form-group ">
								<label for="username" class="">Usuário:</label><br>
								<input type="text" name="usuario" id="username" class="form-control" required="" >
							</div>
							<div class="form-group">
								<label for="password" class="">Senha:</label><br>
								<input type="password" name="senha" id="password" class="form-control" required="">
							</div>
							<div class="form-group mt-4" >
								<input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
