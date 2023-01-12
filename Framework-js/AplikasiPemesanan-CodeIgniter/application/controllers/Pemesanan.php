<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_transaksi', 'transaksi');
    }

	public function index()
	{
		if (!check_admin()) {
            redirect('');
        }
		
        $this->db->order_by('id', 'desc');
        $pemesanan = $this->transaksi->getTransaksi();

        $data = [
            'pemesanan' => $pemesanan
        ];
		$this->load->view('admin/pemesanan/index', $data);
	}
    
    public function tambah()
    {
        $this->load->view('admin/customer/tambah');
    }

    public function act_tambah()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $no_wa = $this->input->post('no_wa');
        $password = $this->input->post('password');
        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'no_wa' => $no_wa,
            'password' => $password,
            'level' => 2,
            'is_active' => true
        ];
        $this->db->insert('user', $data);

        redirect('customer');
    }

    public function detail($id='')
    {
        $pemesanan = $this->transaksi->getTransaksi($id);

        $data = [
            'pemesanan' => $pemesanan
        ];
		$this->load->view('admin/pemesanan/detail', $data);
    }
}
