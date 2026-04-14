<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kelola Lowongan - Admin</title>
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
        .header h1 { font-size: 32px; font-weight: 800; color: #0f172a; letter-spacing: -1px; }
        .header p { color: #64748b; margin-top: 8px; font-size: 16px; }
        
        .card { background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 24px; padding: 32px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 1px solid rgba(255,255,255,0.3); }
        
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 12px; font-weight: 700; color: #64748b; font-size: 12px; text-transform: uppercase; border-bottom: 2px solid #f1f5f9; letter-spacing: 0.5px; }
        td { padding: 16px 12px; border-bottom: 1px solid #f8fafc; }
        
        .btn { padding: 10px 20px; border-radius: 12px; border: none; font-weight: 600; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; font-size: 14px; transition: all 0.3s; }
        .btn-danger { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; box-shadow: 0 4px 12px rgba(239,68,68,0.3); }
        .btn-danger:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(239,68,68,0.4); }
        
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
            <a href="{{ route('admin.dashboard') }}">
                <i class='bx bx-home'></i> <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.users') }}">
                <i class='bx bx-user'></i> <span>Users</span>
            </a>
            <a href="{{ route('admin.companies') }}">
                <i class='bx bx-building'></i> <span>Perusahaan</span>
            </a>
            <a href="{{ route('admin.jobs') }}" class="active">
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
            <h1>Kelola Lowongan Kerja</h1>
            <p>Total {{ $jobs->count() }} lowongan terdaftar</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <i class='bx bx-check-circle'></i>
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>Lokasi</th>
                        <th>Tipe</th>
                        <th>Lamaran</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                    <tr>
                        <td style="font-weight: 600; color: #0f172a;">{{ $job->title }}</td>
                        <td style="color: #64748b;">{{ $job->company->company_name ?? $job->company->name }}</td>
                        <td style="color: #64748b;">{{ $job->location }}</td>
                        <td style="color: #64748b; font-size: 14px;">{{ $job->job_type }}</td>
                        <td>
                            <span class="badge badge-warning">{{ $job->applications_count }} Lamaran</span>
                        </td>
                        <td>
                            <span class="badge badge-{{ $job->status === 'active' ? 'success' : 'warning' }}">
                                {{ ucfirst($job->status) }}
                            </span>
                        </td>
                        <td style="color: #64748b; font-size: 14px;">{{ $job->created_at->format('d M Y') }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.jobs.delete', $job->id) }}" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus lowongan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='bx bx-trash'></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" style="text-align: center; padding: 40px; color: #64748b;">
                            Belum ada lowongan terdaftar
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
