<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lamaran Saya | Penmedia Loker</title>
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
    background: #ffffff;
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
            background-image: url('https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80');
            background-size: cover;
            background-position: center;
            height: 50vh;
            text-align: center;
            color: var(--white);
            position: relative;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Elegant Black Smoke Transparent Overlay */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.7) 50%, rgba(0,0,0,0.4) 100%);
            z-index: 1;
            pointer-events: none;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100%);
            z-index: 1;
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
            background: var(--white);
            border: 2px solid #e5e7eb;
            border-radius: 20px;
            padding: 20px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(37, 99, 235, 0.08);
        }

        .card::before {
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

        .card:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
            border-color: rgba(37, 99, 235, 0.3);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-header { display: flex; align-items: start; margin-bottom: 20px; justify-content: space-between; }
        
        .company-info { display: flex; align-items: center; gap: 15px; }

        .icon { 
            width: 56px; height: 56px; 
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; color: white; 
            font-size: 20px;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
        }

        .card-body h3 { margin: 0; font-size: 16px; color: var(--text-main); font-weight: 700; }
        .card-body p { margin: 4px 0 0; color: var(--text-muted); font-size: 14px; font-weight: 500; }

        .tags {
            display: flex;
            gap: 8px;
            margin-top: 20px;
        }

        .badge {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 600;
        }

        .badge-type { background: #f1f5f9; color: #475569; font-weight: 700; }
        .badge-loc { background: #dbeafe; color: #1e40af; font-weight: 700; }
        .badge-recommended { background: linear-gradient(135deg, #10b981, #059669); color: white; font-weight: 700; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3); }

        .card-footer {
            margin-top: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #f8fafc;
        }

        .salary { font-weight: 700; color: var(--text-main); font-size: 14px; }
        .posted { font-size: 12px; color: #94a3b8; }

        /* Float Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }

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
        <h1>Lamaran Saya</h1>
        <p>Lacak status semua lamaran pekerjaan Anda secara real-time</p>
    </header>

    <main class="content">
        @if(session('success'))
            <div style="background: #d1fae5; color: #065f46; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #a7f3d0;">
                {{ session('success') }}
            </div>
        @endif

        <div class="section-header">
            <div>
                <h2 class="section-title">Statistik Lamaran</h2>
                <div class="section-subtitle">Ringkasan status lamaran Anda</div>
            </div>
        </div>

        <div class="grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 60px;">
            <div class="stat-card" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border: 2px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(245, 158, 11, 0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #f59e0b, #d97706);"></div>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #92400e, #78350f); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(245, 158, 11, 0.3);">
                        <svg width="28" height="28" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-size: 28px; font-weight: 900; color: #92400e; margin: 0; line-height: 1.2;">{{ $applications->where('status', 'pending')->count() }}</h3>
                        <p style="color: #78350f; font-size: 12px; font-weight: 700; margin: 4px 0 0; text-transform: uppercase; letter-spacing: 0.5px;">Pending</p>
                    </div>
                </div>
                <div style="margin-top: 16px; height: 4px; background: rgba(245, 158, 11, 0.2); border-radius: 2px;">
                    <div style="height: 100%; background: linear-gradient(90deg, #f59e0b, #d97706); border-radius: 2px; width: 60%; transition: width 0.8s ease;"></div>
                </div>
            </div>

            <div class="stat-card" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); border: 2px solid rgba(59, 130, 246, 0.3); border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(59, 130, 246, 0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #3b82f6, #2563eb);"></div>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1e40af, #1e3a8a); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(59, 130, 246, 0.3);">
                        <svg width="28" height="28" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-size: 28px; font-weight: 900; color: #1e40af; margin: 0; line-height: 1.2;">{{ $applications->where('status', 'masih_proses')->count() }}</h3>
                        <p style="color: #1e3a8a; font-size: 12px; font-weight: 700; margin: 4px 0 0; text-transform: uppercase; letter-spacing: 0.5px;">Dalam Proses</p>
                    </div>
                </div>
                <div style="margin-top: 16px; height: 4px; background: rgba(59, 130, 246, 0.2); border-radius: 2px;">
                    <div style="height: 100%; background: linear-gradient(90deg, #3b82f6, #2563eb); border-radius: 2px; width: 75%; transition: width 0.8s ease;"></div>
                </div>
            </div>

            <div class="stat-card" style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); border: 2px solid rgba(16, 185, 129, 0.3); border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(16, 185, 129, 0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #10b981, #059669);"></div>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #065f46, #064e3b); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(16, 185, 129, 0.3);">
                        <svg width="28" height="28" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-size: 28px; font-weight: 900; color: #065f46; margin: 0; line-height: 1.2;">{{ $applications->where('status', 'approved')->count() }}</h3>
                        <p style="color: #064e3b; font-size: 12px; font-weight: 700; margin: 4px 0 0; text-transform: uppercase; letter-spacing: 0.5px;">Diterima</p>
                    </div>
                </div>
                <div style="margin-top: 16px; height: 4px; background: rgba(16, 185, 129, 0.2); border-radius: 2px;">
                    <div style="height: 100%; background: linear-gradient(90deg, #10b981, #059669); border-radius: 2px; width: 90%; transition: width 0.8s ease;"></div>
                </div>
            </div>

            <div class="stat-card" style="background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%); border: 2px solid rgba(239, 68, 68, 0.3); border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(239, 68, 68, 0.2); transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #ef4444, #dc2626);"></div>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #991b1b, #7f1d1d); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(239, 68, 68, 0.3);">
                        <svg width="28" height="28" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-size: 28px; font-weight: 900; color: #991b1b; margin: 0; line-height: 1.2;">{{ $applications->where('status', 'cancel')->count() }}</h3>
                        <p style="color: #7f1d1d; font-size: 12px; font-weight: 700; margin: 4px 0 0; text-transform: uppercase; letter-spacing: 0.5px;">Ditolak</p>
                    </div>
                </div>
                <div style="margin-top: 16px; height: 4px; background: rgba(239, 68, 68, 0.2); border-radius: 2px;">
                    <div style="height: 100%; background: linear-gradient(90deg, #ef4444, #dc2626); border-radius: 2px; width: 45%; transition: width 0.8s ease;"></div>
                </div>
            </div>
        </div>

        <div class="card" style="margin-bottom: 30px;">
            <form method="GET" action="{{ route('user.applications') }}" style="display: grid; grid-template-columns: 2fr 1fr 1fr auto; gap: 16px; align-items: end;">
                <div>
                    <label style="display: block; font-size: 11px; font-weight: 800; color: #2563eb; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">Cari Lamaran</label>
                    <input type="text" name="search" placeholder="Posisi atau perusahaan..." value="{{ request('search') }}" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 15px; font-weight: 600;">
                </div>
                <div>
                    <label style="display: block; font-size: 11px; font-weight: 800; color: #2563eb; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">Status</label>
                    <select name="status" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 15px; font-weight: 600;">
                        <option value="">Semua Status</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="masih_proses" {{ request('status') == 'masih_proses' ? 'selected' : '' }}>Dalam Proses</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Diterima</option>
                        <option value="cancel" {{ request('status') == 'cancel' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; font-size: 11px; font-weight: 800; color: #2563eb; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">Tanggal</label>
                    <input type="date" name="date" value="{{ request('date') }}" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 15px; font-weight: 600;">
                </div>
                <button type="submit" style="background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); color: white; border: none; padding: 12px 32px; border-radius: 12px; font-weight: 700; font-size: 14px; cursor: pointer; box-shadow: 0 4px 12px rgba(37,99,235,0.3);">Filter</button>
            </form>
        </div>

        <div class="section-header">
            <div>
                <h2 class="section-title">Daftar Lamaran</h2>
                <div class="section-subtitle">Semua lamaran pekerjaan Anda</div>
            </div>
        </div>

        <div class="grid" style="grid-template-columns: 1fr; gap: 20px;">
            @forelse($applications as $application)
            <div class="card" style="display: grid; grid-template-columns: auto 1fr auto; gap: 12px; align-items: center; padding: 12px; background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(248,250,252,1) 100%);">
                @if(isset($application->jobListing->company->company_logo) && $application->jobListing->company->company_logo)
                    <div style="position: relative;">
                        <img src="{{ asset('storage/' . $application->jobListing->company->company_logo) }}" style="width: 90px; height: 90px; border-radius: 20px; object-fit: cover; box-shadow: 0 10px 30px rgba(37, 99, 235, 0.25); border: 3px solid white;" alt="Logo">
                        <div style="position: absolute; bottom: -8px; right: -8px; width: 32px; height: 32px; background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4); border: 3px solid white;">
                            <svg width="14" height="14" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                    </div>
                @else
                    <div style="position: relative;">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 800; font-size: 28px; box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3); border: 3px solid white;">
                            {{ strtoupper(substr($application->jobListing->company->company_name ?? $application->jobListing->company->name ?? 'CO', 0, 2)) }}
                        </div>
                        <div style="position: absolute; bottom: -8px; right: -8px; width: 32px; height: 32px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); border: 3px solid #f8fafc;">
                            <svg width="14" height="14" fill="none" stroke="#2563eb" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                    </div>
                @endif
                <div>
                    <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 10px; color: #0f172a; letter-spacing: -0.5px;">{{ $application->jobListing->title }}</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 16px; margin-bottom: 8px;">
                        <p style="color: #64748b; font-size: 14px; margin: 0; display: flex; align-items: center; gap: 8px; font-weight: 600;">
                            <svg width="18" height="18" fill="none" stroke="#2563eb" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            {{ $application->jobListing->company->company_name ?? $application->jobListing->company->name }}
                        </p>
                        <p style="color: #64748b; font-size: 14px; margin: 0; display: flex; align-items: center; gap: 8px; font-weight: 600;">
                            <svg width="18" height="18" fill="none" stroke="#10b981" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            {{ $application->jobListing->location }}
                        </p>
                        <p style="color: #64748b; font-size: 14px; margin: 0; display: flex; align-items: center; gap: 8px; font-weight: 600;">
                            <svg width="18" height="18" fill="none" stroke="#f59e0b" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ $application->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
                <div style="padding: 14px 24px; border-radius: 16px; font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 10px; white-space: nowrap; box-shadow: 0 4px 12px rgba(0,0,0,0.08); @if($application->status == 'pending') background: linear-gradient(135deg, #fef3c7, #fde68a); color: #92400e; @elseif($application->status == 'masih_proses') background: linear-gradient(135deg, #dbeafe, #bfdbfe); color: #1e40af; @elseif($application->status == 'approved') background: linear-gradient(135deg, #d1fae5, #a7f3d0); color: #065f46; @else background: linear-gradient(135deg, #fee2e2, #fecaca); color: #991b1b; @endif">
                    @if($application->status == 'pending')
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Pending
                    @elseif($application->status == 'masih_proses')
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        Dalam Proses
                    @elseif($application->status == 'approved')
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Diterima
                    @else
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Ditolak
                    @endif
                </div>
            </div>
            @empty
            <div class="card" style="text-align: center; padding: 80px 60px; background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(248,250,252,1) 100%);">
                <div style="width: 80px; height: 80px; margin: 0 auto 24px; background: #f1f5f9; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg width="40" height="40" fill="none" stroke="#94a3b8" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Belum Ada Lamaran</h3>
                <p style="color: #64748b; font-size: 15px; max-width: 400px; margin: 0 auto;">Anda belum melamar pekerjaan atau tidak ada hasil yang cocok dengan filter.</p>
            </div>
            @endforelse
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
