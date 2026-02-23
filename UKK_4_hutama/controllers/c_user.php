<?php

include_once __DIR__ . '../../models/m_user.php';

$user = new anggota();

try {
    if(!empty($_GET['join'] == 'add')){

    $_SERVER['REQUEST_METHOD'] == $_POST;
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $status_anggota = $_POST['status_anggota'];

        $user->tambah_data($nama_lengkap,$username,$password,$role,$status_anggota);
    } else {
        $data = $user->ambil_data();
    }
} catch(Exception $e) {
    echo $e->getMessage();
}


