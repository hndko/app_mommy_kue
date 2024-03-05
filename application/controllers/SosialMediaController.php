<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SosialMediaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SosialMediaModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Sosial Media',
            'res' => $this->SosialMediaModel->getData()
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/sosial_media/index', $data);
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
            $twitter = $this->input->post('twitter');
            $facebook = $this->input->post('facebook');
            $instagram = $this->input->post('instagram');
            $tiktok = $this->input->post('tiktok');

            // Siapkan data yang akan diupdate
            $data = array(
                'twitter' => $twitter,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'tiktok' => $tiktok
            );

            // Lakukan update data di database
            $this->db->update('tb_sosial_media', $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            redirect('app/sosial_media');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }
}
