<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function listrik_prabayar()
	{
        $nomor = $this->input->post('nomor', true);
        $nama = $this->input->post('nama', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nomor Listrik' => $nomor,
            'Nama Listrik' => $nama
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin beli listrik prabayar";
        $message .= "\n\nNomor Listrik: " . $nomor;
        $message .= "\nNama Listrik: " . $nama;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Listrik Prabayar",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function listrik_token()
	{
        $nomorsatu = $this->input->post('nomorsatu', true);
        $nominalsatu = $this->input->post('nominalsatu', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nomor Listrik' => $nomorsatu,
            'Nominal Listrik' => $nominalsatu
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin beli listrik token";
        $message .= "\n\nNomor Listrik : " . $nomorsatu;
        $message .= "\nNominal : " . $nominalsatu;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Listrik Token",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function transfer()
	{
        $namadua = $this->input->post('namadua', true);
        $nomordua = $this->input->post('nomordua', true);
        $nominaldua = $this->input->post('nominaldua', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nama Tujuan' => $namadua,
            'Nomor Tujuan' => $nomordua,
            'Nominal Transfer' => $nominaldua
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin transfer antar Bank";
        $message .= "\n\nNama Bank: " . $namadua;
        $message .= "\nNomor Tujuan: " . $nomordua;
        $message .= "\nNominal Transfer: " . $nominaldua;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Transfer",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function briva()
	{
        $nomortiga = $this->input->post('nomortiga', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nomor Briva' => $nomortiga,
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin bayar BRIVA";
        $message .= "\nNomor Briva: " . $nomortiga;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "BRIVA",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function bpjs()
	{
        $namaempat = $this->input->post('namaempat', true);
        $nomorempat = $this->input->post('nomorempat', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nama Tujuan' => $namaempat,
            'Nomor Tujuan' => $nomorempat
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin bayar BPJS";
        $message .= "\nNama BPJS: " . $namaempat;
        $message .= "\nNomor BPJS: " . $nomorempat;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "BPJS",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function ewallet()
	{
        $namalima = $this->input->post('namalima', true);
        $nomorlima = $this->input->post('nomorlima', true);
        $nominallima = $this->input->post('nominallima', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nama Aplikasi' => $namalima,
            'Nomor Tujuan' => $nomorlima,
            'Nominal Isi' => $nominallima
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin topup e-Wallet";
        $message .= "\nNama Aplikasi: " . $namalima;
        $message .= "\nNomor Tujuan: " . $nomorlima;
        $message .= "\nNominal Topup: " . $nominallima;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Ewallet",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function kuota()
	{
        $namaenam = $this->input->post('namaenam', true);
        $nomorenam = $this->input->post('nomorenam', true);
        $nominalenam = $this->input->post('nominalenam', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nama Provider' => $namaenam,
            'Nomor Tujuan' => $nomorenam,
            'Nominal Kuota' => $nominalenam
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin beli Kuota";
        $message .= "\nProvider Kartu: " . $namaenam;
        $message .= "\nNomor Tujuan: " . $nomorenam;
        $message .= "\nNominal Kuota: " . $nominalenam;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Kuota",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function pulsa()
	{
        $namatujuh = $this->input->post('namatujuh', true);
        $nomortujuh = $this->input->post('nomortujuh', true);
        $nominaltujuh = $this->input->post('nominaltujuh', true);

        $user_id = $this->session->userdata('id');
        $user = $this->db->get_where('user', ['id' => $user_id])->row();

        $transaksi = [
            'Nama Provider' => $namatujuh,
            'Nomor Tujuan' => $nomortujuh,
            'Nominal Pulsa' => $nominaltujuh
        ];

        $no_wa = "081804905183";
        $message = "Saya ingin beli Pulsa";
        $message .= "\nProvider Kartu: " . $namatujuh;
        $message .= "\nNomor Tujuan: " . $nomortujuh;
        $message .= "\nNominal Pulsa: " . $nominaltujuh;
        $message .= "\nPemesan : " . $user->nama;
        kirim_wa($no_wa, $message);

        $data = [
            'user_id' => $user_id,
            'jenis' => "Pulsa",
            'transaksi' => json_encode($transaksi)
        ];
        $this->db->insert('transaksi', $data);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}

    public function proses()
	{
        $id = $this->input->post('id', true);
        $jumlah = $this->input->post('jumlah', true);

        $user_id = $this->session->userdata('id');
        
        $pemesanan = $this->db->get_where('transaksi', ['id' => $id])->row();
        $user = $this->db->get_where('user', ['id' => $pemesanan->user_id])->row();
        // print_r($user);die;

        $transaksi = json_decode($pemesanan->transaksi);

        $message = "Transaksi sudah kami proses, berikut jumlah tagihan yang harus dibayarkan :";
        $message .= "\nRp " . $jumlah;
        $message .= "\n\nDengan detail pesanan :";
        foreach ($transaksi as $key => $data) {
            $message .= "\n". ucfirst($key) .': '.$data;
        }
        $message .= "\n\nNote : Max pembayaran 1x24 jam" ;
        kirim_wa($user->no_wa, $message);

        $data = [
            'status' => 'Sudah diproses'
        ];
        $this->db->update('transaksi', $data, ['id' => $id]);

		header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'status' => true,
            'message' => "Berhasil"
        ]);
	}
}
