<?php

class Syahadah extends Controller
{ 
    public function index(){
        $data['binadhor_total'] = $this->model('Binadhor_model')->getAllBinadhor();
        $data['judul'] = 'Syahadah';
        $this->view('templates/header', $data);
        $this->view('syahadah/index', $data);
        $this->view('templates/footer');
    }


    public function printBinadhorPutra(){
        $data['binadhorPutra'] = $this->model('Binadhor_model')->getAllBinadhorputraPrint();
        $this->view('print/syahadahBinadhorPutra',$data);
    }
}