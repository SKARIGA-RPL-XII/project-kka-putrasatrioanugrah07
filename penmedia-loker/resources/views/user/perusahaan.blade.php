<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penmedia Loker | Direktori Perusahaan Rekrutmen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            --dark-gradient: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            --blue-primary: #2563eb;
            --blue-dark: #1e3a8a;
            --blue-light: #eff6ff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --white: #ffffff;
            --bg-body: #f8fafc;
            --shadow-glow: 0 20px 25px -5px rgb(59 130 246 / 0.15), 0 8px 10px -6px rgb(59 130 246 / 0.1);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            overflow-x: hidden;
        }

        /* --- NAVBAR (Sama Persis) --- */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 8%;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

         .logo {
            font-size: 22px;
            font-weight: 800;
            color: var(--blue-dark);
            text-decoration: none;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .logo span { color: var(--blue-primary); }

        .nav-links { display: flex; gap: 32px; }
        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
            position: relative;
        }
        .nav-links a:hover { color: var(--blue-primary); }
    /* Efek Active untuk Menu yang dipilih */
       
           .nav-links a.active {
            color: var(--blue-primary);
            background: var(--blue-light);
            padding: 8px 16px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(37, 99, 235, 0.1);
        }

        /* Update sedikit navbar links agar padding simetris saat ada background */
        .nav-links { 
            display: flex; 
            gap: 15px; /* dikurangi sedikit gap-nya agar muat dengan padding active */
            align-items: center;
        }    
        .btn {
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .btn-outline { border: 1px solid #cbd5e1; color: var(--text-main); background: transparent; }
        /* --- PROFILE DROPDOWN --- */
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }

        .profile-trigger {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 16px;
            background: rgba(37, 99, 235, 0.05);
            border: 2px solid rgba(37, 99, 235, 0.1);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--text-main);
        }

        .profile-trigger:hover {
            background: rgba(37, 99, 235, 0.1);
            border-color: rgba(37, 99, 235, 0.2);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }

        .profile-avatar {
            width: 36px;
            height: 36px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .profile-name {
            font-size: 14px;
            font-weight: 700;
            color: var(--text-main);
            line-height: 1.2;
        }

        .profile-role {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dropdown-arrow {
            width: 16px;
            height: 16px;
            color: var(--text-muted);
            transition: transform 0.3s ease;
        }

        .profile-dropdown.active .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            min-width: 280px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1000;
            overflow: hidden;
        }

        .profile-dropdown.active .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-header {
            padding: 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-bottom: 1px solid #e2e8f0;
        }

        .dropdown-user {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dropdown-avatar {
            width: 48px;
            height: 48px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .dropdown-user-info h4 {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-main);
            margin: 0 0 4px 0;
        }

        .dropdown-user-info p {
            font-size: 13px;
            color: var(--text-muted);
            margin: 0;
            font-weight: 500;
        }

        .dropdown-body {
            padding: 8px 0;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--text-main);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background: rgba(37, 99, 235, 0.05);
            color: var(--blue-primary);
        }

        .dropdown-item.danger {
            color: #ef4444;
        }

        .dropdown-item.danger:hover {
            background: rgba(239, 68, 68, 0.05);
            color: #dc2626;
        }

        .dropdown-icon {
            width: 18px;
            height: 18px;
            opacity: 0.7;
        }

        .dropdown-divider {
            height: 1px;
            background: #f1f5f9;
            margin: 8px 0;
        }

        /* --- HERO & SEARCH (Posisi Sama Persis) --- */
        .hero {
            background: var(--dark-gradient);
            padding: 100px 20px 160px;
            text-align: center;
            color: var(--white);
            position: relative;
        }

        .hero h1 { font-size: 48px; font-weight: 800; margin-bottom: 20px; letter-spacing: -1.5px; }
        .hero p { color: #cbd5e1; font-size: 18px; max-width: 600px; margin: 0 auto 40px; }

        .search-container {
            max-width: 1000px;
            margin: 0 auto;
            background: var(--white);
            padding: 10px;
            border-radius: 100px;
            display: flex;
            box-shadow: var(--shadow-glow);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -40px;
            width: 90%;
            z-index: 20;
            align-items: center;
        }

        .search-field { flex: 1; padding: 10px 25px; text-align: left; }
        .search-field label { display: block; font-size: 11px; font-weight: 800; color: var(--blue-primary); text-transform: uppercase; margin-bottom: 2px; }
        .search-field input, .search-field select { width: 100%; border: none; outline: none; font-size: 15px; font-weight: 600; color: var(--text-main); background: transparent; font-family: inherit; }
        .search-divider { width: 1px; height: 30px; background: #e2e8f0; }

        .btn-search {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 700;
            cursor: pointer;
        }

        /* --- CONTENT: DAFTAR PERUSAHAAN (Isi Berbeda) --- */
        .content {
            max-width: 1100px;
            margin: 120px auto 80px;
            padding: 0 20px;
        }

        .section-header { margin-bottom: 40px; }
        .section-title { font-size: 28px; font-weight: 800; color: var(--text-main); margin: 0; letter-spacing: -1px; }
        .section-subtitle { color: var(--text-muted); margin-top: 5px; }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        /* --- COMPANY CARD DESIGN --- */
        .card-company {
            background: var(--white);
            border: 1px solid #f1f5f9;
            border-radius: 24px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
        }

        .card-company:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            border-color: var(--blue-light);
        }

        .company-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .company-logo {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 20px;
        }

        .company-name h3 { margin: 0; font-size: 18px; color: var(--text-main); }
        .company-name p { margin: 0; font-size: 13px; color: var(--text-muted); }

        .job-count {
            display: inline-block;
            background: #f0fdf4;
            color: #16a34a;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .company-desc {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-action {
            border-top: 1px solid #f8fafc;
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-detail {
            color: var(--blue-primary);
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .search-container { flex-direction: column; bottom: -160px; border-radius: 20px; padding: 20px; }
            .content { margin-top: 200px; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke="#1e3a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Penmedia<span>Loker</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('user.dashboard') }}">Lowongan</a>
            <a href="{{ route('user.perusahaan') }}" class="active">Perusahaan</a>
            <a href="{{ route('user.tipskarir') }}">Tips Karir</a>
        </div>
        <div class="nav-auth">
            @auth
                <div class="profile-dropdown" id="profileDropdown">
                    <div class="profile-trigger" onclick="toggleDropdown()">
                        <div class="profile-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="profile-info">
                            <div class="profile-name">{{ strlen(Auth::user()->name) > 12 ? substr(Auth::user()->name, 0, 12) . '...' : Auth::user()->name }}</div>
                            <div class="profile-role">{{ Auth::user()->status_pendidikan ?? 'Member' }}</div>
                        </div>
                        <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    
                    <div class="dropdown-menu">
                        <div class="dropdown-header">
                            <div class="dropdown-user">
                                <div class="dropdown-avatar">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                                <div class="dropdown-user-info">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown-body">
                            <a href="{{ route('user.profile') }}" class="dropdown-item">
                                <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Profil Saya
                            </a>
                            
                            <a href="#" class="dropdown-item">
                                <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Lowongan Favorit
                            </a>
                            
                            <a href="#" class="dropdown-item">
                                <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Lamaran Saya
                            </a>
                            
                            <a href="#" class="dropdown-item">
                                <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Pengaturan
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="dropdown-item danger">
                                    <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline" style="margin-right: 10px;">Registrasi/Masuk</a>
                <a href="{{ route('registercompany') }}" class="btn btn-primary">Untuk Perusahaan</a>
            @endauth
        </div>
    </nav>

    <header class="hero">
        <h1>Mitra Karir Terpercaya.</h1>
        <p>Bekerja di perusahaan dengan budaya kerja terbaik dan lingkungan yang suportif bagi pertumbuhan karir Anda.</p>
        
        <div class="search-container">
            <div class="search-field">
                <label>Nama Perusahaan</label>
                <input type="text" placeholder="Misal: Gojek, Shopee, Penmedia...">
            </div>
            <div class="search-divider"></div>
            <div class="search-field">
                <label>Industri</label>
                <input type="text" placeholder="Teknologi, Finansial, Kreatif...">
            </div>
            <div class="search-divider"></div>
            <div class="search-field">
                <label>Ukuran</label>
                <select>
                    <option>Semua Ukuran</option>
                    <option>Startup</option>
                    <option>Menengah</option>
                    <option>Korporat</option>
                </select>
            </div>
            <button class="btn-search">Cari</button>
        </div>
    </header>

    <main class="content">
        <div class="section-header">
            <h2 class="section-title">Perusahaan yang Sedang Merekrut</h2>
            <div class="section-subtitle">Jelajahi profil perusahaan yang aktif mencari talenta baru.</div>
        </div>

        <div class="grid">
            <div class="card-company">
                <div class="company-header">
                    <div class="company-logo" style="background: #eff6ff; color: #2563eb;">PD</div>
                    <div class="company-name">
                        <h3>Penmedia Digital</h3>
                        <p>Malang • Digital Agency</p>
                    </div>
                </div>
                <div class="job-count">🔥 5 Lowongan Aktif</div>
                <p class="company-desc">Fokus pada pengembangan ekosistem digital dan solusi kreatif untuk UMKM di Indonesia.</p>
                <div class="card-action">
                    <span style="font-size: 12px; color: #94a3b8;">Rating: ⭐ 4.9</span>
                    <a href="#" class="btn-detail">Lihat Detail &rarr;</a>
                </div>
            </div>

            <div class="card-company">
                <div class="company-header">
                    <div class="company-logo" style="background: #fff1f2; color: #e11d48;">TC</div>
                    <div class="company-name">
                        <h3>TechCorp Indo</h3>
                        <p>Jakarta • Software House</p>
                    </div>
                </div>
                <div class="job-count">🔥 12 Lowongan Aktif</div>
                <p class="company-desc">Penyedia jasa pembuatan aplikasi enterprise berskala internasional dengan teknologi terbaru.</p>
                <div class="card-action">
                    <span style="font-size: 12px; color: #94a3b8;">Rating: ⭐ 4.7</span>
                    <a href="#" class="btn-detail">Lihat Detail &rarr;</a>
                </div>
            </div>

            <div class="card-company">
                <div class="company-header">
                    <div class="company-logo" style="background: #f0fdf4; color: #16a34a;">SK</div>
                    <div class="company-name">
                        <h3>Studio Kreatif</h3>
                        <p>Surabaya • Media</p>
                    </div>
                </div>
                <div class="job-count">🔥 3 Lowongan Aktif</div>
                <p class="company-desc">Rumah produksi konten visual dan manajemen media sosial untuk brand-brand gaya hidup.</p>
                <div class="card-action">
                    <span style="font-size: 12px; color: #94a3b8;">Rating: ⭐ 4.5</span>
                    <a href="#" class="btn-detail">Lihat Detail &rarr;</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('active');
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('profileDropdown');
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('profileDropdown').classList.remove('active');
            }
        });
    </script>
</body>
</html>