<?php

function check_admin() {
    $ci = get_instance();
    $user_id = $ci->session->userdata('id');
    
    $user = $ci->db->get_where('user', ['id' => $user_id])->row();

    if ($user && $user->level == 1) {
        return true;
    }

    return false;
}

function kirim_wa($no_wa, $message) {
    $api_key   = '8d64c35530246f2b7d93fd9706b73b58368ccd83'; // API KEY Anda
    $id_device = '12345'; // ID DEVICE yang di SCAN (Sebagai pengirim)
    $url   = 'https://dash.sentwa.com/api/send.php'; // URL API
    $no_hp = $no_wa; // No.HP yang dikirim (No.HP Penerima)
    $pesan = $message; // Pesan yang dikirim

    // echo ltrim($no_wa, '0');die;
    // $no_wa = str_replace('0', '62', $no_wa);
    $no_wa = ltrim($no_wa, '0');
    $no_wa = '62'.$no_wa;
    // echo $no_wa;die;
    $data_post = [
        'number'=> $no_wa,
    'type' => 'text',
    'message' => $message,
    'instance_id'   => "630EBFEF696BA",
    'access_token'   => "93828a17e9f162ff45fcaf7a40ff1fc2"
    ];
    $url .= '?'. http_build_query($data_post);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
    curl_setopt($curl, CURLOPT_TIMEOUT, 0); // batas waktu response
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_POST, 1);

    // curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_post));
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}