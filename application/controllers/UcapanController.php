<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UcapanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UcapanModel');

        if ($this->session->userdata('logged') != TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Ucapan',
            'result' => $this->UcapanModel->getData()
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/ucapan/index', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function create()
    {
        $data = [
            'title' => 'Ucapan'
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/ucapan/create', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function store()
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

    public function edit($id)
    {
        $data = [
            'title' => 'Ucapan',
            'res' => $this->UcapanModel->getData($id)
        ];

        $this->load->view('dashboard/_partikels/head');
        $this->load->view('dashboard/_partikels/sidebar');
        $this->load->view('dashboard/_partikels/navbar');
        $this->load->view('dashboard/ucapan/edit', $data);
        $this->load->view('dashboard/_partikels/footer');
        $this->load->view('dashboard/_partikels/javascript');
    }

    public function update($id)
    {
        // Pastikan method POST terpanggil
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

            // Lakukan update data di database
            $this->UcapanModel->ubahData($id, $data);

            // Redirect kembali ke halaman index atau ke halaman lain yang Anda inginkan
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('app/ucapan');
        } else {
            // Jika bukan method POST, tampilkan pesan kesalahan atau lakukan aksi lain yang sesuai
            echo "Metode yang diperbolehkan hanya POST";
        }
    }

    public function delete($id)
    {
        $this->UcapanModel->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('app/ucapan');
    }
}
