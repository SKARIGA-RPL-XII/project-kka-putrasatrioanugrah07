<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil - Penmedia Loker</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --brand-primary: #1e40af;
            --brand-accent: #2563eb;
            --brand-dark: #1e293b;
            --surface: #ffffff;
            --text-secondary: #64748b;
            --success: #10b981;
            --success-light: #d1fae5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-accent) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-container {
            background: var(--surface);
            border-radius: 20px;
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--success);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: bounceIn 0.6s ease-out;
        }

        .success-icon i {
            font-size: 40px;
            color: white;
        }

        .success-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 15px;
        }

        .success-message {
            color: var(--text-secondary);
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .user-info {
            background: var(--success-light);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            border-left: 4px solid var(--success);
        }

        .user-info h3 {
            color: var(--brand-dark);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .user-info p {
            color: var(--text-secondary);
            font-size: 14px;
        }

        .progress-section {
            margin-bottom: 30px;
        }

        .progress-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--brand-dark);
            margin-bottom: 15px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--success) 0%, var(--brand-accent) 100%);
            width: 0%;
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .progress-text {
            font-size: 14px;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .redirect-info {
            background: #f8fafc;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .redirect-info i {
            font-size: 24px;
            color: var(--brand-accent);
            margin-bottom: 10px;
        }

        .redirect-info p {
            color: var(--text-secondary);
            font-size: 14px;
            margin-bottom: 15px;
        }

        .btn-dashboard {
            background: var(--brand-dark);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .btn-dashboard:hover {
            background: var(--brand-accent);
            transform: translateY(-2px);
        }

        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }

        @media (max-width: 600px) {
            .success-container { padding: 30px 20px; }
            .success-title { font-size: 24px; }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">
            <i class='bx bx-check'></i>
        </div>

        <h1 class="success-title">Registrasi Berhasil!</h1>
        <p class="success-message">
            Selamat datang di Penmedia Loker! Akun Anda telah berhasil dibuat dan siap digunakan.
        </p>

        <div class="user-info">
            <h3>{{ $user->name }}</h3>
            <p>{{ $user->email }}</p>
        </div>

        <div class="progress-section">
            <div class="progress-title">Menyiapkan dashboard Anda...</div>
            <div class="progress-bar">
                <div class="progress-fill" id="progressFill"></div>
            </div>
            <div class="progress-text" id="progressText">0%</div>
        </div>

        <div class="redirect-info">
            <i class='bx bx-time'></i>
            <p>Anda akan diarahkan ke dashboard dalam <span id="countdown">5</span> detik</p>
            <a href="{{ route('dashboard') }}" class="btn-dashboard">
                Lanjut ke Dashboard <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>

    <script>
        let progress = 0;
        let countdown = 5;
        
        const progressFill = document.getElementById('progressFill');
        const progressText = document.getElementById('progressText');
        const countdownElement = document.getElementById('countdown');

        const interval = setInterval(() => {
            progress += 20;
            countdown--;
            
            progressFill.style.width = progress + '%';
            progressText.textContent = progress + '%';
            countdownElement.textContent = countdown;
            
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    window.location.href = '{{ route("dashboard") }}';
                }, 500);
            }
        }, 1000);
    </script>
</body>
</html>