<?php

use function PHPSTORM_META\type;

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		if ($this->session->userdata('id')) {
			redirect('home');
		}

		$this->load->view('auth/login');
	}

	public function act_login()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);

		$user = $this->db->get_where('user', ['email' => $email])->row();

		if ($user) {
			$check_password = password_verify($password, $user->password);

			if ($check_password) {
				$session_user = [
					'id' => $user->id,
					'nama' => $user->nama
				];
				$this->session->set_userdata($session_user);

				$this->session->set_flashdata('alert', '<div  class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil login. Selamat datang '. $user->nama .'.</div>');

				if ($user->level == 1) {
					redirect('customer');
				} else {
					redirect('home');
				}
			}
		}

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda gagal login. Username atau Password salah!</div>');
		redirect('auth/login');
	}

	public function daftar()
	{
		$this->load->view('auth/daftar');
	}

	public function act_daftar()
	{
		$nama = $this->input->post('nama', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$no_wa = $this->input->post('no_wa', TRUE);
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$password = password_hash($password, PASSWORD_DEFAULT);

		$user = $this->db->get_where('user', ['email', $email])->row();

		if (!$user) {
			$email = $this->input->post('email', TRUE);
			$data = [
				'nama' => $nama,
				'alamat' => $alamat,
				'no_wa' => $no_wa,
				'email' => $email,
				'password' => $password,
				'level' => 2,
				'is_active' => true
			];
			$this->db->insert('user', $data);

			$session_user = [
				'id' => $this->db->insert_id(),
				'nama' => $nama
			];
			$this->session->set_userdata($session_user);

			$this->session->set_flashdata('alert', '<div class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil daftar. Selamat datang '. $user->nama .'.</div>');
			redirect('home');
		}

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Email sudah terdaftar!</div>');
		redirect('auth/daftar');
	}

	public function logout()
	{
		$this->session->unset_userdata(['id', 'nama']);

		$this->session->set_flashdata('alert', '<div class="alert alert-success"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil logout.</div>');
		redirect('');				
	}



	private function _sendEmail($token, $type)
	{

		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'tls://mail.goyehid.com',
			'smtp_user' => 'noreply@goyehid.com',
			'smtp_pass' => 'R06*X!x]~lR%',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n",
		];

		$this->load->library('email', $config);

		$this->email->from('agenbrilinkdu@gmail.com', 'Agen BRILink Dede Udin');
		$this->email->to($this->input->post('email'));

		if($type == 'lupapassword') {
			$this->email->subject('Lupa Password');
			$this->email->message('Klik link di samping untuk Ganti Password : <a href="'. base_url() . 'auth/gantipassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">ganti</a>');
		}


		if ($this->email->send()) {
			return true;
		} else {
			return $this->email->print_debugger();
		}
	}

	public function lupapassword()
	{
		$this->load->view('auth/lupapassword');

		if ($this->input->post('email')) {
			
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			
			if($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'lupapassword');

				$this->session->set_flashdata('alert', '<div  class="alert alert-succes"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>xxxxxxxxxxxxxx</div>');


			} else {
				$this->session->set_flashdata('alert', '<div  class="alert alert-danger"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Email belum terdaftar</div>');
			}

		}
	}

	public function gantipassword()
	{
		// if(!$this->session->userdata('reset_email')) {
		// 	redirect('auth');
		// }

		$this->load->view('auth/gantipassword');
	

		$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
		$email = $this->session->userdata('reset_email');

		$this->db->update('user', ['password' => $password ], ['email' => $email]);

		$this->session->unset_userdata('reset_email');

		$this->session->set_flashdata('alert', '<div  class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Password Berhasil diganti</div>');
	}
}
