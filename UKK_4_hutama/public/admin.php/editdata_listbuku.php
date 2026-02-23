<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Stok Buku | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --bg: #f8fafc;
            --text: #1e293b;
            --border: #e2e8f0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }

        .table-container {
            width: 100%;
            max-width: 900px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th {
            background-color: #f1f5f9;
            text-align: left;
            padding: 12px 15px;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--border);
        }

        td {
            padding: 15px;
            border-bottom: 1px solid var(--border);
        }

        /* Styling Input di dalam Tabel */
        input[type="text"], 
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .btn-update {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-update:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }

        .badge-info {
            font-size: 0.75rem;
            color: #64748b;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="table-container">
    <h2><i class="fas fa-edit"></i> Edit Inventaris Buku</h2>
    
    <table>
        <thead>
            <tr>
                <th><i class="fas fa-book"></i> Nama Buku</th>
                <th style="width: 150px;"><i class="fas fa-boxes"></i> Stok</th>
                
                <th style="width: 100px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" value="Filosofi Teras" placeholder="Masukkan nama buku">
                </td>
                <td>
                    <input type="number" value="12" min="0">
                </td>
              
                <td>
                    <button class="btn-update">Simpan</button>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" value="Bumi Manusia" placeholder="Masukkan nama buku">
                </td>
                <td>
                    <input type="number" value="5" min="0">
                </td>
              
                <td>
                    <button class="btn-update">Simpan</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>