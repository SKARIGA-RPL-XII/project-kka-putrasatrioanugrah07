<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penmedia Loker | Portal Karir Profesional</title>
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
            
            --shadow-soft: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
            --shadow-glow: 0 20px 25px -5px rgb(59 130 246 / 0.15), 0 8px 10px -6px rgb(59 130 246 / 0.1);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            /* PERBAIKAN 1: Mencegah scroll horizontal karena dekorasi hero */
            overflow-x: hidden; 
        }

        /* --- NAVIGATION --- */
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
        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s;
            position: relative;
        }

        .nav-links a:hover { color: var(--blue-primary); }

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

        .btn-outline { 
            border: 1px solid #cbd5e1; 
            color: var(--text-main); 
            background: transparent;
        }
        .btn-outline:hover {
            border-color: var(--blue-primary);
            color: var(--blue-primary);
        }

        .btn-primary { 
            background: var(--primary-gradient); 
            color: var(--white); 
            border: none;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }
        .btn-primary:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 8px 16px rgba(37, 99, 235, 0.4);
        }

        /* --- HERO SECTION --- */
        .hero {
            background: linear-gradient(135deg, rgba(51, 65, 85, 0.8) 0%, rgba(71, 85, 105, 0.75) 50%, rgba(100, 116, 139, 0.7) 100%),
                        url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1600') center/cover;
            padding: 120px 20px 180px;
            text-align: center;
            color: var(--white);
            position: relative;
            box-shadow: 0 10px 40px rgba(51, 65, 85, 0.4);
        }

        /* Elemen Dekorasi Background */
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none; /* Agar tidak mengganggu klik */
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -20%;
            right: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(37,99,235,0.3) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero h1 { 
            font-size: 42px; 
            font-weight: 900; 
            margin-bottom: 20px; 
            letter-spacing: -1.5px;
            position: relative;
            z-index: 10;
            text-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
        
        .hero p { 
            color: #cbd5e1; 
            font-size: 16px; 
            max-width: 600px; 
            margin: 0 auto 32px; 
            position: relative;
            z-index: 10;
            font-weight: 400;
        }

        /* --- SEARCH BOX (Floating) --- */
        .search-container {
            max-width: 1000px;
            margin: 0 auto;
            background: var(--white);
            padding: 12px;
            border-radius: 100px;
            display: flex;
            box-shadow: 0 20px 60px rgba(37, 99, 235, 0.25);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -40px;
            width: 90%;
            gap: 0;
            z-index: 20;
            border: 3px solid rgba(37, 99, 235, 0.2);
            align-items: center;
        }

        .search-divider {
            width: 1px;
            height: 30px;
            background: #e2e8f0;
        }

        .search-field {
            flex: 1;
            padding: 10px 25px;
            text-align: left;
            position: relative;
        }

        .search-field label {
            display: block;
            font-size: 11px;
            font-weight: 800;
            color: var(--blue-primary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .search-field input, .search-field select {
            width: 100%;
            border: none;
            outline: none;
            font-size: 15px;
            font-weight: 600;
            color: var(--text-main);
            background: transparent;
            font-family: inherit;
        }

        .btn-search {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: white;
            border: none;
            padding: 18px 48px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-right: 5px;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-search:hover {
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 12px 32px rgba(37, 99, 235, 0.5);
        }

        /* --- CONTENT SECTION --- */
        .content {
            max-width: 1100px;
            margin: 120px auto 80px;
            padding: 0 20px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 40px;
        }

        .section-title { 
            font-size: 28px; 
            font-weight: 900; 
            color: var(--text-main);
            margin: 0;
            letter-spacing: -1px;
        }
        .section-subtitle {
            color: var(--text-muted);
            margin-top: 5px;
        }

        .link-all {
            color: var(--blue-primary);
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 5px;
        }

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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        /* --- CARDS --- */
        .card {
            background-color: #fafbfc;
            background-image: 
                radial-gradient(circle, rgba(37, 99, 235, 0.15) 2px, transparent 2px),
                radial-gradient(circle, rgba(59, 130, 246, 0.12) 1.5px, transparent 1.5px);
            background-size: 25px 25px, 15px 15px;
            background-position: 0 0, 12px 12px;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 28px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--primary-gradient);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(37, 99, 235, 0.12);
            border-color: #cbd5e1;
            background-color: #fafbfc;
        }

        .card:hover::before {
            transform: scaleY(1);
        }

        .card-header { display: flex; align-items: start; margin-bottom: 24px; justify-content: space-between; }
        
        .company-info { display: flex; align-items: center; gap: 16px; flex: 1; }

        .icon { 
            width: 52px; height: 52px; 
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; color: white; 
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
            flex-shrink: 0;
        }

        .card-body h3 { margin: 0 0 6px; font-size: 17px; color: var(--text-main); font-weight: 700; line-height: 1.3; }
        .card-body p { margin: 0; color: var(--text-muted); font-size: 14px; font-weight: 500; }

        .tags {
            display: flex;
            gap: 8px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .badge {
            font-size: 11px;
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .badge-type { background: #f1f5f9; color: #475569; }
        .badge-loc { background: #dbeafe; color: #1e40af; }
        .badge-recommended { background: linear-gradient(135deg, #10b981, #059669); color: white; box-shadow: 0 2px 8px rgba(16, 185, 129, 0.25); }

        .card-footer {
            margin-top: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #f1f5f9;
        }

        .salary { font-weight: 700; color: #0f172a; font-size: 15px; }
        .posted { font-size: 12px; color: #94a3b8; font-weight: 500; }

        @media (max-width: 768px) {
            .navbar { padding: 0 20px; }
            .nav-links { display: none; }
            .search-container { 
                flex-direction: column; 
                border-radius: 20px; 
                bottom: -160px; /* Di mobile dia turun lebih jauh */
                padding: 20px;
                gap: 15px;
                align-items: stretch;
            }
            .search-divider { display: none; }
            .search-field { padding: 0; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; }
            .btn-search { width: 100%; border-radius: 12px; margin: 0; }
            .content { margin-top: 200px; /* Margin top lebih besar agar search box muat */ }
            .hero h1 { font-size: 32px; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke="#1e3a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 12L12 17L22 12" stroke="#1e3a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Penmedia<span>Loker</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('user.dashboard') }}" class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}">Lowongan</a>
            <a href="{{ route('user.companies') }}" class="{{ request()->routeIs('user.companies') ? 'active' : '' }}">Perusahaan</a>
            <a href="{{ route('user.applications') }}" class="{{ request()->routeIs('user.applications') ? 'active' : '' }}">Lamaran Saya</a>
            <a href="{{ route('user.career-tips') }}" class="{{ request()->routeIs('user.career-tips') ? 'active' : '' }}">Tips Karir</a>
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
        <h1>Karir Global, Mulai Lokal.</h1>
        <p>Temukan peluang kerja di perusahaan teknologi & kreatif terverifikasi dengan gaji kompetitif.</p>
        
        <form action="{{ route('user.dashboard') }}" method="GET" class="search-container">
            <div class="search-field">
                <label>Posisi</label>
                <input type="text" name="search" placeholder="UI/UX, Developer, Marketing..." value="{{ request('search') }}">
            </div>
            <div class="search-divider"></div>
            <div class="search-field">
                <label>Lokasi</label>
                <input type="text" name="location" placeholder="Malang, Surabaya, Remote" value="{{ request('location') }}">
            </div>
            <div class="search-divider"></div>
            <div class="search-field">
                <label>Tipe</label>
                <select name="job_type">
                    <option value="">Semua Tipe</option>
                    <option value="full_time" {{ request('job_type') == 'full_time' ? 'selected' : '' }}>Full-time</option>
                    <option value="part_time" {{ request('job_type') == 'part_time' ? 'selected' : '' }}>Part-time</option>
                    <option value="freelance" {{ request('job_type') == 'freelance' ? 'selected' : '' }}>Freelance</option>
                    <option value="internship" {{ request('job_type') == 'internship' ? 'selected' : '' }}>Magang</option>
                </select>
            </div>
            <button type="submit" class="btn-search">Cari Loker</button>
        </form>
    </header>

    <main class="content">
        @if(session('success'))
            <div style="background: #d1fae5; color: #065f46; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #a7f3d0;">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div style="background: #fee2e2; color: #991b1b; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #fca5a5;">
                {{ session('error') }}
            </div>
        @endif
        
        @auth
        @if($recommendedJobs->count() > 0)
        <div class="section-header">
            <div>
                <h2 class="section-title">Rekomendasi Untuk Anda</h2>
                <div class="section-subtitle">Berdasarkan profil {{ Auth::user()->jurusan ? 'jurusan ' . Auth::user()->jurusan : 'Anda' }}</div>
            </div>
        </div>

        <div class="grid" style="margin-bottom: 60px;">
            @foreach($recommendedJobs as $job)
            <div class="card">
                <div class="card-header">
                    <div class="company-info">
                        @if($job->company->company_logo)
                            <img src="{{ asset('storage/' . $job->company->company_logo) }}" style="width: 56px; height: 56px; border-radius: 16px; object-fit: cover; box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);" alt="{{ $job->company->company_name ?? $job->company->name }}">
                        @else
                            <div class="icon">{{ strtoupper(substr($job->company->company_name ?? $job->company->name, 0, 2)) }}</div>
                        @endif
                        <div class="card-body">
                            <h3>{{ $job->title }}</h3>
                            <p>{{ $job->company->company_name ?? $job->company->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <span class="badge badge-loc">📍 {{ $job->location }}</span>
                    <span class="badge badge-type">{{ $job->job_type_display }}</span>
                    @if($job->department)
                    <span class="badge badge-recommended">✨ Rekomendasi</span>
                    @endif
                </div>
                <div class="card-footer">
                    <span class="salary">
                        @php
                            $minSalary = $job->salary_min;
                            $maxSalary = $job->salary_max;
                            
                            // Format salary min
                            if ($minSalary >= 1000000) {
                                $minFormatted = number_format($minSalary / 1000000, 1) . 'jt';
                            } else {
                                $minFormatted = number_format($minSalary / 1000, 0) . 'k';
                            }
                            
                            // Format salary max
                            if ($maxSalary >= 1000000) {
                                $maxFormatted = number_format($maxSalary / 1000000, 1) . 'jt';
                            } else {
                                $maxFormatted = number_format($maxSalary / 1000, 0) . 'k';
                            }
                        @endphp
                        {{ $minFormatted }} - {{ $maxFormatted }}
                    </span>
                    <span class="posted">{{ $job->created_at->diffForHumans() }}</span>
                    <button onclick="openJobModal({{ $job->id }})" style="background: var(--primary-gradient); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-size: 12px; font-weight: 600; cursor: pointer;">Lamar</button>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        @if($favoriteCompanies->count() > 0)
        <div class="section-header">
            <div>
                <h2 class="section-title">Perusahaan Favorit</h2>
                <div class="section-subtitle">Perusahaan yang Anda favoritkan</div>
            </div>
        </div>

        <div class="grid" style="margin-bottom: 60px;">
            @foreach($favoriteCompanies as $company)
            <div class="card">
                <div class="card-header">
                    <div class="company-info">
                        <div class="icon">{{ strtoupper(substr($company->company_name ?? $company->name, 0, 2)) }}</div>
                        <div class="card-body">
                            <h3>{{ $company->company_name ?? $company->name }}</h3>
                            <p>{{ $company->industry ?? 'Teknologi' }}</p>
                        </div>
                    </div>
                    <button onclick="toggleFavorite({{ $company->id }}, this)" style="background: #ef4444; color: white; border: none; padding: 8px; border-radius: 8px; cursor: pointer; font-size: 16px;">❤️</button>
                </div>
                <div class="tags">
                    <span class="badge badge-loc">📍 {{ $company->address ?? 'Indonesia' }}</span>
                    <span class="badge badge-type">{{ $company->jobs_count ?? 0 }} Lowongan</span>
                </div>
                <div class="card-footer">
                    <span class="salary">{{ $company->employee_count ?? '50-100' }} Karyawan</span>
                    <a href="{{ route('user.companies') }}" style="background: var(--primary-gradient); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-size: 12px; font-weight: 600; text-decoration: none;">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        @endauth
        
        <div class="section-header">
            <div>
                <h2 class="section-title">Rekomendasi Terbaru</h2>
                <div class="section-subtitle">Berdasarkan profil yang relevan dengan tren saat ini.</div>
            </div>
            <a href="#" class="link-all">Lihat Semua &rarr;</a>
        </div>

        <div class="grid">
            @forelse($featuredJobs as $job)
            <div class="card">
                <div class="card-header">
                    <div class="company-info">
                        @if($job->company->company_logo)
                            <img src="{{ asset('storage/' . $job->company->company_logo) }}" style="width: 56px; height: 56px; border-radius: 16px; object-fit: cover; box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);" alt="{{ $job->company->company_name ?? $job->company->name }}">
                        @else
                            <div class="icon">{{ strtoupper(substr($job->company->company_name ?? $job->company->name, 0, 2)) }}</div>
                        @endif
                        <div class="card-body">
                            <h3>{{ $job->title }}</h3>
                            <p>{{ $job->company->company_name ?? $job->company->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <span class="badge badge-loc">📍 {{ $job->location }}</span>
                    <span class="badge badge-type">{{ $job->job_type_display }}</span>
                </div>
                <div class="card-footer">
                    <span class="salary">
                        @php
                            $minSalary = $job->salary_min;
                            $maxSalary = $job->salary_max;
                            
                            // Format salary min
                            if ($minSalary >= 1000000) {
                                $minFormatted = number_format($minSalary / 1000000, 1) . 'jt';
                            } else {
                                $minFormatted = number_format($minSalary / 1000, 0) . 'k';
                            }
                            
                            // Format salary max
                            if ($maxSalary >= 1000000) {
                                $maxFormatted = number_format($maxSalary / 1000000, 1) . 'jt';
                            } else {
                                $maxFormatted = number_format($maxSalary / 1000, 0) . 'k';
                            }
                        @endphp
                        {{ $minFormatted }} - {{ $maxFormatted }}
                    </span>
                    <span class="posted">{{ $job->created_at->diffForHumans() }}</span>
                    @auth
                        <button onclick="openJobModal({{ $job->id }})" style="background: var(--primary-gradient); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-size: 12px; font-weight: 600; cursor: pointer;">Lamar</button>
                    @else
                        <button onclick="showLoginModal()" style="background: var(--primary-gradient); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-size: 12px; font-weight: 600; cursor: pointer;">Lamar</button>
                    @endauth
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #64748b;">
                <div style="font-size: 48px; margin-bottom: 16px; opacity: 0.5;">💼</div>
                <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600;">Belum Ada Lowongan</h3>
                <p style="margin: 0; font-size: 14px;">Lowongan kerja akan muncul di sini</p>
            </div>
            @endforelse
        </div>
    </main>

    <!-- Job Application Modal -->
    <div id="jobModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
        <div style="background: white; border-radius: 24px; padding: 48px; max-width: 700px; width: 90%; max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 50px rgba(0,0,0,0.25);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 id="modalTitle" style="font-size: 28px; font-weight: 800; margin: 0; background: linear-gradient(135deg, #1e40af, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Lamar Pekerjaan</h2>
                    <p id="modalSubtitle" style="color: #64748b; margin: 4px 0 0; font-size: 14px;">Lengkapi data lamaran Anda</p>
                </div>
                <button onclick="closeJobModal()" style="background: #f8fafc; border: 1px solid #e2e8f0; width: 40px; height: 40px; border-radius: 50%; font-size: 20px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" onmouseover="this.style.background='#ef4444'; this.style.color='white'; this.style.borderColor='#ef4444'" onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b'; this.style.borderColor='#e2e8f0'">&times;</button>
            </div>
            
            <form id="applicationForm" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Nama Lengkap</label>
                        <input type="text" name="full_name" value="{{ Auth::user()->name ?? '' }}" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Jurusan</label>
                        <input type="text" name="major" value="{{ Auth::user()->jurusan ?? '' }}" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Tahun Lulus</label>
                        <input type="text" name="graduation_year" placeholder="2024" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">No. Telepon</label>
                        <input type="tel" name="phone" placeholder="08123456789" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                </div>
                
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Surat Lamaran</label>
                    <textarea name="cover_letter" rows="4" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s; resize: vertical;" placeholder="Ceritakan mengapa Anda tertarik dengan posisi ini..." required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'"></textarea>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 32px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Upload CV (PDF)</label>
                        <input type="file" name="cv" accept=".pdf" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Portfolio URL (Opsional)</label>
                        <input type="url" name="portfolio_url" placeholder="https://portfolio.com" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                </div>
                
                <div style="display: flex; gap: 16px; justify-content: flex-end;">
                    <button type="button" onclick="closeJobModal()" style="padding: 16px 32px; background: #f8fafc; color: #64748b; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#e2e8f0'" onmouseout="this.style.background='#f8fafc'">Batal</button>
                    <button type="submit" style="padding: 16px 32px; background: linear-gradient(135deg, #1e40af, #2563eb); color: white; border: none; border-radius: 12px; cursor: pointer; font-weight: 700; transition: all 0.3s; box-shadow: 0 4px 12px rgba(37,99,235,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(37,99,235,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(37,99,235,0.3)'">Kirim Lamaran</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Login Required Modal -->
    <div id="loginModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.75); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(8px); animation: fadeIn 0.3s ease;">
        <div style="background: white; border-radius: 24px; padding: 0; max-width: 480px; width: 90%; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.05); overflow: hidden; transform: scale(0.95); animation: modalSlideIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;">
            
            <!-- Header with gradient -->
            <div style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); padding: 32px 32px 24px; text-align: center; position: relative;">
                <button onclick="closeLoginModal()" style="position: absolute; top: 16px; right: 16px; background: rgba(255,255,255,0.2); border: none; width: 32px; height: 32px; border-radius: 50%; color: white; font-size: 18px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">&times;</button>
                
                <div style="width: 72px; height: 72px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <circle cx="12" cy="16" r="1"></circle>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                
                <h2 style="font-size: 24px; font-weight: 800; margin: 0 0 8px; color: white; letter-spacing: -0.5px;">Akses Terbatas</h2>
                <p style="color: rgba(255, 255, 255, 0.9); margin: 0; font-size: 15px; font-weight: 500;">Silakan masuk untuk melanjutkan</p>
            </div>
            
            <!-- Content -->
            <div style="padding: 32px;">
                <div style="text-align: center; margin-bottom: 32px;">
                    <h3 style="font-size: 18px; font-weight: 700; margin: 0 0 12px; color: #0f172a;">Login Diperlukan</h3>
                    <p style="color: #64748b; margin: 0; font-size: 15px; line-height: 1.6;">Untuk melamar pekerjaan, Anda perlu masuk ke akun terlebih dahulu. Bergabunglah dengan ribuan pencari kerja lainnya.</p>
                </div>
                
                <!-- Action buttons -->
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <a href="{{ route('login') }}" style="width: 100%; padding: 16px 24px; background: linear-gradient(135deg, #1e40af, #2563eb); color: white; border: none; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 15px; text-align: center; transition: all 0.3s; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4); display: flex; align-items: center; justify-content: center; gap: 8px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(37, 99, 235, 0.5)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(37, 99, 235, 0.4)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10,17 15,12 10,7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                        Masuk ke Akun
                    </a>
                    
                    <a href="{{ route('register') }}" style="width: 100%; padding: 16px 24px; background: #f8fafc; color: #475569; border: 2px solid #e2e8f0; border-radius: 12px; text-decoration: none; font-weight: 600; font-size: 15px; text-align: center; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;" onmouseover="this.style.background='#f1f5f9'; this.style.borderColor='#cbd5e1'; this.style.color='#334155'" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='#e2e8f0'; this.style.color='#475569'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        Daftar Gratis
                    </a>
                </div>
                
                <!-- Benefits -->
                <div style="margin-top: 24px; padding-top: 24px; border-top: 1px solid #f1f5f9;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <div style="width: 6px; height: 6px; background: #10b981; border-radius: 50%;"></div>
                        <span style="color: #64748b; font-size: 14px;">Akses ke ribuan lowongan kerja</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <div style="width: 6px; height: 6px; background: #10b981; border-radius: 50%;"></div>
                        <span style="color: #64748b; font-size: 14px;">Notifikasi lowongan sesuai profil</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 6px; height: 6px; background: #10b981; border-radius: 50%;"></div>
                        <span style="color: #64748b; font-size: 14px;">Lacak status lamaran Anda</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes modalSlideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('active');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('profileDropdown');
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });

        // Close dropdown when pressing Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('profileDropdown').classList.remove('active');
                closeJobModal();
                closeLoginModal();
            }
        });

        function openJobModal(jobId) {
            // Fetch job details and set form action
            fetch(`/jobs/${jobId}`)
                .then(response => response.json())
                .then(job => {
                    const company = job.company;
                    
                    // Update modal dengan info perusahaan
                    const modalContent = document.querySelector('#jobModal > div');
                    
                    // Tambahkan company profile section
                    let companyProfileHTML = '';
                    if (company.company_background || company.company_logo || company.company_description) {
                        companyProfileHTML = `
                            <div style="margin: -48px -48px 32px; position: relative;">
                                ${company.company_background ? `
                                    <div style="height: 180px; background: url('/storage/${company.company_background}') center/cover; border-radius: 24px 24px 0 0;"></div>
                                ` : `
                                    <div style="height: 180px; background: linear-gradient(135deg, #1e40af, #3b82f6); border-radius: 24px 24px 0 0;"></div>
                                `}
                                <div style="padding: 0 48px;">
                                    <div style="margin-top: -40px; display: flex; align-items: end; gap: 20px; margin-bottom: 20px;">
                                        ${company.company_logo ? `
                                            <img src="/storage/${company.company_logo}" style="width: 100px; height: 100px; border-radius: 20px; border: 4px solid white; box-shadow: 0 8px 24px rgba(0,0,0,0.15); object-fit: cover; background: white;">
                                        ` : `
                                            <div style="width: 100px; height: 100px; border-radius: 20px; border: 4px solid white; box-shadow: 0 8px 24px rgba(0,0,0,0.15); background: linear-gradient(135deg, #2563eb, #3b82f6); display: flex; align-items: center; justify-content: center; color: white; font-size: 32px; font-weight: 800;">
                                                ${(company.company_name || company.name).substring(0, 2).toUpperCase()}
                                            </div>
                                        `}
                                        <div style="flex: 1; padding-bottom: 8px;">
                                            <h3 style="font-size: 24px; font-weight: 800; margin: 0 0 4px; color: #0f172a;">${company.company_name || company.name}</h3>
                                            <p style="color: #64748b; margin: 0; font-size: 14px;">${company.company_address || company.address || 'Indonesia'}</p>
                                        </div>
                                    </div>
                                    ${company.company_description ? `
                                        <div style="background: #f8fafc; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px;">
                                            <p style="margin: 0; color: #475569; font-size: 14px; line-height: 1.6;">${company.company_description}</p>
                                        </div>
                                    ` : ''}
                                </div>
                            </div>
                        `;
                    }
                    
                    // Update modal title
                    document.getElementById('modalTitle').textContent = `Lamar: ${job.title}`;
                    document.getElementById('modalSubtitle').textContent = `${company.company_name || company.name} - ${job.location}`;
                    
                    // Insert company profile before form
                    const form = document.getElementById('applicationForm');
                    const existingProfile = form.previousElementSibling;
                    if (existingProfile && existingProfile.classList && existingProfile.classList.contains('company-profile')) {
                        existingProfile.remove();
                    }
                    
                    if (companyProfileHTML) {
                        const profileDiv = document.createElement('div');
                        profileDiv.className = 'company-profile';
                        profileDiv.innerHTML = companyProfileHTML;
                        form.parentNode.insertBefore(profileDiv, form);
                    }
                    
                    document.getElementById('applicationForm').action = `/jobs/${jobId}/apply`;
                    document.getElementById('jobModal').style.display = 'flex';
                })
                .catch(() => {
                    // Fallback jika AJAX gagal
                    document.getElementById('applicationForm').action = `/jobs/${jobId}/apply`;
                    document.getElementById('jobModal').style.display = 'flex';
                });
        }

        function closeJobModal() {
            document.getElementById('jobModal').style.display = 'none';
            document.getElementById('applicationForm').reset();
        }

        function showLoginModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
        
        function toggleFavorite(companyId, button) {
            fetch('/favorites/toggle', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}'
                },
                body: JSON.stringify({ company_id: companyId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.favorited) {
                    button.style.background = '#ef4444';
                    button.innerHTML = '❤️';
                } else {
                    button.style.background = '#e5e7eb';
                    button.innerHTML = '🤍';
                    // Jika di halaman favorit, hapus card
                    if (window.location.pathname === '/') {
                        button.closest('.card').style.display = 'none';
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>