<?php
include_once "../../controllers/c_buku.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku | Admin E-Perpus</title>
    <style>
        :root {
    --primary-color: #4f46e5;
    --primary-hover: #4338ca;
    --bg-color: #f8fafc;
    --sidebar-color: #1e293b;
    --text-main: #334155;
    --text-muted: #64748b;
    --white: #ffffff;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    background-color: var(--bg-color);
    display: flex;
}

/* Sidebar Styling */
.sidebar {
    width: 260px;
    background-color: var(--sidebar-color);
    min-height: 100vh;
    padding: 2rem 1rem;
    position: fixed;
}

.sidebar-header h2 {
    color: white;
    font-size: 1.5rem;
    margin-bottom: 2rem;
    text-align: center;
    letter-spacing: 2px;
}

.nav-item {
    display: block;
    color: #94a3b8;
    text-decoration: none;
    padding: 0.8rem 1.2rem;
    margin-bottom: 0.5rem;
    border-radius: 8px;
    transition: 0.3s;
}

.nav-item:hover, .nav-item.active {
    background-color: var(--primary-color);
    color: white;
}

.logout {
    margin-top: 2rem;
    color: #f87171;
}

/* Main Content & Centering Logic */
.main-content {
    margin-left: 260px; /* Lebar sidebar */
    width: calc(100% - 260px);
    min-height: 100vh;
    display: flex;
    justify-content: center; /* Ketengahin secara horizontal */
    align-items: center;     /* Ketengahin secara vertikal */
    padding: 40px;
}

.container-center {
    width: 100%;
    max-width: 700px; /* Batasi lebar form agar rapi */
}

.header-action {
    margin-bottom: 1rem;
}

.btn-back {
    text-decoration: none;
    color: var(--text-muted);
    font-size: 0.9rem;
    transition: 0.3s;
}

.btn-back:hover {
    color: var(--primary-color);
}

/* Form Card */
.form-card {
    background: var(--white);
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.form-header {
    text-align: center;
    margin-bottom: 2rem;
}

.form-header h1 {
    color: var(--text-main);
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
}

.form-header p {
    color: var(--text-muted);
    font-size: 0.95rem;
}

/* Inputs */
.input-group {
    margin-bottom: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-main);
    font-weight: 600;
    font-size: 0.9rem;
}

label i {
    margin-right: 8px;
    color: var(--primary-color);
}

input, select, textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 1rem;
    color: var(--text-main);
    transition: 0.3s;
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.btn-submit {
    width: 100%;
    padding: 1rem;
    background-color: var(--primary-color);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 1rem;
}

.btn-submit:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
}

/* Responsif */
@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="admin-body">

<div class="sidebar">
            <div class="sidebar-header">
        <h2> ADMIN</h2>
    </div>
        <nav>
            <a href="#" class="nav-item active"><i class="fas fa-chart-pie"></i> <span>Dashboard</span></a>
            <a href="#" class="nav-item"><i class="fas fa-book"></i> <span>Kelola Buku</span></a>
            <a href="#" class="nav-item"><i class="fas fa-users"></i> <span>Kelola Anggota</span></a>
            <a href="#" class="nav-item"><i class="fas fa-exchange-alt"></i> <span>Peminjaman</span></a>
        </nav>
        <a href="#" class="nav-item logout"><i class="fas fa-power-off"></i> <span>Logout</span></a>
    </div>

<div class="main-content">
    <div class="container-center">
        <div class="header-action">
             <a href="?url=admin/kelola_buku" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>

        <div class="form-card">
            <div class="form-header">
                <h1>Tambah Koleksi Baru</h1>
                <p>Lengkapi detail buku untuk menambah koleksi perpustakaan</p>
            </div>

            <form action="../../controllers/c_buku.php?action=add" method="POST">
                <input type="hidden" name="id_buku">
                
                <div class="input-group">
                    <label for="judul_buku"><i class="fas fa-book"></i> Judul Buku</label>
                    <input type="text" name="judul_buku" id="judul_buku" placeholder="Masukkan judul buku..." required>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label for="pengarang"><i class="fas fa-pen-nib"></i> Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" placeholder="Nama pengarang..." required>
                    </div>
                    <div class="input-group">
                        <label for="penerbit"><i class="fas fa-building"></i> Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" placeholder="Nama penerbit..." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label for="stok"><i class="fas fa-boxes"></i> Stok</label>
                        <input type="number" name="stok" min="1" id="stok" placeholder="0" required>
                    </div>
                    <div class="input-group">
                        <label for="kategori"><i class="fas fa-tags"></i> Kategori</label>
                        <select name="kategori" id="kategori">
                            <option value="Sains">Sains</option>
                            <option value="Novel">Novel</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Fiksi">Fiksi</option>
                        </select>
                    </div>
                </div>

                <div class="input-group">
                    <label for="sinopsis"><i class="fas fa-align-left"></i> Sinopsis</label>
                    <textarea name="sinopsis" id="sinopsis" rows="4" placeholder="Ringkasan isi buku..."></textarea>
                </div>

                <button type="submit" name="add" value="kirim" class="btn-submit">
                    <i class="fas fa-save"></i> Simpan Koleksi
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>