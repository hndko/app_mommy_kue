<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GaleriModel');

        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Galeri',
            'result' => $this->GaleriModel->getData()
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

    public function edit($id)
    {
        $data = [
            'title' => 'Galeri',
            'res' => $this->GaleriModel->getData($id)
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/galeri/edit', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function update($id)
    {
        // Pastikan method POST terpanggil
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
                // Jika gambar tidak diupload, tetap gunakan galeri yang lama
                $galeri = $this->input->post('galeri_old');
            }

            // Siapkan data yang akan diupdate
            $data = array(
                'galeri' => $galeri
            );

            // Lakukan update data di database
            $this->GaleriModel->ubahData($id, $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('app/galeri');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }

    public function delete($id)
    {
        // Get the filename of the photo
        $gallery = $this->GaleriModel->getData($id);
        $galeri = $gallery->galeri;
        // Delete the kamar data
        $this->GaleriModel->deleteData($id);
        // Unlink the photo file
        $photo_path = './assets/img/gallery/' . $galeri;
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }

        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('app/galeri');
    }
}
