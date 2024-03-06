<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GaleriModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Galeri',
            'res' => $this->GaleriModel->getData()
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/galeri/index', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function create()
    {
        $data = [
            'title' => 'Galeri'
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/galeri/create', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Tangkap data gambar jika diupload
            if (!empty($_FILES['galeri']['name'])) {
                $config['upload_path']          = './assets/img/gallery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 2MB
                $config['file_name']            = 'galeri_' . time(); // Generate unique file name

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('galeri')) {
                    $galeri = $this->upload->data('file_name');
                } else {
                    // Handle error jika upload gagal
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } else {
                $galeri = null;
            }

            // Siapkan data yang akan diupdate
            $data = array(
                'galeri' => $galeri
            );

            // Lakukan update data di database
            $this->GaleriModel->tambahData($data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('app/galeri');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
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
            $title = $this->input->post('title');
            $judul = $this->input->post('judul');
            $no_telpon = $this->input->post('no_telpon');
            $email = $this->input->post('email');

            // Tangkap data gambar jika diupload
            if (!empty($_FILES['logo']['name'])) {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 2MB
                $config['file_name']            = 'logo_' . time(); // Generate unique file name

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {
                    $logo = $this->upload->data('file_name');
                } else {
                    // Handle error jika upload gagal
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } else {
                // Jika gambar tidak diupload, tetap gunakan logo yang lama
                $logo = $this->input->post('logo_old');
            }

            // Siapkan data yang akan diupdate
            $data = array(
                'title' => $title,
                'judul' => $judul,
                'logo' => $logo,
                'no_telpon' => $no_telpon,
                'email' => $email,
            );

            // Lakukan update data di database
            $this->db->update('tb_setting_umum', $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            redirect('app/landing_pages');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }
}
