<style>
    :root {
    --text-dark: #2d3436;
    --text-light: #636e72;
    --pending-color: #ff9f43;
    --success-color: #2ecc71;
    --danger-color: #e74c3c;
    --card-bg: #ffffff;
}

.main-content {
    padding: 30px;
    max-width: 900px;
    margin: auto;
    font-family: 'Segoe UI', Roboto, sans-serif;
}

.header-section h1 {
    font-size: 24px;
    color: var(--text-dark);
    margin-bottom: 5px;
}

.header-section p {
    color: var(--text-light);
    margin-bottom: 30px;
}

.member-list {
    display: grid;
    gap: 20px;
}

/* Card Styling */
.member-card {
    background: var(--card-bg);
    padding: 20px;
    border-radius: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    border: 1px solid #f0f0f0;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.member-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.member-card.pending {
    border-left: 6px solid var(--pending-color);
}

.member-card.active {
    border-left: 6px solid var(--success-color);
    background-color: rgba(46, 204, 113, 0.02);
}

/* Info & Avatar */
.member-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.avatar-placeholder {
    width: 50px;
    height: 50px;
    background: #dfe6e9;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: var(--text-light);
}

.avatar-placeholder.success {
    background: rgba(46, 204, 113, 0.2);
    color: var(--success-color);
}

.details h4 {
    margin: 0;
    font-size: 16px;
    color: var(--text-dark);
}

.details h4 span {
    font-weight: normal;
    font-size: 14px;
    color: var(--text-light);
}

.details p {
    margin: 4px 0 0;
    font-size: 13px;
    color: var(--text-light);
}

/* Badges & Buttons */
.status-badge {
    background: rgba(46, 204, 113, 0.15);
    color: var(--success-color);
    padding: 2px 10px;
    border-radius: 20px;
    font-weight: 600;
}

.member-actions {
    display: flex;
    gap: 10px;
}

.btn {
    padding: 10px 18px;
    border-radius: 10px;
    border: none;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-approve {
    background: var(--success-color);
    color: white;
}

.btn-approve:hover { background: #27ae60; }

.btn-reject {
    background: #fdf2f2;
    color: var(--danger-color);
}

.btn-reject:hover { background: var(--danger-color); color: white; }

.status-icon {
    color: var(--success-color);
    font-size: 24px;
}
</style>

<div class="main-content">
    <div class="header-section">
        <h1>Verifikasi & Data Anggota</h1>
        <p>Kelola pendaftaran siswa dan status keanggotaan perpustakaan.</p>
    </div>

    <div class="member-list">
        <div class="member-card pending">
            <div class="member-info">
                <div class="avatar-placeholder">AW</div>
                <div class="details">
                    <h4>Andi Wijaya <span>(2209102)</span></h4>
                    <p><i class="far fa-calendar-alt"></i> Mendaftar pada: 19 Jan 2026</p>
                </div>
            </div>
            <div class="member-actions">
                <button class="btn btn-approve"><i class="fas fa-check"></i> Terima</button>
                <button class="btn btn-reject"><i class="fas fa-times"></i> Tolak</button>
            </div>
        </div>

        <div class="member-card active">
            <div class="member-info">
                <div class="avatar-placeholder success">SA</div>
                <div class="details">
                    <h4>Siti Aminah <span>(2209105)</span></h4>
                    <p>Status: <span class="status-badge">Anggota Aktif</span></p>
                </div>
            </div>
            <div class="status-icon">
                <i class="fas fa-check-circle"></i>
            </div>
        </div>
    </div>
</div>