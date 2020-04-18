<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;


$dompdf = new Dompdf();
$dompdf->Load_Html('menggunakan Library DOMpdf untuk membuat Report  PDF dengan DOMPDF');

$dompdf->setPaper('A4', 'Landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');




?>