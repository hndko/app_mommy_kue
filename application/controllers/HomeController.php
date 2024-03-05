<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AcaraModel');
    }

    public function index()
    {
        $data = [
            'acara' => $this->AcaraModel->getData()
        ];
        $this->load->view('home', $data);
    }
}
