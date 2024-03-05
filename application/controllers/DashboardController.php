<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }
}
