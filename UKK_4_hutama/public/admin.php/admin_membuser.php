<?php 
    include_once "../../controllers/c_user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Anggota | Admin E-Perpus</title>
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* CSS Tambahan khusus Anggota */
        .member-section { margin-bottom: 50px; }
        .section-title { 
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 25px; border-left: 5px solid var(--accent-color); padding-left: 15px;
        }
        
        /* Grid untuk Verifikasi */
        .verify-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px; }
        .verify-card {
            background: rgba(255, 255, 255, 0.05); border: 1px solid var(--glass-border);
            border-radius: 20px; padding: 20px; display: flex; justify-content: space-between; align-items: center;
            transition: 0.3s;
        }
        .verify-card:hover { border-color: var(--accent-color); background: rgba(255,255,255,0.08); }
        
        /* Avatar & Text */
        .user-meta { display: flex; align-items: center; gap: 12px; }
        .avatar { 
            width: 45px; height: 45px; background: var(--accent-color); color: #0f172a;
            border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;
        }
        
        /* Table Styles */
        .status-pill { padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .status-active { background: rgba(29, 209, 161, 0.2); color: #1dd1a1; }
        .status-pending { background: rgba(255, 159, 67, 0.2); color: #ff9f43; }
    </style>
</head>
<body class="admin-body">

<div class="sidebar">
    <div class="sidebar-header">
        <h1> ADMIN</h1>
    </div>
    <a href="?url=admin/dashboard" class="nav-item"><i class="fas fa-chart-pie"></i> Dashboard</a>
    <a href="?url=admin/kelola_buku" class="nav-item"><i class="fas fa-book"></i> Kelola Buku</a>
    <a href="?url=admin/kelola_anggota" class="nav-item active"><i class="fas fa-user-shield"></i> Kelola Anggota</a>
    <a href="?url=auth/login" class="nav-item logout"><i class="fas fa-power-off"></i> Logout</a>
</div>

<div class="main-content">
    
    <div class="member-section">
        <div class="section-title">
            <h1>Verifikasi Pendaftaran</h1>
            <span class="badge" style="background: #ff9f43; color: #000;">Menunggu Persetujuan</span>
        </div>
        
        <div class="verify-grid">
            <?php
            foreach($data as $hasil){
 
                 ?>
            <div class="verify-card"> 
                <div class="user-meta">
                    <div class="avatar"></div>
                    <div>
                        <h4 style="margin:0"><?= $hasil->username?></h4>
                        <small style="color:var(--text-muted)">NIS</small>
                    </div>
                </div>
                <div class="actions" style="display:flex; gap:10px;">
                    <form action="?url=admin/approve_member" method="POST">
                        <input type="hidden" name="id_user" value="1">
                        <button type="submit" class="btn-add" style="padding: 8px 15px; font-size: 12px;">Terima</button>
                    </form>
                    <button class="btn-reject" style="background:rgba(231, 76, 60, 0.2); color:#e74c3c; border:none; border-radius:10px; padding:8px 12px; cursor:pointer;"><i class="fas fa-times"></i></button>
                </div>
            </div>
                            <?php 
            }
                ?>
        </div>
    </div>

    <div class="member-section">
        <div class="section-title">
            <h1>Daftar Anggota Aktif</h1>
            <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari anggota...">
            </div>
        </div>

        <div class="data-card">
            <table>
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Status Akun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2209105</td>
                        <td>Siti Aminah</td>
                        <td>siti@sekolah.sch.id</td>
                        <td><span class="status-pill status-active">Aktif & Terverifikasi</span></td>
                        <td>
                            <button class="btn-edit" style="color: var(--accent-color); background:none; border:none;"><i class="fas fa-id-card"></i></button>
                            <button class="btn-delete" style="color: #e74c3c; background:none; border:none; margin-left:10px;"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>