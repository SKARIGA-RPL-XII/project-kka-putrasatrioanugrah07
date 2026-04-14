<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Profil Perusahaan - Penmedia Loker</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            --blue-primary: #2563eb;
            --blue-dark: #1e3a8a;
            --blue-light: #eff6ff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --white: #ffffff;
            --bg-body: #f8fafc;
            --success-green: #10b981;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container { 
            max-width: 650px; 
            width: 100%;
            padding: 0 20px; 
        }

        .card { 
            background: var(--white); 
            border-radius: 24px; 
            padding: 48px; 
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            border: 1px solid #f1f5f9;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }

        .header-icon i {
            font-size: 36px;
            color: white;
        }

        .header h1 {
            font-size: 32px;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 12px;
            letter-spacing: -1px;
        }

        .header p {
            color: var(--text-muted);
            font-size: 16px;
            font-weight: 500;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .form-group { 
            margin-bottom: 24px; 
        }
        
        .form-label { 
            display: block; 
            font-weight: 700; 
            color: var(--text-main); 
            margin-bottom: 12px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-label i {
            color: var(--blue-primary);
            font-size: 16px;
        }
        
        .form-control { 
            width: 100%; 
            padding: 18px 24px; 
            border: 2px solid #e5e7eb; 
            border-radius: 16px; 
            font-size: 16px;
            font-weight: 500;
            background: var(--white);
            color: var(--text-main);
            transition: all 0.3s ease;
            font-family: inherit;
        }
        
        .form-control:focus { 
            outline: none; 
            border-color: var(--blue-primary);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            transform: translateY(-2px);
        }

        .btn { 
            padding: 20px 40px; 
            border-radius: 16px; 
            font-weight: 700; 
            cursor: pointer; 
            transition: all 0.3s ease;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            border: none;
            font-family: inherit;
            width: 100%;
            justify-content: center;
            position: relative;
        }
        
        .btn-primary { 
            background: var(--primary-gradient); 
            color: var(--white);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }
        
        .btn-primary:hover { 
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.4);
        }

        .success-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            backdrop-filter: blur(5px);
        }

        .success-modal {
            background: white;
            padding: 48px;
            border-radius: 24px;
            text-align: center;
            max-width: 400px;
            width: 90%;
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .success-overlay.show .success-modal {
            transform: scale(1);
            opacity: 1;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--success-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            animation: successPulse 0.6s ease-out;
        }

        .success-icon i {
            font-size: 36px;
            color: white;
        }

        @keyframes successPulse {
            0% { transform: scale(0); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .success-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 12px;
        }

        .success-message {
            color: var(--text-muted);
            font-size: 16px;
            margin-bottom: 24px;
        }

        .loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .loading .btn-text {
            opacity: 0;
        }

        .loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 768px) {
            .container { padding: 0 16px; }
            .card { padding: 32px 24px; }
            .form-grid { grid-template-columns: 1fr; }
            .header h1 { font-size: 28px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="header-icon">
                    <i class='bx bxs-buildings'></i>
                </div>
                <h1>Lengkapi Profil Perusahaan</h1>
                <p>Bantu kami memberikan layanan terbaik dengan melengkapi informasi perusahaan Anda</p>
            </div>
            
            <form method="POST" action="{{ route('company.complete.profile') }}" id="profileForm">
                @csrf
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-map'></i>
                            Alamat Perusahaan
                        </label>
                        <textarea name="address" rows="3" class="form-control" placeholder="Jl. Contoh No. 123, Jakarta Selatan" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-category'></i>
                            Jenis Perusahaan
                        </label>
                        <select name="company_type" class="form-control" required>
                            <option value="">Pilih Jenis Perusahaan</option>
                            <option value="startup">🚀 Startup</option>
                            <option value="korporat">🏢 Korporat</option>
                            <option value="umkm">🏪 UMKM</option>
                            <option value="multinational">🌍 Multinational</option>
                            <option value="government">🏛️ Pemerintah</option>
                            <option value="ngo">🤝 NGO</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-graduation'></i>
                            Jurusan yang Dibutuhkan
                        </label>
                        <input type="text" name="required_majors" class="form-control" placeholder="Teknik Informatika, Sistem Informasi, Desain Grafis" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-group'></i>
                            Jumlah Karyawan Saat Ini
                        </label>
                        <select name="employee_count" class="form-control" required>
                            <option value="">Pilih Jumlah Karyawan</option>
                            <option value="1-10">👥 1-10 Karyawan</option>
                            <option value="11-50">👥 11-50 Karyawan</option>
                            <option value="51-200">👥 51-200 Karyawan</option>
                            <option value="201-500">👥 201-500 Karyawan</option>
                            <option value="500+">👥 500+ Karyawan</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-phone'></i>
                            Nomor Telepon
                        </label>
                        <input type="tel" name="phone" class="form-control" placeholder="021-12345678" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class='bx bxs-globe'></i>
                            Website Perusahaan (Opsional)
                        </label>
                        <input type="url" name="website" class="form-control" placeholder="https://perusahaan.com (opsional)">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">
                        <i class='bx bxs-info-circle'></i>
                        Deskripsi Perusahaan
                    </label>
                    <textarea name="description" rows="4" class="form-control" placeholder="Ceritakan tentang perusahaan Anda, visi, misi, dan budaya kerja..." required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span class="btn-text">
                        <i class='bx bx-check-circle'></i>
                        Simpan & Lanjutkan ke Dashboard
                    </span>
                </button>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="success-overlay" id="successOverlay">
        <div class="success-modal">
            <div class="success-icon">
                <i class='bx bx-check'></i>
            </div>
            <h3 class="success-title">Selamat! Perusahaan Berhasil Terdaftar</h3>
            <p class="success-message">Profil perusahaan Anda telah berhasil dilengkapi. Sekarang Anda dapat mulai memposting lowongan kerja.</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('profileForm');
        const submitBtn = document.getElementById('submitBtn');
        const successOverlay = document.getElementById('successOverlay');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading
            submitBtn.classList.add('loading');
            
            // Show success after 1 second
            setTimeout(() => {
                successOverlay.style.display = 'flex';
                setTimeout(() => {
                    successOverlay.classList.add('show');
                }, 10);
                
                // Submit form after 2.5 seconds
                setTimeout(() => {
                    form.submit();
                }, 2500);
            }, 1000);
        });
    </script>
</body>
</html>