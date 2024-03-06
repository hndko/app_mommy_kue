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
        $this->load->model('GaleriModel');
        $this->load->model('PortofolioModel');
        $this->load->model('UcapanModel');
    }

    public function index()
    {
        $data = [
            'acara' => $this->AcaraModel->getData(),
            'set_umum' => $this->LandingPagesModel->getData(),
            'sosmed' => $this->SosialMediaModel->getData(),
            'galeri' => $this->GaleriModel->getData(),
            'porto' => $this->PortofolioModel->getData(),
            'ucapan' => $this->UcapanModel->getData(),
        ];
        $this->load->view('home', $data);
    }

    public function contact_store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $konfirmasi = $this->input->post('konfirmasi');
            $deskripsi = $this->input->post('deskripsi');

            // Siapkan data yang akan diupdate
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'konfirmasi' => $konfirmasi,
                'deskripsi' => $deskripsi,
            );

            $this->UcapanModel->tambahData($data);
            redirect(base_url());
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }
}
