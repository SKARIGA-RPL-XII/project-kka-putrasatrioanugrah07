<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - Penmedia Loker</title>
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

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        
        .container { 
            max-width: 900px; 
            margin: 40px auto; 
            padding: 0 20px; 
        }

        .profile-header {
            background: var(--white);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-soft);
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 140px;
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            z-index: 1;
        }

        .profile-content {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: end;
            gap: 24px;
        }

        .profile-avatar-large {
            width: 140px;
            height: 140px;
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            border: 6px solid var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: 900;
            color: white;
            box-shadow: 0 12px 32px rgba(37, 99, 235, 0.3);
            margin-top: 70px;
        }

        .profile-details h1 {
            font-size: 32px;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 8px;
            letter-spacing: -1px;
        }

        .profile-details p {
            color: var(--text-muted);
            font-size: 16px;
            font-weight: 500;
        }

        .profile-stats {
            display: flex;
            gap: 32px;
            margin-top: 24px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 900;
            color: var(--blue-primary);
            display: block;
        }

        .stat-label {
            font-size: 12px;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card { 
            background: var(--white); 
            border-radius: 20px; 
            padding: 32px; 
            box-shadow: var(--shadow-soft);
            margin-bottom: 24px;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-glow);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f8fafc;
        }

        .card-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: -0.5px;
        }

        .card-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }

        .form-group { 
            margin-bottom: 24px; 
            position: relative;
        }
        
        .form-label { 
            display: block; 
            font-weight: 700; 
            color: var(--text-main); 
            margin-bottom: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-control { 
            width: 100%; 
            padding: 16px 20px; 
            border: 2px solid #e5e7eb; 
            border-radius: 12px; 
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
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            transform: translateY(-1px);
        }

        .form-control:hover {
            border-color: #cbd5e1;
        }
        
        .btn { 
            padding: 16px 32px; 
            border-radius: 12px; 
            font-weight: 700; 
            cursor: pointer; 
            transition: all 0.3s ease;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            border: none;
            font-family: inherit;
        }
        
        .btn-primary { 
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: var(--white);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }
        
        .btn-primary:hover { 
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 28px rgba(37, 99, 235, 0.5);
        }
        
        .btn-secondary { 
            background: #f8fafc; 
            color: var(--text-muted); 
            border: 2px solid #e2e8f0;
        }
        
        .btn-secondary:hover { 
            background: var(--white);
            color: var(--text-main);
            border-color: #cbd5e1;
            transform: translateY(-1px);
        }
        
        .alert { 
            padding: 16px 20px; 
            border-radius: 12px; 
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
        }
        
        .alert-success { 
            background: #d1fae5; 
            color: #065f46; 
            border: 2px solid #a7f3d0;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 2px solid #f8fafc;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 32px;
            font-size: 14px;
            font-weight: 600;
        }

        .breadcrumb a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb a:hover {
            color: var(--blue-primary);
        }

        .breadcrumb-separator {
            color: #cbd5e1;
        }

        .breadcrumb-current {
            color: var(--blue-primary);
        }

        @media (max-width: 768px) {
            .container { padding: 0 16px; margin: 20px auto; }
            .profile-header { padding: 24px; }
            .profile-content { flex-direction: column; align-items: center; text-align: center; }
            .profile-avatar-large { margin-top: 40px; }
            .profile-stats { justify-content: center; }
            .card { padding: 24px; }
            .form-grid { grid-template-columns: 1fr; }
            .form-actions { flex-direction: column-reverse; gap: 16px; }
            .btn { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('user.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-separator">›</span>
            <span class="breadcrumb-current">Profil Saya</span>
        </div>

        <div class="profile-header">
            <div class="profile-content">
                <div class="profile-avatar-large">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="profile-details">
                    <h1>{{ Auth::user()->name }}</h1>
                    <p>{{ Auth::user()->email }}</p>
                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Lamaran</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">Favorit</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">{{ Auth::user()->created_at->diffForHumans() }}</span>
                            <span class="stat-label">Bergabung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <div class="card-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    Informasi Profil
                </h2>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('user.profile.update') }}">
                @csrf
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                    </div>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" value="{{ Auth::user()->jurusan }}" placeholder="Contoh: Teknik Informatika">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Tipe Kerja</label>
                        <select name="tipe_kerja" class="form-control">
                            <option value="">Pilih Tipe Kerja</option>
                            <option value="full_time" {{ Auth::user()->tipe_kerja == 'full_time' ? 'selected' : '' }}>Full Time</option>
                            <option value="part_time" {{ Auth::user()->tipe_kerja == 'part_time' ? 'selected' : '' }}>Part Time</option>
                            <option value="freelance" {{ Auth::user()->tipe_kerja == 'freelance' ? 'selected' : '' }}>Freelance</option>
                            <option value="magang" {{ Auth::user()->tipe_kerja == 'magang' ? 'selected' : '' }}>Magang</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Status Pendidikan</label>
                        <select name="status_pendidikan" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="kuliah" {{ Auth::user()->status_pendidikan == 'kuliah' ? 'selected' : '' }}>Kuliah</option>
                            <option value="smk" {{ Auth::user()->status_pendidikan == 'smk' ? 'selected' : '' }}>SMK</option>
                            <option value="kerja" {{ Auth::user()->status_pendidikan == 'kerja' ? 'selected' : '' }}>Sudah Kerja</option>
                            <option value="lainnya" {{ Auth::user()->status_pendidikan == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Lokasi Kerja</label>
                        <input type="text" name="lokasi_kerja" class="form-control" value="{{ Auth::user()->lokasi_kerja }}" placeholder="Contoh: Jakarta, Remote">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Keahlian</label>
                    <textarea name="keahlian" rows="4" class="form-control" placeholder="Contoh: PHP, Laravel, JavaScript, UI/UX Design, Project Management">{{ Auth::user()->keahlian }}</textarea>
                </div>
                
                <div class="form-actions">
                    <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>