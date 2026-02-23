<?php

include "../../controllers/c_buku.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Buku | Admin E-Perpus</title>
    <link rel="stylesheet" href="listbuku.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="admin-body">

<div class="sidebar">
    <h2>ADMIN</h2>
    <a href="?url=admin/dashboard" class="nav-item"><i class="fas fa-chart-pie"></i> Dashboard</a>
    <a href="?url=admin/kelola_buku" class="nav-item active"><i class="fas fa-book"></i> Kelola Buku</a>
    <a href="tambah_buku.php" class="nav-item"><i class="fas fa-user-shield"></i> tambah buku</a>
    <a href="?url=admin/kelola_buku" class="nav-item"><i class="fas fa-user-shield"></i> Kelola Anggota</a>
    
    <a href="?url=auth/login" class="nav-item logout"><i class="fas fa-power-off"></i> Logout</a>
</div>

<div class="main-content">
    <div class="header">
        <h1>Koleksi Inventaris Buku</h1>
        <div class="search-container">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Cari judul_buku buku..." onkeyup="searchBook()">
        </div>
    </div>

    <div class="book-grid" id="bookGrid">
        <div class="book-card" onclick="openDetail('Laskar Pelangi', 'Andrea Hirata', 'Kisah perjuangan sepuluh anak di Belitung dalam menempuh pendidikan di sekolah yang penuh keterbatasan namun kaya akan semangat.', '12')">
            <div class="book-img"><i class="fas fa-book"></i></div>
            <div class="book-info">
                <h3>Laskar Pelangi</h3>
                <p>Andrea Hirata</p>
                <span class="stock">Stok: 12</span>
            </div>
        </div>
        
        <?php 
            foreach($data as $result){

            
        ?>
            <div class="book-card" onclick="
            openDetail()">
                <div class="book-img"><i class="fas fa-book"></i></div>
                <h3><?= $result->judul_buku ?></h3>
                <p><?= $result->penerbit ?></p>
                <span class="stock"><?= $result->stok ?></span>
                
            </div>
        <?php
        }
        ?>

    </div>
</div>

<div id="bookModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-header">
            <i class="fas fa-book-open"></i>
            <h2 id="mTitle"></h2>
            <p id="mAuthor"></p>
        </div>
        <div class="modal-body">
            <p><strong>Sinopsis:</strong></p>
            <p id="mSynopsis"></p>
            <div class="modal-footer">
                <span>Stok tersedia: <b id="mStock"></b></span>
                <a href="editdata_listbuku.php" class="btn-action\" onclick="">Edit Data</button>
            </div>
        </div>
    </div>
</div>

<script>
    function searchBook() {
        let input = document.getElementById('searchInput').value.toLowerCase();
        let cards = document.getElementsByClassName('book-card');
        for (let i = 0; i < cards.length; i++) {
            let title = cards[i].getElementsByTagName('h3')[0].innerText.toLowerCase();
            cards[i].style.display = title.includes(input) ? "block" : "none";
        }
    }
    function openDetail(title, author, synopsis, stock) {
        document.getElementById('mTitle').innerText = title;
        document.getElementById('mAuthor').innerText = author;
        document.getElementById('mSynopsis').innerText = synopsis;
        document.getElementById('mStock').innerText = stock;
        document.getElementById('bookModal').style.display = "block";
    }
    function closeModal() {
        document.getElementById('bookModal').style.display = "none";
    }
</script>
</body>
</html>