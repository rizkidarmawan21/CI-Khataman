<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        // $data['nama'] = $this->model('User_model')->getUser();
        $data['countbinadhor'] = $this->model('Binadhor_model')->getCountBinadhor();
        $data['countbinadhorputra'] = $this->model('Binadhor_model')->getCountBinadhorputra();
        $data['countbinadhorputri'] = $this->model('Binadhor_model')->getCountBinadhorputri();
        $data['countbilghoib'] = $this->model('Bilghoib_model')->getCountBilghoib();
        $data['countbilghoibputra'] = $this->model('Bilghoib_model')->getCountBilghoibputra();
        $data['countbilghoibputri'] = $this->model('Bilghoib_model')->getCountBilghoibputri();
        $data['countbayarbinadhorputra1'] = $this->model('Pembayaran_model')->getCountBayarBinadhorputra1();
        $data['countbayarbinadhorputra0'] = $this->model('Pembayaran_model')->getCountBayarBinadhorputra0();
        $data['countbayarbinadhorputri1'] = $this->model('Pembayaran_model')->getCountBayarBinadhorputri1();
        $data['countbayarbinadhorputri0'] = $this->model('Pembayaran_model')->getCountBayarBinadhorputri0();

        
        $data['countbayarbilghoibputra1'] = $this->model('Pembayaran_model')->getCountBayarBilghoibputra1();
        $data['countbayarbilghoibputra0'] = $this->model('Pembayaran_model')->getCountBayarBilghoibputra0();
        $data['countbayarbilghoibputri1'] = $this->model('Pembayaran_model')->getCountBayarBilghoibputri1();
        $data['countbayarbilghoibputri0'] = $this->model('Pembayaran_model')->getCountBayarBilghoibputri0();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer'); 
    }
}
