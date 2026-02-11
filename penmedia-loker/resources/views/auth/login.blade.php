<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Penmedia Loker</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <style>
        :root {
            --brand-primary: #1e3a8a;
            --brand-dark: #0f172a;
            --brand-accent: #2563eb;
            --surface: #ffffff;
            --text-primary: #334155;
            --text-secondary: #64748b;
            --border-color: #cbd5e1;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--surface);
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1.2fr; /* Rasio Kiri:Kanan */
            overflow: hidden;
        }

        /* --- LEFT SIDE: ARTISTIC PANEL --- */
        .art-panel {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(30, 58, 138, 0.85) 100%), 
                        url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200') center/cover;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 60px;
            color: white;
            overflow: hidden;
        }

        /* Abstract Pattern Overlay */
        .art-panel::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 150%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% -50%, rgba(37, 99, 235, 0.4) 0%, transparent 50%);
            z-index: 1;
        }
        
        /* Grid Texture (Modern Tech Look) */
        .texture {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 0;
        }

        .brand-logo {
            font-size: 24px;
            font-weight: 800;
            z-index: 2;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quote-box {
            z-index: 2;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 400px;
        }

        .quote-text {
            font-size: 18px;
            line-height: 1.6;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .quote-author {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-primary);
            font-weight: 800;
        }

        /* --- RIGHT SIDE: FORM PANEL --- */
        .login-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: var(--surface);
            position: relative;
        }

        .login-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            margin-bottom: 40px;
        }

        .login-header h1 {
            font-size: 32px;
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .login-header p {
            color: var(--text-secondary);
            font-size: 15px;
        }

        /* Floating Label Input Style */
        .form-group {
            position: relative;
            margin-bottom: 24px;
        }

        .form-control {
            width: 100%;
            padding: 16px 16px 16px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            background: transparent;
            font-size: 16px;
            color: var(--brand-dark);
            transition: all 0.2s ease;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--brand-accent);
        }

        /* Label animasi naik ke atas saat input focus atau ada isi */
        .form-label {
            position: absolute;
            left: 14px;
            top: 18px;
            padding: 0 4px;
            background: var(--surface);
            color: var(--text-secondary);
            font-size: 15px;
            transition: all 0.2s ease;
            pointer-events: none;
            font-weight: 500;
        }

        .form-control:focus ~ .form-label,
        .form-control:not(:placeholder-shown) ~ .form-label {
            top: -10px;
            left: 12px;
            font-size: 12px;
            color: var(--brand-accent);
            font-weight: 700;
        }

        .btn-primary {
            width: 100%;
            padding: 16px;
            background: var(--brand-dark);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background: var(--brand-accent);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
        }

        .auth-footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .auth-footer a {
            color: var(--brand-accent);
            text-decoration: none;
            font-weight: 700;
        }

        .error-message {
            color: #ef4444;
            font-size: 12px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: 600;
        }

        /* Responsif untuk Mobile/Tablet */
        @media (max-width: 900px) {
            body { grid-template-columns: 1fr; }
            .art-panel { display: none; } /* Sembunyikan panel seni di HP agar fokus */
            .login-panel { padding: 20px; }
        }
    </style>
</head>
<body>

    <div class="art-panel">
        <div class="texture"></div> <div class="brand-logo">
            <i class='bx bxs-briefcase-alt-2'></i> Penmedia Loker
        </div>

        <div class="quote-box">
            <p class="quote-text">
                "Kesuksesan bukanlah kunci kebahagiaan. Kebahagiaanlah kunci kesuksesan. Jika Anda mencintai apa yang Anda lakukan, Anda akan sukses."
            </p>
            <div class="quote-author">
                <div class="author-avatar">A</div>
                <span>Putra Satrio</span>
            </div>
        </div>
        
        <div style="z-index: 2; font-size: 12px; opacity: 0.7;">
            © 2024 Penmedia Loker Platform.
        </div>
    </div>

    <div class="login-panel">
        <div class="login-wrapper">
            
            <div class="login-header">
                <div class="brand-logo" style="color: var(--brand-primary); margin-bottom: 20px; display: none;" id="mobile-logo">
                    <i class='bx bxs-briefcase-alt-2'></i> Penmedia
                </div>
                
                <h1>Selamat Datang Kembali</h1>
                <p>Masukan kredensial akun Anda untuk mengakses dashboard loker.</p>
            </div>

            @if(session('error'))
                <div style="background: #fee2e2; color: #991b1b; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #fca5a5; font-size: 14px;">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder=" " required>
                    <label for="email" class="form-label">Alamat Email</label>
                    
                    @error('email')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder=" " required>
                    <label for="password" class="form-label">Kata Sandi</label>
                    
                    @error('password')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <div style="margin-bottom: 24px; display: flex; justify-content: flex-end;">
                   <a href="#" style="font-size: 13px; color: var(--text-secondary); text-decoration: none;">Lupa Password?</a>
                </div>
                
                <button type="submit" class="btn-primary">
                    Masuk ke Akun <i class='bx bx-right-arrow-alt'></i>
                </button>
            </form>
            
            <div style="margin: 20px 0; text-align: center; position: relative;">
                <div style="height: 1px; background: #e2e8f0; margin: 0 20px;"></div>
                <span style="background: var(--surface); padding: 0 15px; color: var(--text-secondary); font-size: 13px; font-weight: 600; position: absolute; top: -8px; left: 50%; transform: translateX(-50%);">ATAU</span>
            </div>
            
            <a href="{{ route('google.redirect') }}" style="width: 100%; padding: 16px; background: white; color: #374151; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; display: flex; justify-content: center; align-items: center; gap: 12px; text-decoration: none; margin-bottom: 10px; {{ !config('services.google.client_id') ? 'opacity: 0.5; pointer-events: none;' : '' }}" onmouseover="this.style.borderColor='#d1d5db'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'">
                <svg width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                {{ config('services.google.client_id') ? 'Masuk dengan Google' : 'Google OAuth (Belum Dikonfigurasi)' }}
            </a>
            
            <div class="auth-footer">
                Belum memiliki akun pelamar? <br>
                <a href="{{ route('register') }}">Buat akun baru sekarang</a>
            </div>
        </div>
    </div>

    <script>
        // Script kecil untuk menampilkan logo di header jika layar kecil (Mobile)
        if (window.innerWidth <= 900) {
            document.getElementById('mobile-logo').style.display = 'flex';
        }
        window.addEventListener('resize', () => {
            document.getElementById('mobile-logo').style.display = window.innerWidth <= 900 ? 'flex' : 'none';
        });
    </script>
</body>
</html>