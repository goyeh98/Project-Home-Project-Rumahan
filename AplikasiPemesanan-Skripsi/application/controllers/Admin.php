<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if (!check_admin()) {
            redirect('');
        }
		
		$this->load->view('admin/dashboard');
	}
}
