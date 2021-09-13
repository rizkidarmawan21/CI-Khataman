
<?php

require_once __DIR__ . '/vendor/autoload.php';
?>
<?php
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$html = '

<html>
<title>
print
</title>
<body>

<table border = "1">
<tr>
<td>Nama</td>
</tr>
';
foreach ($data['binadhorPutra'] as $binadhor) {
$html .= '
<tr>
<td>'.$binadhor['nama'].'</td>
</tr>
 ';

}

$html .='
</table>
</body>
</html>

';

$mpdf->WriteHTML($html);
$mpdf->Output('Kwitansi.pdf', 'I');

?>