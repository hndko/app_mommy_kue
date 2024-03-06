<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PortofolioController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PortofolioModel');

        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Portofolio',
            'result' => $this->PortofolioModel->getData()
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/portofolio/index', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function create()
    {
        $data = [
            'title' => 'Portofolio'
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/portofolio/create', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $jabatan = $this->input->post('jabatan');
            $deskripsi = $this->input->post('deskripsi');
            $rating = $this->input->post('rating');

            // Tangkap data gambar jika diupload
            if (!empty($_FILES['sampul']['name'])) {
                $config['upload_path']          = './assets/img/testimonials/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 2MB
                $config['file_name']            = 'sampul_' . time(); // Generate unique file name

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {
                    $sampul = $this->upload->data('file_name');
                } else {
                    // Handle error jika upload gagal
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } else {
                $sampul = null;
            }

            // Siapkan data yang akan diupdate
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'jabatan' => $jabatan,
                'deskripsi' => $deskripsi,
                'sampul' => $sampul,
                'rating' => $rating,
            );

            // Lakukan update data di database
            $this->PortofolioModel->tambahData($data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('app/portofolio');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Portofolio',
            'res' => $this->PortofolioModel->getData($id)
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/portofolio/edit', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function update($id)
    {
        // Pastikan method POST terpanggil
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $jabatan = $this->input->post('jabatan');
            $deskripsi = $this->input->post('deskripsi');
            $rating = $this->input->post('rating');

            // Tangkap data gambar jika diupload
            if (!empty($_FILES['sampul']['name'])) {
                $config['upload_path']          = './assets/img/testimonials/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 2MB
                $config['file_name']            = 'sampul_' . time(); // Generate unique file name

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {
                    $sampul = $this->upload->data('file_name');
                } else {
                    // Handle error jika upload gagal
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } else {
                // Jika gambar tidak diupload, tetap gunakan sampul yang lama
                $sampul = $this->input->post('sampul_old');
            }

            // Siapkan data yang akan diupdate
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'jabatan' => $jabatan,
                'deskripsi' => $deskripsi,
                'sampul' => $sampul,
                'rating' => $rating,
            );

            // Lakukan update data di database
            $this->PortofolioModel->ubahData($id, $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('app/portofolio');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }

    public function delete($id)
    {
        // Get the filename of the photo
        $testimonials = $this->PortofolioModel->getData($id);
        $sampul = $testimonials->sampul;
        // Delete the kamar data
        $this->PortofolioModel->deleteData($id);
        // Unlink the photo file
        $photo_path = './assets/img/testimonials/' . $sampul;
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }

        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('app/portofolio');
    }
}
