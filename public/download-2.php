<?php


require '../vendor/autoload.php';
/* JABH creamos una funcion en App
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

*/

$data = array (
	'nombre' => 'Jonny Alexander Berrio',
	'curso' => 'Laravel 5'
	);

/* JABH creamos una funcion en App

ob_start();
extract($data);
include '../templates/pdf/certificate-2.php';
$html= ob_get_clean();

*/

require_once '../app/template.php';
$html=template::render('pdf/certificate-2',$data);

/* JABH creamos una funcion en App
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");
*/

require_once '../app/pdf.php';
pdf::render('certificate-2',$html);