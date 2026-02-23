<?php

include_once "m_koneksi.php";

// Model Anggota.php
class anggota extends m_koneksi {

    function ambil_data(){

    $conn = new m_koneksi();
    $sql = "SELECT * FROM users";
    $stmt = mysqli_query($conn->conn, $sql);

    if($stmt->num_rows > 0){
        while($row = mysqli_fetch_object($stmt)){
            $result[] = $row;
        }
        return $result;
    } else {
        echo 'kosong';
    }
}

    function tambah_data($nama_lengkap,$username,$password,$role,$status_anggota){

    $conn = new m_koneksi();
    $sql = "INSERT INTO `users`(`id_user`, `nama_lengkap`, `username`, `password`, `role`, `status_anggota`) 
            VALUES (NULL,'$nama_lengkap','$username','$password','$role','$status_anggota')";
    $stmt = mysqli_query($conn->conn, $sql);

    if($stmt) {
        echo "<script>alert('Registrasi Berhasil!');windows.location='../views/login.php'</script>";
    }

    }


    public function approveMember($id_user) {
        // Query untuk mengubah status anggota menjadi 'true' (telah disetujui)
        $sql = "UPDATE users SET status_anggota = 'true' WHERE id_user = ?";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_user);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPendingMembers() {
        // Mengambil siswa yang mendaftar tapi belum diverifikasi
        $sql = "SELECT * FROM users WHERE role = 'siswa' AND status_anggota = 'false'";
        return $this->conn->query($sql);
    }

    public function getActiveMembers() {
        // Mengambil anggota yang sudah aktif dan bisa meminjam buku
        $sql = "SELECT * FROM users WHERE role = 'siswa' AND status_anggota = 'true'";
        return $this->conn->query($sql);
    }
}