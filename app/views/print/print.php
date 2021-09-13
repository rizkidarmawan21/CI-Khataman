    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A6-L']);
    $html = '
    <html>
    <title>
    Kwitansi '. $data['binadhor_total'] ['nama'] .'
    </title>
    <body>
    <p class = "text-align : center; ">'.$data['title'].'</p>
    Nama : '. $data['binadhor_total'] ['nama'] .' <br>
    TTL : '. $data['binadhor_total'] ['temp_lahir'] .', '. date('d F Y', strtotime($data['binadhor_total']['lahir'])) .' <br>
    Alamat : '. $data['binadhor_total'] ['alamat'] .' <br>
    Jenkel : '. $data['binadhor_total'] ['jenkel'] .' <br>
    Kelas : '. $data['binadhor_total'] ['kelas'].' '. $data['binadhor_total'] ['jenjang'].' <br>
    Nama Wali : Bp. '. $data['binadhor_total'] ['nama_ayah'] .' <br>
    No Wali : '. $data['binadhor_total'] ['no_telp'] .' <br>
    Guna : '. $data['guna'].' <br>
    
    
    </body>
    </html>
    ';

    $mpdf->WriteHTML($html);
    $mpdf->Output('Kwitansi.pdf', 'I');

    ?>
