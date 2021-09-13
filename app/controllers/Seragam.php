<?php

class Seragam extends Controller
{
    public function index()
    {
        $data['judul'] = 'Seragam Binadhor';
        $data['binadhor_total'] = $this->model('Binadhor_model')->getAllBinadhor();
        $data['seragam_total'] = $this->model('Seragam_model')->getAllSeragam();
        $this->view('templates/header', $data);
        $this->view('seragam/binadhor', $data);
        $this->view('templates/footer');
    }

    public function bilghoib()
    {
        $data['judul'] = 'Seragam Bilghoib';
        $data['bilghoib_total'] = $this->model('Bilghoib_model')->getAllBilghoib();
        $data['serbilghoib_total'] = $this->model('Seragam_model')->getAllSerbilghoib();
        $this->view('templates/header', $data);
        $this->view('seragam/bilghoib', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ($this->model('Seragam_model')->tambahDataSeragam($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . 'seragam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . 'seragam');
            exit;
        }
    }
    public function tambahserbilghoib()
    {
        if ($this->model('Seragam_model')->tambahDataSerbilghoib($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        }
    }


    public function hapus($id)
    {
        if ($this->model('Seragam_model')->hapusDataSeragam($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . 'seragam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . 'seragam');
            exit;
        }
    }

    public function hapusserbilghoib($id)
    {
        if ($this->model('Seragam_model')->hapusDataSerbilghoib($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Seragam_model')->getSeragamById($_POST['id']));
     }
    public function getubahserbilghoib(){
        echo json_encode($this->model('Seragam_model')->getSerbilghoibById($_POST['id']));
     }
     
    public function ubah(){
        
        if ($this->model('Seragam_model')->ubahDataSeragam($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'seragam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . 'seragam');
            exit;
        }
    }

    public function ubahserbilghoib(){
        
        if ($this->model('Seragam_model')->ubahDataSerbilghoib($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . 'seragam/bilghoib');
            exit;
        }
    }
}
?>