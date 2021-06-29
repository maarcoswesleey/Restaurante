<?php 

// VARIAVEIS DO PROJETO

$url = 'http://localhost/restaurante/'; //Caminho do projeto, url do dominio, sempre por a barra no final.
$nome_site = 'PAPITOS - Gastro House';
$nome_sistema = 'MasterChef - Sistema Integrado de Gestão para Restaurantes';
$email_adm = 'marcos.wesley@hotmail.com.br';
$endereco_fisico = 'R. Abrão Manoel da Costa, Nº 89 - QD. 25 LT. 07 - St. Cristina II, Trindade - GO, 75389-115';
$telefone_whatsapp= '(62) 9.8485-7659';
$telefone_whatsapp_link = '+5562984857659';
$telefone_fixo = '(62) 9.8485-7659';
$cnpj_site = '34.963.344/0001-18';

// VARIAVEIS PARA REDES SOCIAIS

$instagram = 'https://www.instagram.com/papitosgastrohouse/';
$facebook = 'https://www.facebook.com/papitosgastrohouse';
$youtube = 'https://www.youtube.com/channel/UC7n03r23QBiGyTpbNWuR3RA';
$twitter = '';
$linkedin = '';


// VARIAVEIS PARA O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'restaurante';


// VARIAVEIS GLOBAIS PARA CONFIGURAÇÕES DO SISTEMA

$nivel_estoque = '15';

$relatorio_pdf = 'Sim'; // Se não quiser usar biblioteda dompdf para gerar relatórios, coloque não nessa opção que irá gerar um relatório em html. E será possivel salvar como pdf ou efetuar impressão.

$rodape_relatorios = "Sistema Desenvolvido por DDR - Soluções em Tecnologia da Informação - www.ddrsolucoesemti.com.br";

$comissao = 0.1; //0.1 define 10% de comissão para o garçon, caso o restaurante não vá trabalhar com comissão, pode deixar 0;

$couvert = 10;  //esse valor não está em porcentagem, se colocar 10 será adicionado ao total do pedido 10 reais, e assim por diante, caso não tenha essa taxa de couvert artístico colocar o valor de 0;


$itens_tela = 7;  //VARIAVEL PARA DEFINIR QUANTOS ITENS POR PÁGINA SERÃO MOSTRADO NO PAINEO DE TELA DA COZINHA
$tempo_atualizacao_tela = 15;  // A CADA 15 SEGUNDOS ELES VAI MUDAR A PAGINAÇÃO

$itens_tela_chamada = 12; //exibir os 12 ultimos pedidos nessa tela

$card_coluna = 4; //usando um valor de 4 vão ser mostrados 3 cards(pedidos) por cada linha, cada linha possui 12 colunas, se por exemplo desejar 4 cards na linha o valor ali inserido deverá ser 3.
$tempo_atualizacao_tela_chamadas = 5;  // QUANDO OUVER UM NOVO ITEM ELE VAI MOSTRAR ESSE NOVO ITEM POR 3 SEGUNDOS

$itens_por_pagina_blog = 3;

?>