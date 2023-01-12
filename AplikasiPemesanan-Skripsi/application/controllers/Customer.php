<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		if (!check_admin()) {
            redirect('');
        }
		
        $customers = $this->db->get_where('user', ['level' => 2])->result();

        $data = [
            'customers' => $customers
        ];
		$this->load->view('admin/customer/index', $data);
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
        $customer = $this->db->get_where('user', ['id' => $id])->row();

        $data = [
            'customer' => $customer
        ];
		$this->load->view('admin/customer/detail', $data);
    }
}
