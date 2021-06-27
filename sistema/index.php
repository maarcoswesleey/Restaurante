<?php 
require_once("../conexao.php");

//INSERIR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA NENHUM
$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);


$query_tela = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Tela'");
$res_tela = $query_tela->fetchAll(PDO::FETCH_ASSOC);
$total_reg_tela = @count($res_tela);

if($total_reg_tela == 0){
   $pdo->query("INSERT INTO usuarios set nome = 'Tela', cpf = '111.111.111-11', email = 'tela@tela.com', senha = '123', nivel = 'Tela'"); 
}


if($total_reg == 0){
   $pdo->query("INSERT INTO usuarios set nome = 'Administrador', cpf = '000.000.000-00', email = '$email_adm', senha = '123', nivel = 'Administrador'"); 

    $pdo->query("SELECT * FROM cargos where nome = 'Administrador'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    if(@count($res) == 0){
        $pdo->query("INSERT INTO cargos set nome = 'Administrador'");
        $id_cargo = $pdo->lastInsertId(); 
    }else{
        $id_cargo = $res[0]['id'];
    }

   $pdo->query("INSERT INTO funcionarios set nome = 'Administrador', cpf = '000.000.000-00', email = '$email_adm', telefone = '$telefone_fixo', cargo = '$id_cargo', data_cadastro = curDate()"); 
}



 ?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
     <!-- Favicon -->
    <link rel="shortcut icon" href="img/icone2.ico" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Login</title>


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
                            <h3 class="text-center text-info mb-4"><img src="img/logo.png" width="350px"></h3>
                            <div class="form-group">
                                <label for="username" class="">Usuário:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                            </div>
                            <div class="form-group mt-4">
                               
                                <input type="submit" name="submit" class="btn btn-warning btn-md" value="Logar">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>