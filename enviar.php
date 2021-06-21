<?php  
	require_once("config.php");

$nome_contato = $_POST['nome_contato'];
$email_contato = $_POST['email_contato'];
$mensagem_contato = $_POST['mensagem_contato'];

$destinatario = $email_adm;
$assunto = 'Email de Contato - '.$nome_site;
$mensagem = ('Nome: '.$nome_contato. "\r\n"."\r\n" 
	. 'Email: '.$email_contato. "\r\n"."\r\n"
	. 'Mensagem: '.$mensagem_contato);

$cabecalho ="From: ".$email;

@mail($destinatario, $assunto, $mensagem, $cabecalho); // Retirar @ após hospedar

?>

<script>alert('Enviado com sucesso!');</script>

<meta http-equiv="refresh" content="0; url=index.php#mu-contact">