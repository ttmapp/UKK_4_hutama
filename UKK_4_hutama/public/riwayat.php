<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman | E-Perpus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(135deg, #0e0c1a 0%, #0e0c1a 100%); min-height: 100vh; padding: 40px 20px; color: white; }
        .container { max-width: 800px; margin: 0 auto; }
        
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .btn-back { color: white; text-decoration: none; background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 10px; font-size: 13px; }

        .history-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 20px;
            transition: 0.3s;
        }

        .history-item:hover { background: rgba(255, 255, 255, 0.2); transform: translateX(10px); }

        .icon-circle { width: 50px; height: 50px; background: rgba(85, 239, 196, 0.2); border-radius: 15px; display: flex; justify-content: center; align-items: center; color: #55efc4; font-size: 1.2rem; }
        
        .details { flex: 1; }
        .details h4 { font-size: 1rem; margin-bottom: 3px; }
        .details p { font-size: 0.8rem; color: #dcdde1; }

        .status-tag { font-size: 10px; background: rgba(255,255,255,0.2); padding: 3px 10px; border-radius: 5px; text-transform: uppercase; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-history"></i> Riwayat</h1>
            <a href="?url=dashboard" class="btn-back">Kembali</a>
        </div>

        <div class="history-item">
            <div class="icon-circle"><i class="fas fa-check"></i></div>
            <div class="details">
                <h4>Laskar Pelangi</h4>
                <p>Dikembalikan pada: 05 Jan 2026</p>
            </div>
            <span class="status-tag">Sukses</span>
        </div>

        <div class="history-item">
            <div class="icon-circle" style="color: #ff7675; background: rgba(255,118,117,0.2);"><i class="fas fa-undo"></i></div>
            <div class="details">
                <h4>Matematika Dasar</h4>
                <p>Dikembalikan pada: 28 Des 2025</p>
            </div>
            <span class="status-tag">Terlambat</span>
        </div>

        <div class="history-item">
            <div class="icon-circle"><i class="fas fa-check"></i></div>
            <div class="details">
                <h4>Algoritma Pemrograman</h4>
                <p>Dikembalikan pada: 15 Des 2025</p>
            </div>
            <span class="status-tag">Sukses</span>
        </div>
    </div>
</body>
</html>