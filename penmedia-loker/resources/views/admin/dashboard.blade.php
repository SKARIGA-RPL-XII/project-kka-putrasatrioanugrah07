<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }
        
        .sidebar { width: 280px; background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%); height: 100vh; position: fixed; padding: 32px 24px; color: white; box-shadow: 4px 0 24px rgba(0,0,0,0.1); }
        .logo { font-size: 24px; font-weight: 900; margin-bottom: 48px; display: flex; align-items: center; gap: 8px; padding-bottom: 24px; border-bottom: 2px solid rgba(255,255,255,0.2); }
        .logo span { color: #60a5fa; }
        .nav-links { display: flex; flex-direction: column; gap: 8px; }
        .nav-links a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 14px 20px; border-radius: 12px; font-weight: 600; display: flex; align-items: center; gap: 12px; transition: all 0.3s; font-size: 15px; }
        .nav-links a i { font-size: 20px; width: 24px; }
        .nav-links a:hover { background: rgba(255,255,255,0.1); color: white; transform: translateX(4px); }
        .nav-links a.active { background: rgba(255,255,255,0.15); color: white; box-shadow: 0 4px 12px rgba(0,0,0,0.2); }
        
        .main { margin-left: 280px; padding: 40px; min-height: 100vh; }
        .header { margin-bottom: 40px; }
        .header h1 { font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 8px; letter-spacing: -1px; }
        .header p { color: #64748b; font-size: 16px; }
        
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-bottom: 40px; }
        .stat-card { background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); padding: 32px; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 1px solid rgba(255,255,255,0.3); transition: all 0.3s; }
        .stat-card:hover { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(37,99,235,0.15); }
        .stat-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 20px; }
        .stat-number { font-size: 40px; font-weight: 800; margin-bottom: 8px; background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .stat-label { color: #64748b; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
        
        .card { background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 24px; padding: 32px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 1px solid rgba(255,255,255,0.3); margin-bottom: 24px; }
        .card h2 { font-size: 20px; font-weight: 700; margin-bottom: 24px; color: #0f172a; }
        
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 12px; font-weight: 700; color: #64748b; font-size: 12px; text-transform: uppercase; border-bottom: 2px solid #f1f5f9; letter-spacing: 0.5px; }
        td { padding: 16px 12px; border-bottom: 1px solid #f8fafc; }
        
        .badge { padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; }
        .badge-success { background: #d1fae5; color: #065f46; }
        .badge-warning { background: #fef3c7; color: #92400e; }
        
        .alert { padding: 16px 24px; border-radius: 16px; margin-bottom: 24px; font-weight: 600; display: flex; align-items: center; gap: 12px; }
        .alert-success { background: #d1fae5; color: #065f46; }
        .alert i { font-size: 20px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <i class='bx bx-shield'></i>
            Admin<span>Panel</span>
        </div>
        <div class="nav-links">
            <a href="{{ route('admin.dashboard') }}" class="active">
                <i class='bx bx-home'></i> <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.users') }}">
                <i class='bx bx-user'></i> <span>Users</span>
            </a>
            <a href="{{ route('admin.companies') }}">
                <i class='bx bx-building'></i> <span>Perusahaan</span>
            </a>
            <a href="{{ route('admin.jobs') }}">
                <i class='bx bx-briefcase'></i> <span>Lowongan</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" style="margin-top: auto;">
                @csrf
                <button type="submit" style="width: 100%; background: rgba(255,255,255,0.1); color: white; border: none; padding: 14px 20px; border-radius: 12px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 12px; font-size: 15px; transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
                    <i class='bx bx-log-out' style="font-size: 20px;"></i> <span>Logout</span>
                </button>
            </form>
        </div>
    </div>

    <div class="main">
        <div class="header">
            <h1>Dashboard Admin</h1>
            <p>Kelola semua data user, perusahaan, dan lowongan kerja</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <i class='bx bx-check-circle'></i>
                {{ session('success') }}
            </div>
        @endif

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); color: #1e40af;">
                    <i class='bx bx-user'></i>
                </div>
                <div class="stat-number">{{ $stats['total_users'] }}</div>
                <div class="stat-label">Total Users</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); color: #92400e;">
                    <i class='bx bx-building'></i>
                </div>
                <div class="stat-number">{{ $stats['total_companies'] }}</div>
                <div class="stat-label">Total Perusahaan</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); color: #065f46;">
                    <i class='bx bx-briefcase'></i>
                </div>
                <div class="stat-number">{{ $stats['total_jobs'] }}</div>
                <div class="stat-label">Total Lowongan</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); color: #3730a3;">
                    <i class='bx bx-file'></i>
                </div>
                <div class="stat-number">{{ $stats['total_applications'] }}</div>
                <div class="stat-label">Total Lamaran</div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
            <div class="card">
                <h2>User Terbaru</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentUsers as $user)
                        <tr>
                            <td style="font-weight: 600; color: #0f172a;">{{ $user->name }}</td>
                            <td style="color: #64748b;">{{ $user->email }}</td>
                            <td style="color: #64748b; font-size: 14px;">{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card">
                <h2>Perusahaan Terbaru</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentCompanies as $company)
                        <tr>
                            <td style="font-weight: 600; color: #0f172a;">{{ $company->company_name ?? $company->name }}</td>
                            <td style="color: #64748b;">{{ $company->email }}</td>
                            <td style="color: #64748b; font-size: 14px;">{{ $company->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <h2>Lowongan Terbaru</h2>
            <table>
                <thead>
                    <tr>
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentJobs as $job)
                    <tr>
                        <td style="font-weight: 600; color: #0f172a;">{{ $job->title }}</td>
                        <td style="color: #64748b;">{{ $job->company->company_name ?? $job->company->name }}</td>
                        <td style="color: #64748b;">{{ $job->location }}</td>
                        <td>
                            <span class="badge badge-{{ $job->status === 'active' ? 'success' : 'warning' }}">
                                {{ ucfirst($job->status) }}
                            </span>
                        </td>
                        <td style="color: #64748b; font-size: 14px;">{{ $job->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
