<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AcaraModel');
        $this->load->model('LandingPagesModel');
        $this->load->model('SosialMediaModel');
    }

    public function index()
    {
        $data = [
            'acara' => $this->AcaraModel->getData(),
            'set_umum' => $this->LandingPagesModel->getData(),
            'sosmed' => $this->SosialMediaModel->getData()
        ];
        $this->load->view('home', $data);
    }
}
