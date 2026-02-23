<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anggota | E-Perpus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Menggunakan style yang sama dengan login, hanya sedikit penyesuaian */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card { background: white; padding: 40px; border-radius: 20px; width: 100%; max-width: 450px; }
        h2 { color: #333; margin-bottom: 20px; text-align: center; }
        input { width: 100%; padding: 12px; margin-bottom: 15px; border: 2px solid #eee; border-radius: 10px; }
        button { width: 100%; padding: 12px; background: #667eea; color: white; border: none; border-radius: 10px; font-weight: 600; cursor: pointer; }
        .link { text-align: center; margin-top: 15px; font-size: 13px; }
        a { color: #667eea; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Form Pendaftaran</h2>
        <form method="post" action="../controllers/c_user.php?join=add">
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
            <input type="text" name="username" placeholder="NISN / Username">
            <input type="password" name="password" placeholder="Buat Password">
            <input type="text" name="status_anggota" value="false" hidden>
            <input type="text" name="role" value="siswa" hidden>
            <button type="submit">DAFTAR SEBAGAI ANGGOTA</button>
        </form>
        <div class="link">Sudah punya akun? <a href="login.php">Masuk</a></div>
    </div>
</body>
</html>
