<?php

class Bilghoib extends Controller
{
    public function index()
    {
        $data['judul'] = 'Bilghoib';
        $data['bilghoib_total'] = $this->model('Bilghoib_model')->getAllBilghoib();
        $this->view('templates/header', $data);
        $this->view('bilghoib/index', $data);
        $this->view('templates/footer');
    }

    public function putra()
    {
        $data['judul'] = 'Bilghoib Putra';
        $data['bilghoib_total'] = $this->model('Bilghoib_model')->getAllBilghoibputra();
        $this->view('templates/header', $data);
        $this->view('bilghoib/index', $data);
        $this->view('templates/footer');
    }
    public function putri()
    {
        $data['judul'] = 'Bilghoib Putri';
        $data['bilghoib_total'] = $this->model('Bilghoib_model')->getAllBilghoibputri();
        $this->view('templates/header', $data);
        $this->view('bilghoib/index', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->model('Bilghoib_model')->hapusDataBilghoib($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        }
    }
    public function tambah()
    {
        if ($this->model('Bilghoib_model')->tambahDataBilghoib($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Bilghoib_model')->getBilghoibById($_POST['id']));
     }
     
    public function ubah(){
        
        if ($this->model('Bilghoib_model')->ubahDataBilghoib($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . 'bilghoib');
            exit;
        }
    }
}
