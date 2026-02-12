<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tips Karir - Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            --shadow-soft: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
            --shadow-glow: 0 20px 25px -5px rgb(59 130 246 / 0.15), 0 8px 10px -6px rgb(59 130 246 / 0.1);
            --success-green: #10b981;
            --warning-yellow: #f59e0b;
            --purple: #8b5cf6;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

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

        .nav-links { 
            display: flex; 
            gap: 15px;
            align-items: center;
        }
        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
            position: relative;
        }

        .nav-links a:hover { color: var(--blue-primary); }

        .nav-links a.active {
            color: var(--blue-primary);
            background: var(--blue-light);
            padding: 8px 16px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(37, 99, 235, 0.1);
        }

        .hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #2563eb 100%);
            padding: 80px 20px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none;
            animation: float 6s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37,99,235,0.2) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .hero-content {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 16px;
            letter-spacing: -1px;
        }

        .hero p {
            color: #cbd5e1;
            font-size: 18px;
            margin-bottom: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .content {
            max-width: 1100px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }

        .category-card {
            background: var(--white);
            border-radius: 20px;
            padding: 32px;
            box-shadow: var(--shadow-soft);
            border: 1px solid #f1f5f9;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .category-card:hover::before {
            transform: scaleX(1);
        }

        .category-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .category-card h3 {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 12px;
        }

        .category-card p {
            color: var(--text-muted);
            margin: 0 0 16px;
            font-size: 14px;
            line-height: 1.6;
        }

        .category-count {
            font-size: 12px;
            color: var(--blue-primary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 32px;
        }

        .tip-card {
            background: var(--white);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .tip-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .tip-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        }

        .tip-card:hover::before {
            transform: scaleX(1);
        }

        .tip-image {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
        }

        .tip-content {
            padding: 32px;
        }

        .tip-category {
            display: inline-block;
            padding: 6px 12px;
            background: var(--blue-light);
            color: var(--blue-primary);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .tip-card h3 {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 12px;
            line-height: 1.3;
        }

        .tip-card p {
            color: var(--text-muted);
            margin: 0 0 20px;
            font-size: 14px;
            line-height: 1.6;
        }

        .tip-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #f8fafc;
        }

        .tip-meta {
            display: flex;
            align-items: center;
            gap: 16px;
            color: var(--text-muted);
            font-size: 12px;
        }

        .tip-meta span {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .btn-read {
            background: var(--blue-primary);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 12px;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-read:hover {
            background: var(--blue-dark);
            transform: translateY(-1px);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 16px;
            letter-spacing: -1px;
        }

        .section-subtitle {
            color: var(--text-muted);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .nav-auth {
            display: flex;
            align-items: center;
            gap: 16px;
        }

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

        @media (max-width: 768px) {
            .navbar { padding: 0 20px; }
            .hero h1 { font-size: 32px; }
            .categories { grid-template-columns: 1fr; }
            .tips-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <i class='bx bx-bulb'></i>
            Penmedia<span>Loker</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('user.dashboard') }}">Lowongan</a>
            <a href="{{ route('user.companies') }}">Perusahaan</a>
            <a href="{{ route('user.applications') }}">Lamaran Saya</a>
            <a href="{{ route('user.career-tips') }}" class="active">Tips Karir</a>
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
                                <i class='bx bx-user dropdown-icon'></i>
                                Profil Saya
                            </a>
                            
                            <a href="#" class="dropdown-item">
                                <i class='bx bx-heart dropdown-icon'></i>
                                Lowongan Favorit
                            </a>
                            
                            <a href="{{ route('user.applications') }}" class="dropdown-item">
                                <i class='bx bx-file-blank dropdown-icon'></i>
                                Lamaran Saya
                            </a>
                            
                            <a href="#" class="dropdown-item">
                                <i class='bx bx-cog dropdown-icon'></i>
                                Pengaturan
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="dropdown-item danger">
                                    <i class='bx bx-log-out dropdown-icon'></i>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1>Tips & Panduan Karir</h1>
            <p>Tingkatkan kemampuan dan wawasan karir Anda dengan panduan praktis dari para ahli</p>
        </div>
    </header>

    <main class="content">
        <div class="categories">
            <div class="category-card" onclick="filterTips('interview')">
                <div class="category-icon" style="background: #fef3c7; color: #92400e;">
                    <i class='bx bx-user-voice'></i>
                </div>
                <h3>Tips Interview</h3>
                <p>Persiapan interview, pertanyaan umum, dan cara memberikan kesan terbaik</p>
                <span class="category-count">12 Tips</span>
            </div>

            <div class="category-card" onclick="filterTips('cv')">
                <div class="category-icon" style="background: #dbeafe; color: #1e40af;">
                    <i class='bx bx-file-blank'></i>
                </div>
                <h3>CV & Portfolio</h3>
                <p>Cara membuat CV menarik dan portfolio yang memukau recruiter</p>
                <span class="category-count">8 Tips</span>
            </div>

            <div class="category-card" onclick="filterTips('skill')">
                <div class="category-icon" style="background: #d1fae5; color: #065f46;">
                    <i class='bx bx-trending-up'></i>
                </div>
                <h3>Pengembangan Skill</h3>
                <p>Skill yang dibutuhkan industri dan cara mengembangkannya</p>
                <span class="category-count">15 Tips</span>
            </div>

            <div class="category-card" onclick="filterTips('career')">
                <div class="category-icon" style="background: #fce7f3; color: #be185d;">
                    <i class='bx bx-line-chart'></i>
                </div>
                <h3>Perencanaan Karir</h3>
                <p>Strategi membangun karir jangka panjang yang sukses</p>
                <span class="category-count">10 Tips</span>
            </div>
        </div>

        <div class="section-header">
            <h2 class="section-title">Tips Terbaru</h2>
            <p class="section-subtitle">Artikel dan panduan terkini untuk membantu perjalanan karir Anda</p>
        </div>

        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-image">
                    <i class='bx bx-user-voice'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">Interview</span>
                    <h3>10 Pertanyaan Interview yang Paling Sering Ditanyakan</h3>
                    <p>Pelajari pertanyaan interview yang paling umum dan cara menjawabnya dengan percaya diri untuk meningkatkan peluang diterima kerja.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 5 min read</span>
                            <span><i class='bx bx-show'></i> 2.1k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>

            <div class="tip-card">
                <div class="tip-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <i class='bx bx-file-blank'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">CV & Portfolio</span>
                    <h3>Cara Membuat CV yang Menarik Perhatian Recruiter</h3>
                    <p>Template dan tips praktis untuk membuat CV yang stand out dari ribuan pelamar lainnya dan lolos screening awal.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 7 min read</span>
                            <span><i class='bx bx-show'></i> 3.5k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>

            <div class="tip-card">
                <div class="tip-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <i class='bx bx-trending-up'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">Skill Development</span>
                    <h3>Skill Digital yang Wajib Dikuasai di 2024</h3>
                    <p>Daftar lengkap skill digital yang paling dicari perusahaan dan platform terbaik untuk mempelajarinya secara gratis.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 10 min read</span>
                            <span><i class='bx bx-show'></i> 4.2k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>

            <div class="tip-card">
                <div class="tip-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    <i class='bx bx-line-chart'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">Career Planning</span>
                    <h3>Strategi Negosiasi Gaji untuk Fresh Graduate</h3>
                    <p>Tips dan trik negosiasi gaji yang efektif untuk fresh graduate agar mendapatkan kompensasi yang sesuai dengan kemampuan.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 8 min read</span>
                            <span><i class='bx bx-show'></i> 1.8k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>

            <div class="tip-card">
                <div class="tip-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                    <i class='bx bx-network-chart'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">Networking</span>
                    <h3>Membangun Network Profesional yang Kuat</h3>
                    <p>Cara efektif membangun dan memelihara network profesional yang dapat membantu perkembangan karir jangka panjang.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 6 min read</span>
                            <span><i class='bx bx-show'></i> 2.7k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>

            <div class="tip-card">
                <div class="tip-image" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                    <i class='bx bx-brain'></i>
                </div>
                <div class="tip-content">
                    <span class="tip-category">Soft Skills</span>
                    <h3>Soft Skills yang Paling Dicari Perusahaan</h3>
                    <p>Identifikasi dan kembangkan soft skills yang paling dihargai oleh perusahaan untuk meningkatkan daya saing di pasar kerja.</p>
                    <div class="tip-footer">
                        <div class="tip-meta">
                            <span><i class='bx bx-time'></i> 9 min read</span>
                            <span><i class='bx bx-show'></i> 3.1k views</span>
                        </div>
                        <a href="#" class="btn-read">Baca</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('active');
        }

        function filterTips(category) {
            // Implementasi filter tips berdasarkan kategori
            console.log('Filter tips by category:', category);
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('profileDropdown');
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
    </script>
</body>
</html>