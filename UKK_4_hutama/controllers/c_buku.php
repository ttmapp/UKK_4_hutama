<?php

include_once __DIR__ . '../../models/m_buku.php';

$buku = new listbuku();

try {
    if(!empty($_GET['action'])) {
        // PERBAIKAN: Operator == harus diganti dengan !=
        if($_GET['action'] != 'delete') {
            // Tambahkan pengecekan apakah form dikirim
            

            
                if ($_GET ['action'] == 'edit'){

                    if ($_GET['aksi' == 'edit'] ){
                        $id = $_GET['id'];
                
                        $data = $buku->ambil_data_by_id($id);

                        include_once '../public/admin.php/editdata_listbuku.php';
                    }

               
                } else {
                

                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $id_buku = $_POST['id_buku'];
                        $judul_buku = $_POST['judul_buku'];
                        $pengarang = $_POST['pengarang'];
                        $penerbit = $_POST['penerbit'];
                        $stok = $_POST['stok'];
                        // VARIABLE YANG BELUM DIPILIH DI FORM TAMBAH_BUKU.PHP
                        $kategori = isset($_POST['kategori']) ? $_POST['kategori'] : '';
                        $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : '';
                        
                        if($_GET['action'] == 'add') {
                            $buku->tambah_data($id_buku, $judul_buku, $pengarang, $penerbit, $stok, $kategori, $sinopsis);
                        } elseif ($_GET['action'] == 'update') {
                            // Kode untuk update
                                    }
                }


                }
        }
    } else {
        
    $data = $buku->ambil_data();
    }
} catch(Exception $e) {
    echo $e->getMessage();
}

?>