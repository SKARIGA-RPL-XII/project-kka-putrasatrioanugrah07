<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perusahaan - Penmedia Loker</title>
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
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
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

        .logo span { 
            color: #60a5fa;
        }

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
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .profile-section {
            margin-top: auto;
            padding-top: 24px;
            border-top: 2px solid rgba(255, 255, 255, 0.2);
        }

        .profile-dropdown {
            position: relative;
        }

        .profile-trigger {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            width: 100%;
        }

        .profile-trigger:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .profile-avatar {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 16px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .profile-name {
            font-size: 14px;
            font-weight: 700;
            color: white;
            line-height: 1.2;
        }

        .profile-role {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dropdown-arrow {
            width: 16px;
            height: 16px;
            color: rgba(255, 255, 255, 0.7);
            transition: transform 0.3s ease;
            margin-left: auto;
        }

        .profile-dropdown.active .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            bottom: calc(100% + 8px);
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
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

        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            padding: 100px 20px;
            color: var(--white);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(37, 99, 235, 0.3);
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: 900;
            margin-bottom: 16px;
            letter-spacing: -2px;
            text-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        .hero-text p {
            color: #cbd5e1;
            font-size: 16px;
            margin-bottom: 0;
        }

        .btn-add-job {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: var(--white);
            padding: 16px 32px;
            border-radius: 14px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
        }

        .btn-add-job:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 28px rgba(37, 99, 235, 0.4);
        }

        .content {
            max-width: 1100px;
            margin: -40px auto 80px;
            padding: 0 20px;
            position: relative;
            z-index: 20;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: var(--white);
            border-radius: 28px;
            padding: 40px;
            box-shadow: 0 12px 40px rgba(37, 99, 235, 0.12);
            border: 2px solid #e5e7eb;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #2563eb, #3b82f6, #60a5fa);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .stat-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 24px 56px rgba(37, 99, 235, 0.2);
        }

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 72px;
            height: 72px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .stat-info h3 {
            font-size: 40px;
            font-weight: 900;
            color: var(--blue-primary);
            margin: 0;
            line-height: 1;
        }

        .stat-info p {
            font-size: 14px;
            color: var(--text-muted);
            margin: 4px 0 0;
            font-weight: 600;
        }

        .stat-trend {
            font-size: 12px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 6px;
            background: #f0fdf4;
            color: #16a34a;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 900;
            color: var(--text-main);
            margin: 0;
            letter-spacing: -1px;
        }

        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .job-card {
            background: var(--white);
            border-radius: 28px;
            padding: 36px;
            box-shadow: 0 12px 40px rgba(37, 99, 235, 0.12);
            border: 2px solid #e5e7eb;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #10b981, #059669);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .job-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 24px 56px rgba(16, 185, 129, 0.2);
        }

        .job-card:hover::before {
            transform: scaleX(1);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 20px;
        }

        .job-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 8px;
        }

        .job-department {
            font-size: 14px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .job-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            background: #f0fdf4;
            color: #16a34a;
        }

        .job-details {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 20px 0;
        }

        .job-tag {
            padding: 6px 12px;
            background: #f8fafc;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .job-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #f8fafc;
        }

        .job-applicants {
            font-size: 14px;
            color: var(--text-muted);
            font-weight: 600;
        }

        .job-actions {
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
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-muted);
            border: 1px solid #e2e8f0;
        }

        .btn-sm:hover {
            transform: translateY(-1px);
        }

        .main-content {
            margin-left: 280px;
            flex: 1;
            min-height: 100vh;
        }

        @media (max-width: 768px) {
            .sidebar { 
                width: 80px;
                padding: 24px 12px;
            }
            .logo span,
            .nav-links a span,
            .profile-info {
                display: none;
            }
            .logo {
                justify-content: center;
            }
            .nav-links a {
                justify-content: center;
                padding: 14px;
            }
            .profile-trigger {
                justify-content: center;
            }
            .main-content {
                margin-left: 80px;
            }
            .hero-content { flex-direction: column; text-align: center; gap: 24px; }
            .hero { padding: 40px 20px; }
            .content { margin-top: 20px; }
            .stats-grid { grid-template-columns: 1fr; }
            .jobs-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('company.partials.sidebar')

    <div class="main-content">

    <header class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Dashboard Perusahaan</h1>
                <p>Kelola lowongan kerja dan temukan kandidat terbaik untuk perusahaan Anda</p>
            </div>
            <a href="#" class="btn-add-job" onclick="openJobModal()">
                <i class='bx bx-plus'></i>
                Tambah Lowongan
            </a>
        </div>
    </header>

    <main class="content">
        @if(session('success'))
            <div style="background: #d1fae5; color: #065f46; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #a7f3d0;">
                {{ session('success') }}
            </div>
        @endif

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #eff6ff; color: #2563eb;">
                        <i class='bx bx-briefcase'></i>
                    </div>
                    <div class="stat-info">
                        <h3>{{ $stats['total_jobs'] }}</h3>
                        <p>Total Lowongan</p>
                    </div>
                </div>
                <div class="stat-trend">{{ $stats['active_jobs'] }} aktif</div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #f0fdf4; color: #16a34a;">
                        <i class='bx bx-user-plus'></i>
                    </div>
                    <div class="stat-info">
                        <h3>{{ $stats['total_applicants'] }}</h3>
                        <p>Total Pelamar</p>
                    </div>
                </div>
                <div class="stat-trend">Segera hadir</div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #fff1f2; color: #e11d48;">
                        <i class='bx bx-calendar-check'></i>
                    </div>
                    <div class="stat-info">
                        <h3>{{ $stats['interviews'] }}</h3>
                        <p>Interview Terjadwal</p>
                    </div>
                </div>
                <div class="stat-trend">Segera hadir</div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #fef3c7; color: #d97706;">
                        <i class='bx bx-user-check'></i>
                    </div>
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>Kandidat Diterima</p>
                    </div>
                </div>
                <div class="stat-trend">Segera hadir</div>
            </div>
        </div>

        <div class="section-header">
            <h2 class="section-title">Lowongan Aktif</h2>
            <a href="#" class="btn-add-job" onclick="openJobModal()" style="padding: 12px 24px; font-size: 14px;">
                <i class='bx bx-plus'></i>
                Tambah Lowongan
            </a>
        </div>

        <div class="jobs-grid">
            @forelse($jobs as $job)
            <div class="job-card">
                <div class="job-header">
                    <div>
                        <h3 class="job-title">{{ $job->title }}</h3>
                        <p class="job-department">{{ $job->department }}</p>
                    </div>
                    <span class="job-status">{{ ucfirst($job->status) }}</span>
                </div>
                <div class="job-details">
                    <span class="job-tag">{{ $job->job_type_display }}</span>
                    <span class="job-tag">{{ $job->work_location_display }}</span>
                    <span class="job-tag">{{ $job->education_level_display }}</span>
                </div>
                <div class="job-footer">
                    <span class="job-applicants">{{ $job->applications_count }} Pelamar</span>
                    <div class="job-actions">
                        <button class="btn-sm btn-outline" onclick="editJob({{ $job->id }})">Edit</button>
                        <button class="btn-sm btn-primary" onclick="viewApplicants({{ $job->id }})">Lihat Pelamar</button>
                    </div>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #64748b;">
                <i class='bx bx-briefcase' style="font-size: 48px; margin-bottom: 16px; opacity: 0.5;"></i>
                <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600;">Belum Ada Lowongan</h3>
                <p style="margin: 0; font-size: 14px;">Mulai tambahkan lowongan kerja pertama Anda</p>
            </div>
            @endforelse
        </div>
    </main>
    </div>

    <!-- Job Modal -->
    <div id="jobModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
        <div style="background: white; border-radius: 24px; padding: 48px; max-width: 700px; width: 90%; max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 50px rgba(0,0,0,0.25);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 id="modalTitle" style="font-size: 28px; font-weight: 800; margin: 0; background: linear-gradient(135deg, #1e40af, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Tambah Lowongan Baru</h2>
                    <p style="color: #64748b; margin: 4px 0 0; font-size: 14px;">Lengkapi informasi lowongan kerja</p>
                </div>
                <button onclick="closeJobModal()" style="background: #f8fafc; border: 1px solid #e2e8f0; width: 40px; height: 40px; border-radius: 50%; font-size: 20px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" onmouseover="this.style.background='#ef4444'; this.style.color='white'; this.style.borderColor='#ef4444'" onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b'; this.style.borderColor='#e2e8f0'">&times;</button>
            </div>
            
            <form id="jobForm" method="POST" action="{{ route('company.jobs.store') }}">
                @csrf
                <input type="hidden" id="jobId" name="job_id">
                <input type="hidden" id="formMethod" name="_method">
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Posisi Pekerjaan</label>
                        <input type="text" id="title" name="title" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" placeholder="Frontend Developer" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Departemen</label>
                        <input type="text" id="department" name="department" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" placeholder="Tim Teknologi" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Tipe Pekerjaan</label>
                        <select id="job_type" name="job_type" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                            <option value="">Pilih Tipe</option>
                            <option value="full_time">Full Time</option>
                            <option value="part_time">Part Time</option>
                            <option value="freelance">Freelance</option>
                            <option value="internship">Magang</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Lokasi Kerja</label>
                        <select id="work_location" name="work_location" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                            <option value="">Pilih Lokasi</option>
                            <option value="remote">Remote</option>
                            <option value="onsite">On-site</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Daerah</label>
                        <input type="text" id="location" name="location" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" placeholder="Jakarta, Surabaya" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Minimum Pendidikan</label>
                        <select id="education_level" name="education_level" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                            <option value="">Pilih Pendidikan</option>
                            <option value="sma">SMA/SMK</option>
                            <option value="d3">Diploma (D3)</option>
                            <option value="s1">Sarjana (S1)</option>
                            <option value="s2">Magister (S2)</option>
                        </select>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Gaji Minimum (IDR)</label>
                        <input type="text" id="salary_min_display" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" placeholder="Rp 5.000.000" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                        <input type="hidden" id="salary_min" name="salary_min">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Gaji Maximum (IDR)</label>
                        <input type="text" id="salary_max_display" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s;" placeholder="Rp 10.000.000" required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                        <input type="hidden" id="salary_max" name="salary_max">
                    </div>
                </div>
                
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Deskripsi Pekerjaan</label>
                    <textarea id="description" name="description" rows="4" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s; resize: vertical;" placeholder="Jelaskan tugas dan tanggung jawab..." required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'"></textarea>
                </div>
                
                <div style="margin-bottom: 32px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Persyaratan</label>
                    <textarea id="requirements" name="requirements" rows="3" style="width: 100%; padding: 16px 20px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; transition: all 0.3s; resize: vertical;" placeholder="Sebutkan persyaratan yang dibutuhkan..." required onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.1)'" onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'"></textarea>
                </div>
                
                <div style="display: flex; gap: 16px; justify-content: flex-end;">
                    <button type="button" onclick="closeJobModal()" style="padding: 16px 32px; background: #f8fafc; color: #64748b; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#e2e8f0'" onmouseout="this.style.background='#f8fafc'">Batal</button>
                    <button type="submit" id="submitBtn" style="padding: 16px 32px; background: linear-gradient(135deg, #1e40af, #2563eb); color: white; border: none; border-radius: 12px; cursor: pointer; font-weight: 700; transition: all 0.3s; box-shadow: 0 4px 12px rgba(37,99,235,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(37,99,235,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(37,99,235,0.3)'">Simpan Lowongan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Application Detail Modal -->
    <div id="applicationModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
        <div style="background: white; border-radius: 24px; padding: 48px; max-width: 700px; width: 90%; max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 50px rgba(0,0,0,0.25);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 style="font-size: 28px; font-weight: 800; margin: 0; background: linear-gradient(135deg, #1e40af, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Detail Lamaran</h2>
                    <p style="color: #64748b; margin: 4px 0 0; font-size: 14px;">Informasi lengkap pelamar</p>
                </div>
                <button onclick="closeApplicationModal()" style="background: #f8fafc; border: 1px solid #e2e8f0; width: 40px; height: 40px; border-radius: 50%; font-size: 20px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" onmouseover="this.style.background='#ef4444'; this.style.color='white'; this.style.borderColor='#ef4444'" onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b'; this.style.borderColor='#e2e8f0'">&times;</button>
            </div>
            
            <div id="applicationContent">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        // Format rupiah
        function formatRupiah(angka) {
            if (!angka) return '';
            const number = angka.toString().replace(/[^,\d]/g, '');
            const split = number.split(',');
            const sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            return 'Rp ' + rupiah;
        }

        // Parse rupiah ke angka
        function parseRupiah(rupiah) {
            return rupiah.replace(/[^\d]/g, '');
        }

        // Event listener untuk input gaji
        document.addEventListener('DOMContentLoaded', function() {
            const salaryMinDisplay = document.getElementById('salary_min_display');
            const salaryMaxDisplay = document.getElementById('salary_max_display');
            
            if (salaryMinDisplay) {
                salaryMinDisplay.addEventListener('keyup', function(e) {
                    const value = parseRupiah(e.target.value);
                    e.target.value = formatRupiah(value);
                    document.getElementById('salary_min').value = value;
                });
            }
            
            if (salaryMaxDisplay) {
                salaryMaxDisplay.addEventListener('keyup', function(e) {
                    const value = parseRupiah(e.target.value);
                    e.target.value = formatRupiah(value);
                    document.getElementById('salary_max').value = value;
                });
            }
        });

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
                closeJobModal();
            }
        });

        function openJobModal() {
            document.getElementById('jobModal').style.display = 'flex';
            document.getElementById('modalTitle').textContent = 'Tambah Lowongan Baru';
            document.getElementById('submitBtn').textContent = 'Simpan Lowongan';
            document.getElementById('jobForm').reset();
            document.getElementById('salary_min_display').value = '';
            document.getElementById('salary_max_display').value = '';
            document.getElementById('jobId').value = '';
            document.getElementById('formMethod').value = '';
        }

        function editJob(jobId) {
            // Untuk sementara masih menggunakan data dummy
            // Nanti bisa diubah untuk mengambil data dari server via AJAX
            const jobData = {
                1: {
                    title: 'Frontend Developer',
                    department: 'Tim Teknologi',
                    job_type: 'full_time',
                    work_location: 'remote',
                    location: 'Jakarta',
                    education_level: 's1',
                    salary_min: 8000000,
                    salary_max: 15000000,
                    description: 'Mengembangkan antarmuka pengguna yang responsif dan interaktif',
                    requirements: 'Menguasai React.js, HTML, CSS, JavaScript'
                }
            };

            const job = jobData[jobId];
            if (job) {
                document.getElementById('jobModal').style.display = 'flex';
                document.getElementById('modalTitle').textContent = 'Edit Lowongan';
                document.getElementById('submitBtn').textContent = 'Update Lowongan';
                
                // Isi form dengan data job
                document.getElementById('jobId').value = jobId;
                document.getElementById('formMethod').value = 'PUT';
                document.getElementById('title').value = job.title;
                document.getElementById('department').value = job.department;
                document.getElementById('job_type').value = job.job_type;
                document.getElementById('work_location').value = job.work_location;
                document.getElementById('location').value = job.location;
                document.getElementById('education_level').value = job.education_level;
                
                // Format gaji untuk tampilan
                document.getElementById('salary_min_display').value = formatRupiah(job.salary_min);
                document.getElementById('salary_min').value = job.salary_min;
                document.getElementById('salary_max_display').value = formatRupiah(job.salary_max);
                document.getElementById('salary_max').value = job.salary_max;
                
                document.getElementById('description').value = job.description;
                document.getElementById('requirements').value = job.requirements;
            }
        }

        function closeJobModal() {
            document.getElementById('jobModal').style.display = 'none';
        }

        function viewApplicants(jobId) {
            // Redirect to applicants page for specific job
            window.location.href = `/company/jobs/${jobId}/applicants`;
        }

        function viewApplication(applicationId) {
            // Show application detail modal
            fetch(`/company/applications/${applicationId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('applicationContent').innerHTML = `
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                            <div>
                                <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px;">Nama Lengkap</label>
                                <p style="margin: 0; padding: 12px; background: #f8fafc; border-radius: 8px;">${data.full_name}</p>
                            </div>
                            <div>
                                <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px;">Email</label>
                                <p style="margin: 0; padding: 12px; background: #f8fafc; border-radius: 8px;">${data.user.email}</p>
                            </div>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                            <div>
                                <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px;">Jurusan</label>
                                <p style="margin: 0; padding: 12px; background: #f8fafc; border-radius: 8px;">${data.major}</p>
                            </div>
                            <div>
                                <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px;">Tahun Lulus</label>
                                <p style="margin: 0; padding: 12px; background: #f8fafc; border-radius: 8px;">${data.graduation_year}</p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 24px;">
                            <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 14px;">Surat Lamaran</label>
                            <div style="padding: 16px; background: #f8fafc; border-radius: 8px; line-height: 1.6;">${data.cover_letter}</div>
                        </div>
                        
                        <div style="display: flex; gap: 16px; justify-content: flex-end;">
                            ${data.cv_path ? `<a href="/storage/${data.cv_path}" target="_blank" style="padding: 12px 24px; background: #10b981; color: white; border: none; border-radius: 8px; text-decoration: none; font-weight: 600;">Lihat CV</a>` : ''}
                            ${data.portfolio_url ? `<a href="${data.portfolio_url}" target="_blank" style="padding: 12px 24px; background: #3b82f6; color: white; border: none; border-radius: 8px; text-decoration: none; font-weight: 600;">Lihat Portfolio</a>` : ''}
                        </div>
                    `;
                    document.getElementById('applicationModal').style.display = 'flex';
                })
                .catch(error => {
                    alert('Error loading application details');
                });
        }

        function closeApplicationModal() {
            document.getElementById('applicationModal').style.display = 'none';
        }
    </script>
</body>
</html>