
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Perpus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            height: 100vh; display: flex; justify-content: center; align-items: center; 
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%; max-width: 400px; text-align: center;
        }
        h2 { color: #333; margin-bottom: 10px; font-weight: 600; }
        p { color: #777; font-size: 14px; margin-bottom: 30px; }
        .input-group { margin-bottom: 20px; text-align: left; }
        input {
            width: 100%; padding: 12px 15px; border: 2px solid #eee;
            border-radius: 10px; outline: none; transition: 0.3s;
        }
        input:focus { border-color: #764ba2; }
        button {
            width: 100%; padding: 12px; border: none; border-radius: 10px;
            background: #764ba2; color: white; font-weight: 600;
            cursor: pointer; transition: 0.3s; margin-top: 10px;
        }
        button:hover { background: #5a368a; transform: translateY(-2px); }
        .footer-link { margin-top: 20px; font-size: 13px; }
        .footer-link a { color: #764ba2; text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Selamat Datang</h2>
        <p>Silahkan login ke akun E-Perpus Anda</p>
        <form action="?url=dashboard" method="POST">
            <div class="input-group">
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <div class="footer-link">
            Belum jadi anggota? <a href="register.php">Daftar Sekarang</a>
        </div>
    </div>
</body>
</html>