<?php 

require_once 'lib/dompdf/dompdf_config.inc.php';

$dompdf = new DOMPDF();
$dompdf->load_html( file_get_contents( 'cotizacion_imprimir.php' ) );
$dompdf->render();
$dompdf->stream("Cotización.pdf");

?>