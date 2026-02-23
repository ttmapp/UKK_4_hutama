<?php

include_once 'm_koneksi.php';

class listbuku {
    function ambil_data(){

    $conn = new m_koneksi();
    $sql = "SELECT * FROM buku";
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
    function ambil_data_by_id($id){

    $conn = new m_koneksi();
    $sql = "SELECT * FROM buku WHERE id_buku = $id";
    $stmt = mysqli_query($conn->conn, $sql);
    }
    
   function tambah_data($id_buku, $judul_buku, $pengarang, $penerbit, $stok, $kategori, $sinopsis) {
    $conn = new m_koneksi();
    
    // PERBAIKAN: Gunakan prepared statements untuk keamanan
    $sql = "INSERT INTO buku (id_buku, judul_buku, pengarang, penerbit, stok, kategori, sinopsis) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Persiapkan statement
    $stmt = $conn->conn->prepare($sql);

    if($stmt){
        echo "<script>windows.location='../public/admin.php/listbuku.php'</script>";
    }
    
    if($stmt) {
        // Bind parameter
        $stmt->bind_param("ssssiss", $id_buku, $judul_buku, $pengarang, $penerbit, $stok, $kategori, $sinopsis);
        
        if($stmt->execute()) {
            // PERBAIKAN: Redirect dengan header atau echo script
            echo "<script>
                    window.location.href = '../public/admin.php/lisbuku.php';
                  </script>";
        } else {
            echo "<script>alert('tambah gagal: " . $stmt->error . "')</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Error preparing statement: " . $conn->conn->error . "')</script>";
    }
}
function update_data(){
$conn = new m_koneksi();
$sql = "UPDATE buku SET id_buku, judul_buku, pengarang, penerbit, stok, kategori, sinopsis";
$query = mysqli_query($conn->conn, $sql);

if ($query) {
     echo "<script>alert('Data Berhasil Di ubah');window.location='../public/admin.php/lisbuku.php'</script>";
} else {
    echo "<script>alert('Data Tidak Berhasil Di ubah');window.locatio='../view/login.php";
}

}
function delete_data($id_buku){
    $conn = new m_koneksi();
$sql = "DELETE FROM buku WHERE id_buku = $id_buku ";
$query = mysqli_query($conn->conn, $sql);
header("location:../views/dashboard.php");
}
}