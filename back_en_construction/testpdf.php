<?php
include 'assets/php/inc_bdd.php';
$sql = "SELECT * FROM journal ORDER BY id DESC";
$query = $db->prepare($sql);
$query -> execute();
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
while ($result = $query->fetch()) {
$html2pdf->writeHTML($result['contenu']);
$html2pdf->output();
}