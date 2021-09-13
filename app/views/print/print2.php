    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A6-L']);
    $html = '
    <html>
    <title>
    Kwitansi '. $data['bilghoib'] ['nama'] .'
    </title>
    <body>
    <p class = "text-align : center; ">'.$data['title'].'</p>
    Nama : '. $data['bilghoib'] ['nama'] .' <br>
    TTL : '. $data['bilghoib'] ['temp_lahir'] .', '. date('d F Y', strtotime($data['bilghoib']['lahir'])) .' <br>
    Alamat : '. $data['bilghoib'] ['alamat'] .' <br>
    Jenkel : '. $data['bilghoib'] ['jenkel'] .' <br>
    Kelas : '. $data['bilghoib'] ['kelas'].' '. $data['bilghoib'] ['jenjang'].' <br>
    Nama Wali : Bp. '. $data['bilghoib'] ['nama_ayah'] .' <br>
    No Wali : '. $data['bilghoib'] ['no_telp'] .' <br>
    Guna : '. $data['guna'].' <br>
    
    
    </body>
    </html>
    ';

    $mpdf->WriteHTML($html);
    $mpdf->Output('Kwitansi.pdf', 'I');

    ?>
