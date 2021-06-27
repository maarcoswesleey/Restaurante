<?php 

require_once('../../config.php');

@session_start();
$id_usuario = $_SESSION['id'];

$dataInicial = $_POST['dataInicial'];
$dataFinal = $_POST['dataFinal'];


//ALIMENTAR OS DADOS NO RELATÓRIO
$html = file_get_contents($url."sistema/rel/rel_comissoes.php?dataInicial=$dataInicial&dataFinal=$dataFinal&usuario=$id_usuario");

if($relatorio_pdf != 'Sim'){
	echo $html;
	exit();
}

//CARREGAR DOMPDF
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

//INICIALIZAR A CLASSE DO DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', true);

$pdf = new DOMPDF($options);

//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'portrait'); //caso queira a folha em paisagem use landscape em vez de portrait

//CARREGAR O CONTEÚDO HTML
$pdf->load_html($html);

//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
'comissoes.pdf',
array("Attachment" => false)
);


