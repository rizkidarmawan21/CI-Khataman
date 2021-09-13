<?php

class Pembayaran extends Controller
{

    public function index()
    {
        $data['judul'] = 'Pembayaran Binadhor';
        $data['status'] = 'All';
        $data['binadhor_total'] = $this->model('Pembayaran_model')->getAllbayarBinadhor();
        $this->view('templates/header', $data);
        $this->view('pembayaran/binadhor', $data);
        $this->view('templates/footer');
    }

    public function binadhorlunas()
    {
        $data['judul'] = 'Pembayaran Binadhor';
        $data['status'] = 'Lunas';
        $data['binadhor_total'] = $this->model('Pembayaran_model')->getBayarBinadhor0();
        $this->view('templates/header', $data);
        $this->view('pembayaran/binadhor', $data);
        $this->view('templates/footer');
    }
    public function binadhorblmlunas()
    {
        $data['judul'] = 'Pembayaran Binadhor';
        $data['status'] = 'Belum Lunas';
        $data['binadhor_total'] = $this->model('Pembayaran_model')->getBayarBinadhor1();
        $this->view('templates/header', $data);
        $this->view('pembayaran/binadhor', $data);
        $this->view('templates/footer');
    }

    public function getbayar(){
        echo json_encode($this->model('Pembayaran_model')->getBinadhorById($_POST['id']));
     }
     
    public function bayar(){
        
        if ($this->model('Pembayaran_model')->BayarDataBinadhor($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'dibayar', 'success');
            header('Location:' . BASEURL . 'pembayaran');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dibayar', 'danger');
            header('Location:' . BASEURL . 'pembayaran');
            exit;
        }
    }

    public function printBinadhor($id){
        $data['title'] = 'Kwitansi Pembayaran Khataman Binadhor Tahun 2021';
        $data['guna'] = 'Pembayaran Khataman Binadhor Tahun 2021';
        $data['binadhor_total'] = $this->model('Binadhor_model')->getBinadhorById($id);
        $this->view('print/print',$data);
    }
    // ========================================================================================================
    public function bilghoib()
    {
        $data['judul'] = 'Pembayaran Bilghoib';
        $data['status'] = 'All';
        $data['bilghoib_total'] = $this->model('Pembayaran_model')->getAllbayarBilghoib();
        $this->view('templates/header', $data);
        $this->view('pembayaran/bilghoib', $data);
        $this->view('templates/footer');
    }

    public function getbayarbil(){
        echo json_encode($this->model('Pembayaran_model')->getBilghoibById($_POST['id']));
     }

    public function bayarbil(){
        
        if ($this->model('Pembayaran_model')->BayarBilghoib($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'dibayar', 'success');
            header('Location:' . BASEURL . 'pembayaran/bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dibayar', 'danger');
            header('Location:' . BASEURL . 'pembayaran/bilghoib');
            exit;
        }
    }

    public function bilghoiblunas()
    {
        $data['judul'] = 'Pembayaran Bilghoib';
        $data['status'] = 'Lunas';
        $data['bilghoib_total'] = $this->model('Pembayaran_model')->getBayarBilghoib0();
        $this->view('templates/header', $data);
        $this->view('pembayaran/bilghoib', $data);
        $this->view('templates/footer');
    }
    public function bilghoibblmlunas()
    {
        $data['judul'] = 'Pembayaran Bilghoib';
        $data['status'] = 'Belum Lunas';
        $data['bilghoib_total'] = $this->model('Pembayaran_model')->getBayarBilghoib1();
        $this->view('templates/header', $data);
        $this->view('pembayaran/bilghoib', $data);
        $this->view('templates/footer');
    }
     
    public function printBilghoib($id){
        $data['title'] = 'Kwitansi Pembayaran Khataman Bilghoib Tahun 2021';
        $data['guna'] = 'Pembayaran Khataman Bilghoib Tahun 2021';
        $data['bilghoib'] = $this->model('Bilghoib_model')->getBilghoibById($id);
        $this->view('print/print2',$data);
    }
}