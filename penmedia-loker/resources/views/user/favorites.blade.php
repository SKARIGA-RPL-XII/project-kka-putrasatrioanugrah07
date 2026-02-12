<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Favorit - Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            background:
                linear-gradient(135deg, rgba(30, 41, 59, 0.85) 0%, rgba(51, 65, 85, 0.8) 50%, rgba(71, 85, 105, 0.75) 100%),
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255, 255, 255, 0.03) 35px, rgba(255, 255, 255, 0.03) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(255, 255, 255, 0.02) 35px, rgba(255, 255, 255, 0.02) 70px),
                url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600') center/cover;
            padding: 100px 20px;
            color: var(--white);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(30, 41, 59, 0.4);
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
            font-size: 56px;
            font-weight: 900;
            margin-bottom: 16px;
            letter-spacing: -2px;
            text-shadow: 0 8px 16px rgba(0,0,0,0.3);
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

        .companies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
            gap: 32px;
        }

        .company-card {
            background:
                linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 250, 252, 0.95) 50%, rgba(241, 245, 249, 0.98) 100%),
                radial-gradient(circle at 25% 25%, rgba(37, 99, 235, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(59, 130, 246, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 50% 100%, rgba(147, 197, 253, 0.04) 0%, transparent 50%);
            border-radius: 24px;
            padding: 32px;
            box-shadow:
                0 4px 20px rgba(15, 23, 42, 0.08),
                0 2px 8px rgba(15, 23, 42, 0.04),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(226, 232, 240, 0.6);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(20px);
            transform: translateY(0);
        }

        .company-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #2563eb 0%, #3b82f6 30%, #60a5fa 60%, #93c5fd 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 24px 24px 0 0;
        }

        .company-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            opacity: 0;
            transition: all 0.6s ease;
            pointer-events: none;
        }

        .company-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 20px 40px rgba(37, 99, 235, 0.15),
                0 12px 24px rgba(15, 23, 42, 0.1),
                0 0 60px rgba(37, 99, 235, 0.08);
            border-color: rgba(147, 197, 253, 0.8);
            background:
                linear-gradient(145deg, rgba(255, 255, 255, 1) 0%, rgba(248, 250, 252, 0.98) 50%, rgba(241, 245, 249, 1) 100%),
                radial-gradient(circle at 25% 25%, rgba(37, 99, 235, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 100%, rgba(147, 197, 253, 0.08) 0%, transparent 50%);
        }

        .company-card:hover::before {
            transform: scaleX(1);
        }

        .company-card:hover::after {
            opacity: 1;
            top: -30%;
            right: -30%;
        }

        .company-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .company-logo {
            width: 72px;
            height: 72px;
            background:
                linear-gradient(135deg, #2563eb 0%, #3b82f6 25%, #60a5fa 50%, #93c5fd 75%, #dbeafe 100%),
                radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.3) 0%, transparent 50%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            color: white;
            font-size: 24px;
            box-shadow:
                0 8px 24px rgba(37, 99, 235, 0.3),
                0 4px 12px rgba(37, 99, 235, 0.2),
                inset 0 2px 4px rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .company-logo::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            opacity: 0;
        }

        .company-card:hover .company-logo {
            transform: scale(1.1) rotate(5deg);
            box-shadow:
                0 12px 32px rgba(37, 99, 235, 0.4),
                0 6px 16px rgba(37, 99, 235, 0.3),
                inset 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .company-card:hover .company-logo::before {
            opacity: 1;
            animation: shimmer 2s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .company-info h3 {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 6px;
            line-height: 1.2;
            letter-spacing: -0.3px;
            transition: all 0.3s ease;
        }

        .company-card:hover .company-info h3 {
            color: var(--blue-primary);
        }

        .company-info p {
            color: var(--text-muted);
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .company-card:hover .company-info p {
            color: #64748b;
        }

        .company-stats {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            padding: 16px;
            background: #f8fafc;
            border-radius: 12px;
        }

        .stat {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 24px;
            font-weight: 800;
            color: var(--blue-primary);
            display: block;
            line-height: 1;
        }

        .stat-label {
            font-size: 11px;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 4px;
            display: block;
        }

        .company-description {
            color: var(--text-muted);
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .company-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }

        .tag {
            padding: 6px 12px;
            background:
                linear-gradient(135deg, rgba(241, 245, 249, 0.8) 0%, rgba(226, 232, 240, 0.9) 100%),
                radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.05) 0%, transparent 50%);
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            color: #475569;
            border: 1px solid rgba(203, 213, 225, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(5px);
            position: relative;
            overflow: hidden;
        }

        .tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .tag:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
            border-color: rgba(147, 197, 253, 0.5);
            background:
                linear-gradient(135deg, rgba(241, 245, 249, 0.9) 0%, rgba(226, 232, 240, 1) 100%),
                radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.08) 0%, transparent 50%);
        }

        .tag:hover::before {
            left: 100%;
        }

        .company-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
        }

        .btn-view {
            background:
                linear-gradient(135deg, #2563eb 0%, #3b82f6 25%, #60a5fa 50%, #93c5fd 75%, #dbeafe 100%),
                radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            color: white;
            padding: 12px 24px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow:
                0 6px 20px rgba(37, 99, 235, 0.3),
                0 2px 8px rgba(37, 99, 235, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-view::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .btn-view:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow:
                0 12px 32px rgba(37, 99, 235, 0.4),
                0 6px 16px rgba(37, 99, 235, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .btn-view:hover::before {
            left: 100%;
        }

        .btn-view:active {
            transform: translateY(-1px) scale(1.02);
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
            .companies-grid { grid-template-columns: 1fr; }
            .hero h1 { font-size: 32px; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <i class='bx bxs-buildings'></i>
            Penmedia<span>Loker</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('user.dashboard') }}">Lowongan</a>
            <a href="{{ route('user.companies') }}">Perusahaan</a>
            <a href="{{ route('user.favorites') }}" class="active">Favorit</a>
            <a href="{{ route('user.applications') }}">Lamaran Saya</a>
            <a href="{{ route('user.career-tips') }}">Tips Karir</a>
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

                            <a href="{{ route('user.favorites') }}" class="dropdown-item">
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
            <h1>Perusahaan Favorit Anda</h1>
            <p>Kumpulan perusahaan yang telah Anda favoritkan untuk memudahkan akses dan pelacakan</p>
        </div>
    </header>

    <main class="content">
        <div class="companies-grid">
            @forelse($favoriteCompanies as $company)
            <div class="company-card">
                <div class="company-header">
                    <div class="company-logo">
                        {{ strtoupper(substr($company->company_name ?? $company->name, 0, 2)) }}
                    </div>
                    <div class="company-info">
                        <h3>{{ $company->company_name ?? $company->name }}</h3>
                        <p>{{ $company->industry ?? 'Teknologi' }}</p>
                    </div>
                    @auth
                    <button onclick="toggleFavorite({{ $company->id }}, this)" class="favorite-btn" data-company-id="{{ $company->id }}" style="background: #ef4444; color: white; border: none; padding: 12px; border-radius: 50%; cursor: pointer; font-size: 18px; margin-left: auto; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">❤️</button>
                    @endauth
                </div>

                <div class="company-stats">
                    <div class="stat">
                        <div class="stat-icon">
                            <i class='bx bx-briefcase'></i>
                        </div>
                        <span class="stat-number">{{ $company->jobs_count ?? 0 }}</span>
                        <span class="stat-label">Lowongan</span>
                    </div>
                    <div class="stat">
                        <div class="stat-icon">
                            <i class='bx bx-group'></i>
                        </div>
                        <span class="stat-number">{{ $company->employee_count ?? '50-100' }}</span>
                        <span class="stat-label">Karyawan</span>
                    </div>
                    <div class="stat">
                        <div class="stat-icon">
                            <i class='bx bx-star'></i>
                        </div>
                        <span class="stat-number">4.5</span>
                        <span class="stat-label">Rating</span>
                    </div>
                </div>

                <div class="company-description">
                    {{ Str::limit($company->description ?? 'Perusahaan teknologi terdepan yang fokus pada inovasi dan pengembangan solusi digital untuk masa depan.', 120) }}
                </div>

                <div class="company-tags">
                    <span class="tag">{{ $company->company_type ?? 'Teknologi' }}</span>
                    <span class="tag">Remote Friendly</span>
                    <span class="tag">Benefit Lengkap</span>
                </div>

                <div class="company-footer">
                    <span style="color: var(--text-muted); font-size: 12px;">
                        <i class='bx bx-map'></i> {{ $company->address ?? 'Jakarta, Indonesia' }}
                    </span>
                    <a href="#" class="btn-view">Lihat Detail</a>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 80px 20px; color: #64748b;">
                <i class='bx bx-heart' style="font-size: 64px; margin-bottom: 24px; opacity: 0.5;"></i>
                <h3 style="margin: 0 0 12px; font-size: 24px; font-weight: 700;">Belum Ada Perusahaan Favorit</h3>
                <p style="margin: 0; font-size: 16px;">Jelajahi halaman perusahaan dan klik ikon hati untuk menambahkan favorit</p>
                <a href="{{ route('user.companies') }}" style="display: inline-block; margin-top: 20px; background: var(--primary-gradient); color: white; padding: 12px 24px; border-radius: 12px; text-decoration: none; font-weight: 600;">Jelajahi Perusahaan</a>
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

        function toggleFavorite(companyId, button) {
            console.log('Toggling favorite for company:', companyId);

            fetch('{{ route('favorites.toggle') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ company_id: companyId })
            })
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.favorited) {
                    button.style.background = '#ef4444';
                    button.style.color = 'white';
                    button.innerHTML = '❤️';
                } else {
                    button.style.background = '#e5e7eb';
                    button.style.color = '#64748b';
                    button.innerHTML = '🤍';
                    // Remove the card from favorites page
                    button.closest('.company-card').remove();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat memfavoritkan perusahaan');
            });
        }

        // Load favorite status on page load
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Loading favorite status...');
            const favoriteButtons = document.querySelectorAll('.favorite-btn');
            console.log('Found buttons:', favoriteButtons.length);

            favoriteButtons.forEach(button => {
                const companyId = button.dataset.companyId;
                console.log('Checking favorite status for company:', companyId);

                fetch(`{{ route('favorites.check') }}?company_id=${companyId}`, {
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    console.log('Check response status:', response.status);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Check response data:', data);
                    if (data.favorited) {
                        button.style.background = '#ef4444';
                        button.style.color = 'white';
                        button.innerHTML = '❤️';
                    }
                })
                .catch(error => {
                    console.error('Error checking favorite status:', error);
                });
            });
        });
    </script>
</body>
</html>
