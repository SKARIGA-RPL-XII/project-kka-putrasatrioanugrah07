<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kandidat - Penmedia Loker</title>
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
            --gradient-mesh: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                           radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                           radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            background-image: var(--gradient-mesh);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 32px 24px;
            box-shadow: 4px 0 24px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 24px;
            font-weight: 900;
            color: white;
            text-decoration: none;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 48px;
            padding-bottom: 24px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        }

        .logo i {
            font-size: 28px;
        }

        .logo span { color: #60a5fa; }

        .nav-links { 
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }
        
        .nav-links a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s;
            padding: 14px 20px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-links a i {
            font-size: 20px;
            width: 24px;
        }

        .nav-links a:hover { 
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(4px);
        }

        .nav-links a.active {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .nav-badge {
            position: relative;
        }

        .nav-badge .badge {
            position: absolute;
            top: 8px;
            right: 8px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            margin-left: 280px;
            flex: 1;
            min-height: 100vh;
        }

        .content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 8px;
            letter-spacing: -1px;
        }

        .page-subtitle {
            color: var(--text-muted);
            font-size: 16px;
            margin: 0;
        }

        .candidates-grid {
            display: grid;
            gap: 24px;
        }

        .section-header {
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0;
            letter-spacing: -1px;
        }

        .candidates-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            padding: 24px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.3);
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.15);
        }

        .stat-number {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 8px;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .candidate-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .candidate-card::before {
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

        .candidate-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .candidate-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 32px 64px rgba(37, 99, 235, 0.2), 0 8px 16px rgba(0, 0, 0, 0.1);
            border-color: rgba(37, 99, 235, 0.2);
        }

        .candidate-card:hover::before {
            transform: scaleX(1);
        }

        .candidate-card:hover::after {
            opacity: 1;
        }

        .candidate-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 24px;
        }

        .candidate-avatar {
            width: 64px;
            height: 64px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .candidate-info h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-main);
            margin: 0 0 4px;
        }

        .candidate-info p {
            color: var(--text-muted);
            margin: 0;
            font-size: 14px;
        }

        .candidate-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .detail-icon {
            width: 16px;
            height: 16px;
            color: var(--blue-primary);
        }

        .candidate-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #f8fafc;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            background: #f0fdf4;
            color: #16a34a;
        }

        .candidate-actions {
            display: flex;
            gap: 8px;
        }

        .btn-sm {
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--blue-primary);
            color: white;
        }

        .btn-outline {
            background: transparent;
            color: var(--text-muted);
            border: 1px solid #e2e8f0;
        }

        .btn-sm:hover {
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .sidebar { 
                width: 80px;
                padding: 24px 12px;
            }
            .logo span,
            .nav-links a span {
                display: none;
            }
            .logo {
                justify-content: center;
            }
            .nav-links a {
                justify-content: center;
                padding: 14px;
            }
            .main-content {
                margin-left: 80px;
            }
            .content { margin: 20px auto; padding: 0 16px; }
            .candidate-header { flex-direction: column; text-align: center; }
            .candidate-details { grid-template-columns: 1fr; }
            .section-header { flex-direction: column; gap: 16px; align-items: flex-start; }
            .candidates-stats { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('company.partials.sidebar')

    <div class="main-content">

    <main class="content">
        <!-- Hero Section -->
        <div style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%); border-radius: 32px; padding: 60px 40px; margin-bottom: 40px; position: relative; overflow: hidden; color: white; box-shadow: 0 20px 60px rgba(37, 99, 235, 0.3);">
            <div style="position: absolute; top: -50%; left: -20%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, transparent 70%); border-radius: 50%; pointer-events: none; animation: float 8s ease-in-out infinite;"></div>
            <div style="position: absolute; bottom: -30%; right: -20%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(37,99,235,0.3) 0%, transparent 70%); border-radius: 50%; pointer-events: none; animation: float 6s ease-in-out infinite reverse;"></div>
            
            <div style="position: relative; z-index: 10; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 24px;">
                <div>
                    <h1 style="font-size: 42px; font-weight: 800; margin: 0 0 12px; letter-spacing: -2px; text-shadow: 0 4px 8px rgba(0,0,0,0.2);">Manajemen Kandidat</h1>
                    <p style="font-size: 18px; margin: 0 0 24px; color: rgba(255,255,255,0.9); max-width: 600px; line-height: 1.6;">Kelola dan evaluasi semua kandidat yang melamar ke perusahaan Anda dengan sistem yang terintegrasi dan profesional.</p>
                    
                    <div style="display: flex; gap: 32px; flex-wrap: wrap;">
                        <div style="text-align: center;">
                            <div style="font-size: 32px; font-weight: 800; margin-bottom: 4px;">{{ $applications->count() }}</div>
                            <div style="font-size: 14px; opacity: 0.8; text-transform: uppercase; letter-spacing: 1px;">Total Kandidat</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 32px; font-weight: 800; margin-bottom: 4px;">{{ $applications->where('status', 'pending')->count() }}</div>
                            <div style="font-size: 14px; opacity: 0.8; text-transform: uppercase; letter-spacing: 1px;">Menunggu Review</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 32px; font-weight: 800; margin-bottom: 4px;">{{ $applications->where('created_at', '>=', now()->subDays(7))->count() }}</div>
                            <div style="font-size: 14px; opacity: 0.8; text-transform: uppercase; letter-spacing: 1px;">Minggu Ini</div>
                        </div>
                    </div>
                </div>
                
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(20px); padding: 24px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                    <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 16px;">
                        <div style="width: 48px; height: 48px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class='bx bx-trending-up' style="font-size: 24px;"></i>
                        </div>
                        <div>
                            <div style="font-size: 20px; font-weight: 700;">Tingkat Respons</div>
                            <div style="font-size: 14px; opacity: 0.8;">7 hari terakhir</div>
                        </div>
                    </div>
                    <div style="font-size: 36px; font-weight: 800; color: #10b981;">{{ $applications->count() > 0 ? '85%' : '0%' }}</div>
                </div>
            </div>
        </div>


        <!-- Filter & Search Section -->
        <div style="background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 24px; padding: 32px; margin-bottom: 32px; border: 1px solid rgba(255,255,255,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                <h2 style="font-size: 24px; font-weight: 800; margin: 0; color: var(--text-main);">Filter Kandidat</h2>
                <div style="display: flex; gap: 12px;">
                    <button style="padding: 8px 16px; background: var(--blue-light); color: var(--blue-primary); border: none; border-radius: 12px; font-size: 12px; font-weight: 600; cursor: pointer;">Semua</button>
                    <button style="padding: 8px 16px; background: transparent; color: var(--text-muted); border: 1px solid #e2e8f0; border-radius: 12px; font-size: 12px; font-weight: 600; cursor: pointer;">Pending</button>
                    <button style="padding: 8px 16px; background: transparent; color: var(--text-muted); border: 1px solid #e2e8f0; border-radius: 12px; font-size: 12px; font-weight: 600; cursor: pointer;">Reviewed</button>
                </div>
            </div>
            
            <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 20px; align-items: end;">
                <div>
                    <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--text-main); font-size: 14px;">Cari Kandidat</label>
                    <div style="position: relative;">
                        <input type="text" placeholder="Nama, email, atau jurusan..." style="width: 100%; padding: 16px 20px 16px 48px; border: 2px solid #e5e7eb; border-radius: 16px; font-size: 15px; transition: all 0.3s;" onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                        <i class='bx bx-search' style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--text-muted); font-size: 20px;"></i>
                    </div>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--text-main); font-size: 14px;">Posisi</label>
                    <select style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 16px; font-size: 15px; background: white;">
                        <option>Semua Posisi</option>
                        @foreach($applications->groupBy('jobListing.title') as $title => $group)
                            <option>{{ $title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--text-main); font-size: 14px;">Status</label>
                    <select style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 16px; font-size: 15px; background: white;">
                        <option>Semua Status</option>
                        <option>Pending</option>
                        <option>Reviewed</option>
                        <option>Accepted</option>
                        <option>Rejected</option>
                    </select>
                </div>
                <div>
                    <button style="width: 100%; padding: 16px 24px; background: var(--primary-gradient); color: white; border: none; border-radius: 16px; font-weight: 700; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 16px rgba(37,99,235,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(37,99,235,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 16px rgba(37,99,235,0.3)'">
                        <i class='bx bx-filter-alt'></i> Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Candidates Section -->
        <div class="section-header">
            <h2 class="section-title">Daftar Kandidat</h2>
            <div style="display: flex; gap: 12px; align-items: center;">
                <div style="display: flex; align-items: center; gap: 8px; padding: 8px 16px; background: rgba(16,185,129,0.1); border-radius: 12px;">
                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%;"></div>
                    <span style="font-size: 12px; font-weight: 600; color: #10b981;">{{ $applications->count() }} Kandidat Aktif</span>
                </div>
                <button style="padding: 8px 16px; background: var(--blue-light); color: var(--blue-primary); border: none; border-radius: 12px; font-size: 12px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 6px;">
                    <i class='bx bx-export'></i> Export Data
                </button>
            </div>
        </div>

        <div class="candidates-grid">
            @forelse($applications as $application)
            <div class="candidate-card">
                <div class="candidate-header">
                    <div class="candidate-avatar">
                        {{ strtoupper(substr($application->full_name, 0, 1)) }}
                    </div>
                    <div class="candidate-info">
                        <h3>{{ $application->full_name }}</h3>
                        <p>Melamar: {{ $application->jobListing->title }}</p>
                        <p style="font-size: 12px; color: #94a3b8;">{{ $application->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                <div class="candidate-details">
                    <div class="detail-item">
                        <i class='bx bx-envelope detail-icon'></i>
                        <span>{{ $application->user->email }}</span>
                    </div>
                    <div class="detail-item">
                        <i class='bx bx-book detail-icon'></i>
                        <span>{{ $application->major }}</span>
                    </div>
                    <div class="detail-item">
                        <i class='bx bx-calendar detail-icon'></i>
                        <span>Lulus {{ $application->graduation_year }}</span>
                    </div>
                    <div class="detail-item">
                        <i class='bx bx-phone detail-icon'></i>
                        <span>{{ $application->phone }}</span>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <h4 style="font-size: 14px; font-weight: 600; margin: 0 0 8px; color: var(--text-main);">Surat Lamaran:</h4>
                    <p style="font-size: 14px; color: var(--text-muted); line-height: 1.5; margin: 0;">{{ Str::limit($application->cover_letter, 150) }}</p>
                </div>

                <div class="candidate-footer">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="status-badge" style="background: {{ $application->status === 'pending' ? '#fef3c7' : ($application->status === 'approved' ? '#d1fae5' : ($application->status === 'cancel' ? '#fee2e2' : '#dbeafe')) }}; color: {{ $application->status === 'pending' ? '#d97706' : ($application->status === 'approved' ? '#16a34a' : ($application->status === 'cancel' ? '#dc2626' : '#2563eb')) }};">{{ $application->status === 'pending' ? 'Pending' : ($application->status === 'approved' ? 'Approved' : ($application->status === 'cancel' ? 'Cancel' : 'Masih Proses')) }}</span>
                        <div style="display: flex; align-items: center; gap: 4px; font-size: 12px; color: var(--text-muted);">
                            <i class='bx bx-time-five'></i>
                            <span>{{ $application->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="candidate-actions">
                        @if($application->cv_path)
                            <a href="{{ asset('storage/' . $application->cv_path) }}" target="_blank" class="btn-sm" style="background: #10b981; color: white; display: flex; align-items: center; gap: 4px;">
                                <i class='bx bx-download' style="font-size: 14px;"></i>
                                CV
                            </a>
                        @endif
                        @if($application->portfolio_url)
                            <a href="{{ $application->portfolio_url }}" target="_blank" class="btn-sm" style="background: #f59e0b; color: white; display: flex; align-items: center; gap: 4px;">
                                <i class='bx bx-link-external' style="font-size: 14px;"></i>
                                Portfolio
                            </a>
                        @endif
                        <button class="btn-sm btn-primary" onclick="viewApplication({{ $application->id }})" style="display: flex; align-items: center; gap: 4px;">
                            <i class='bx bx-show' style="font-size: 14px;"></i>
                            Detail
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 80px 20px; background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 24px; border: 1px solid rgba(255,255,255,0.3);">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, #f3f4f6, #e5e7eb); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; box-shadow: 0 8px 32px rgba(0,0,0,0.1);">
                    <i class='bx bx-user-plus' style="font-size: 48px; color: var(--text-muted); opacity: 0.7;"></i>
                </div>
                <h3 style="margin: 0 0 12px; font-size: 28px; font-weight: 700; color: var(--text-main);">Belum Ada Kandidat</h3>
                <p style="margin: 0 0 24px; font-size: 16px; color: var(--text-muted); max-width: 400px; margin-left: auto; margin-right: auto; line-height: 1.6;">Kandidat akan muncul di sini setelah ada yang melamar lowongan Anda. Pastikan lowongan Anda menarik untuk mendapatkan kandidat terbaik.</p>
                <button style="padding: 16px 32px; background: var(--primary-gradient); color: white; border: none; border-radius: 16px; font-weight: 700; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 16px rgba(37,99,235,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(37,99,235,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 16px rgba(37,99,235,0.3)'">
                    <i class='bx bx-plus'></i> Buat Lowongan Baru
                </button>
            </div>
            @endforelse
        </div>
    </main>
    </div>

    <!-- Application Detail Modal -->
    <div id="applicationModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(12px); animation: fadeIn 0.3s ease;">
        <div style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px); border-radius: 32px; padding: 0; max-width: 800px; width: 90%; max-height: 90vh; overflow: hidden; box-shadow: 0 32px 64px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(255, 255, 255, 0.1); transform: scale(0.9); animation: modalSlideIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;">
            
            <!-- Modal Header -->
            <div style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); padding: 40px 40px 32px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50%; right: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%); pointer-events: none;"></div>
                
                <button onclick="closeApplicationModal()" style="position: absolute; top: 20px; right: 20px; background: rgba(255, 255, 255, 0.2); border: none; width: 40px; height: 40px; border-radius: 50%; color: white; font-size: 20px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s; backdrop-filter: blur(10px);" onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='scale(1)'">&times;</button>
                
                <div style="position: relative; z-index: 2;">
                    <div id="modalAvatar" style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 800; font-size: 32px; margin-bottom: 20px; backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.3);"></div>
                    <h2 id="modalName" style="font-size: 32px; font-weight: 800; margin: 0 0 8px; color: white; letter-spacing: -1px;"></h2>
                    <p id="modalPosition" style="color: rgba(255, 255, 255, 0.9); margin: 0 0 4px; font-size: 16px; font-weight: 500;"></p>
                    <p id="modalDate" style="color: rgba(255, 255, 255, 0.7); margin: 0; font-size: 14px;"></p>
                </div>
            </div>
            
            <!-- Modal Content -->
            <div style="padding: 40px; overflow-y: auto; max-height: 60vh;">
                <div id="applicationContent">
                    <!-- Content will be loaded here -->
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
                transform: scale(0.8) translateY(-40px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        function viewApplication(applicationId) {
            fetch(`/company/applications/${applicationId}`)
                .then(response => response.json())
                .then(data => {
                    // Update modal header
                    document.getElementById('modalAvatar').textContent = data.full_name.charAt(0).toUpperCase();
                    document.getElementById('modalName').textContent = data.full_name;
                    document.getElementById('modalPosition').textContent = `Melamar: ${data.job_listing.title}`;
                    document.getElementById('modalDate').textContent = `Dilamar ${new Date(data.created_at).toLocaleDateString('id-ID', { 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    })}`;
                    
                    // Update modal content
                    document.getElementById('applicationContent').innerHTML = `
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 32px;">
                            <div style="background: rgba(37, 99, 235, 0.05); padding: 20px; border-radius: 16px; border: 1px solid rgba(37, 99, 235, 0.1);">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div style="width: 40px; height: 40px; background: var(--primary-gradient); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class='bx bx-envelope' style="font-size: 20px;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Email</h4>
                                        <p style="margin: 0; font-size: 16px; font-weight: 700; color: var(--text-main);">${data.user.email}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="background: rgba(16, 185, 129, 0.05); padding: 20px; border-radius: 16px; border: 1px solid rgba(16, 185, 129, 0.1);">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981, #059669); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class='bx bx-book' style="font-size: 20px;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Jurusan</h4>
                                        <p style="margin: 0; font-size: 16px; font-weight: 700; color: var(--text-main);">${data.major}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="background: rgba(245, 158, 11, 0.05); padding: 20px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.1);">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class='bx bx-calendar' style="font-size: 20px;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Tahun Lulus</h4>
                                        <p style="margin: 0; font-size: 16px; font-weight: 700; color: var(--text-main);">${data.graduation_year}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="background: rgba(239, 68, 68, 0.05); padding: 20px; border-radius: 16px; border: 1px solid rgba(239, 68, 68, 0.1);">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ef4444, #dc2626); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class='bx bx-phone' style="font-size: 20px;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 14px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">Telepon</h4>
                                        <p style="margin: 0; font-size: 16px; font-weight: 700; color: var(--text-main);">${data.phone}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); padding: 24px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3); margin-bottom: 24px;">
                            <h4 style="font-size: 18px; font-weight: 700; margin: 0 0 16px; color: var(--text-main); display: flex; align-items: center; gap: 8px;">
                                <i class='bx bx-message-square-detail' style="color: var(--blue-primary);"></i>
                                Surat Lamaran
                            </h4>
                            <div style="padding: 20px; background: rgba(248, 250, 252, 0.8); border-radius: 12px; line-height: 1.7; font-size: 15px; color: var(--text-main); border-left: 4px solid var(--blue-primary);">${data.cover_letter}</div>
                        </div>
                        
                        <div style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); padding: 24px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3); margin-bottom: 24px;">
                            <h4 style="font-size: 18px; font-weight: 700; margin: 0 0 16px; color: var(--text-main); display: flex; align-items: center; gap: 8px;">
                                <i class='bx bx-check-circle' style="color: var(--blue-primary);"></i>
                                Ubah Status Lamaran
                            </h4>
                            <div style="display: flex; gap: 12px; align-items: center;">
                                <select id="statusSelect" style="flex: 1; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 16px; font-size: 15px; background: white; font-weight: 600;">
                                    <option value="pending" ${data.status === 'pending' ? 'selected' : ''}>⏳ Pending</option>
                                    <option value="approved" ${data.status === 'approved' ? 'selected' : ''}>✅ Approved</option>
                                    <option value="cancel" ${data.status === 'cancel' ? 'selected' : ''}>❌ Cancel</option>
                                    <option value="masih_proses" ${data.status === 'masih_proses' ? 'selected' : ''}>🔄 Masih Proses</option>
                                </select>
                                <button onclick="updateStatus(${data.id})" style="padding: 16px 32px; background: linear-gradient(135deg, #3b82f6, #1e40af); color: white; border: none; border-radius: 16px; font-weight: 700; font-size: 15px; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 16px rgba(59, 130, 246, 0.3); white-space: nowrap;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(59, 130, 246, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 16px rgba(59, 130, 246, 0.3)'">
                                    <i class='bx bx-save'></i> Update Status
                                </button>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                            ${data.cv_path ? `<a href="/storage/${data.cv_path}" target="_blank" style="padding: 16px 32px; background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; border-radius: 16px; text-decoration: none; font-weight: 700; font-size: 15px; display: flex; align-items: center; gap: 8px; transition: all 0.3s; box-shadow: 0 8px 16px rgba(16, 185, 129, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(16, 185, 129, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 16px rgba(16, 185, 129, 0.3)'">
                                <i class='bx bx-download'></i>
                                Download CV
                            </a>` : ''}
                            ${data.portfolio_url ? `<a href="${data.portfolio_url}" target="_blank" style="padding: 16px 32px; background: linear-gradient(135deg, #3b82f6, #1e40af); color: white; border: none; border-radius: 16px; text-decoration: none; font-weight: 700; font-size: 15px; display: flex; align-items: center; gap: 8px; transition: all 0.3s; box-shadow: 0 8px 16px rgba(59, 130, 246, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 24px rgba(59, 130, 246, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 16px rgba(59, 130, 246, 0.3)'">
                                <i class='bx bx-link-external'></i>
                                Lihat Portfolio
                            </a>` : ''}
                        </div>
                    `;
                    
                    document.getElementById('applicationModal').style.display = 'flex';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal memuat detail aplikasi');
                });
        }

        function closeApplicationModal() {
            document.getElementById('applicationModal').style.display = 'none';
        }
        
        function updateStatus(applicationId) {
            const status = document.getElementById('statusSelect').value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}';
            
            fetch(`/company/applications/${applicationId}/status`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ status: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Status berhasil diupdate!');
                    closeApplicationModal();
                    location.reload();
                } else {
                    alert('Gagal mengupdate status');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate status');
            });
        }
        
        // Close modal when clicking outside
        document.getElementById('applicationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeApplicationModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeApplicationModal();
            }
        });
    </script>
</body>
</html>