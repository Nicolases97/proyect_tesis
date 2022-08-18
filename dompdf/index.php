<?php

// Guardamos el contenido de contenido.php en la variable html
$uidparam = $_GET['uid'];
ob_start();
require "contenido.php";
$html = ob_get_clean();

// include autoloader
require_once 'dompdf/autoload.inc.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
