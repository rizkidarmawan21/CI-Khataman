<?php

class Binadhor extends Controller
{
    public function index()
    {
        $data['judul'] = 'Binadhor';
        $data['binadhor_total'] = $this->model('Binadhor_model')->getAllBinadhor();
        $this->view('templates/header', $data);
        $this->view('binadhor/index', $data);
        $this->view('templates/footer');
    }

    public function putra()
    {
        $data['judul'] = 'Binadhor Putra';
        $data['binadhor_total'] = $this->model('Binadhor_model')->getAllBinadhorputra();
        $this->view('templates/header', $data);
        $this->view('binadhor/index', $data);
        $this->view('templates/footer');
    }
    public function putri()
    {
        $data['judul'] = 'Binadhor Putri';
        $data['binadhor_total'] = $this->model('Binadhor_model')->getAllBinadhorputri();
        $this->view('templates/header', $data);
        $this->view('binadhor/index', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->model('Binadhor_model')->hapusDataBinadhor($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        }
    }
    public function tambah()
    {
        if ($this->model('Binadhor_model')->tambahDataBinadhor($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Binadhor_model')->getBinadhorById($_POST['id']));
     }
     
    public function ubah(){
        
        if ($this->model('Binadhor_model')->ubahDataBinadhor($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . 'binadhor');
            exit;
        }
    }

    public function bayar(){
        
        if ($this->model('Binadhor_model')->bayar($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'pembayaran');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . 'pembayaran');
            exit;
        }
    }
}
