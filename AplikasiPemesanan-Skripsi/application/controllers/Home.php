<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function profile()
	{
		$user = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row();
		
		$data = [
			'user' => $user
		];
		$this->load->view('profile', $data);
	}
	public function history()
	{
        $this->db->select('transaksi.id, transaksi.jenis, transaksi.transaksi, transaksi.status, user.nama');
        $this->db->join('user', 'transaksi.user_id=user.id', 'left');
		$histories = $this->db->get_where('transaksi', ['user_id' => $this->session->userdata('id')])->result();

		$data = [
			'histories' => $histories
		];
		$this->load->view('history', $data);
	}
}
