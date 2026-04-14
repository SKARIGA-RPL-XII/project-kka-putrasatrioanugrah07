<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perusahaan - Penmedia Loker</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --brand-primary: #1e3a8a;
            --brand-accent: #2563eb;
            --brand-dark: #0f172a;
            --text-secondary: #64748b;
            --surface: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow-x: hidden;
        }

        .art-panel {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            padding: 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .texture {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
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

        .register-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: var(--surface);
            position: relative;
            overflow-y: auto;
        }

        .register-wrapper {
            width: 100%;
            max-width: 450px;
        }

        .register-header {
            margin-bottom: 30px;
        }

        .register-header h1 {
            font-size: 32px;
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .register-header p {
            color: var(--text-secondary);
            font-size: 15px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 16px;
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
            margin-top: 10px;
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

        @media (max-width: 900px) {
            body { grid-template-columns: 1fr; overflow-y: auto; }
            .art-panel { display: none; }
            .register-panel { padding: 30px 20px; align-items: flex-start; height: auto; }
            .register-wrapper { margin-top: 20px; }
        }
    </style>
</head>
<body>
    <div class="art-panel">
        <div class="texture"></div>
        
        <div class="brand-logo">
            <i class='bx bxs-buildings'></i> Penmedia Loker
        </div>

        <div class="quote-box">
            <p class="quote-text">
                "Talenta terbaik adalah aset paling berharga perusahaan. Temukan mereka di platform kami."
            </p>
            <div class="quote-author">
                <div class="author-avatar">R</div>
                <span>Richard Branson</span>
            </div>
        </div>
        
        <div style="z-index: 2; font-size: 12px; opacity: 0.7;">
            © 2024 Penmedia Loker Platform.
        </div>
    </div>

    <div class="register-panel">
        <div class="register-wrapper">
            <div class="register-header">
                <h1>Daftar Perusahaan</h1>
                <p>Bergabunglah dengan platform rekrutmen terdepan untuk menemukan talenta terbaik.</p>
            </div>

            <form method="POST" action="{{ route('company.register') }}">
                @csrf
                
                <div class="form-group">
                    <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name') }}" placeholder=" " required>
                    <label for="company_name" class="form-label">Nama Perusahaan</label>
                    @error('company_name')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder=" " required>
                    <label for="email" class="form-label">Email Perusahaan</label>
                    @error('email')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="text" id="industry" name="industry" class="form-control" value="{{ old('industry') }}" placeholder=" " required>
                    <label for="industry" class="form-label">Industri</label>
                    @error('industry')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder=" " required>
                    <label for="password" class="form-label">Password</label>
                    @error('password')
                        <div class="error-message">
                            <i class='bx bxs-error-circle'></i> {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder=" " required>
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                </div>
                
                <button type="submit" class="btn-primary">
                    Daftar Perusahaan <i class='bx bx-buildings'></i>
                </button>
            </form>
            
            <div class="auth-footer">
                Sudah memiliki akun perusahaan? <br>
                <a href="{{ route('login') }}">Masuk disini</a>
            </div>
        </div>
    </div>
</body>
</html>