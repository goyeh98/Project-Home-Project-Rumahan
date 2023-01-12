<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

	public function getTransaksi($id = null)
	{
        $this->db->select('transaksi.id, transaksi.jenis, transaksi.transaksi, transaksi.status, user.nama');
        $this->db->join('user', 'transaksi.user_id=user.id', 'left');

        if ($id) {
            return $this->db->get_where('transaksi', ['transaksi.id' => $id])->row();
        }
        return $this->db->get('transaksi')->result();
    }
}