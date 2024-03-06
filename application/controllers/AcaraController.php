<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AcaraController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AcaraModel');

        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Acara',
            'res' => $this->AcaraModel->getData()
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/acara/index', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }


    public function create()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function delete()
    {
        //
    }

    public function update()
    {
        // Pastikan method POST terpanggil
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Tangkap data dari form
            $text_start = $this->input->post('text_start');
            $text_end = $this->input->post('text_end');
            $datetime = $this->input->post('datetime');

            // Siapkan data yang akan diupdate
            $data = array(
                'text_start' => $text_start,
                'text_end' => $text_end,
                'datetime' => $datetime
            );

            // Lakukan update data di database
            $this->db->update('tb_acara', $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            redirect('app/acara');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }
}
