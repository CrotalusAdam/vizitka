<?php
header('Content-Type: text/vcard; charset=utf-8');
header('Content-Disposition: inline; filename="jakub-matousek.vcf"');
readfile('jakub-matousek.vcf');
exit;
?>