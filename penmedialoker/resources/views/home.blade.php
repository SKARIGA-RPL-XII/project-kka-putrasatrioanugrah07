<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PenMedia.Loker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #1e293b;
            line-height: 1.6;
            overflow-x: hidden;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.03"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.03"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
            z-index: -1;
        }
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .logo-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: pulse 2s infinite;
        }
        .logo-text {
            font-size: 2rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            background: linear-gradient(135deg, #1e293b 0%, #475569 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.025em;
        }
        nav {
            display: flex;
            gap: 3rem;
        }
        nav a {
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
        }
        nav a:hover::after {
            width: 100%;
        }
        nav a:hover {
            color: #1e293b;
            transform: translateY(-2px);
        }
        .hero-section {
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
            backdrop-filter: blur(10px);
            color: white;
            padding: 8rem 0 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1.5rem;
            letter-spacing: -0.025em;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        .stats-section {
            padding: 5rem 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            margin: -2rem 2rem 0;
            border-radius: 2rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            position: relative;
            z-index: 10;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }
        .stat-card {
            text-align: center;
            padding: 3rem 2rem;
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            border-radius: 1.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s;
        }
        .stat-card:hover::before {
            left: 100%;
        }
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            animation: countUp 2s ease-out;
        }
        .stat-label {
            color: #64748b;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .featured-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            margin-bottom: 4rem;
            color: #1e293b;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
        }
        .job-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255,255,255,0.2);
            position: relative;
            overflow: hidden;
        }
        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .job-card:hover::before {
            opacity: 1;
        }
        .job-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .job-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.75rem;
            font-family: 'Playfair Display', serif;
        }
        .job-company {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        .job-location {
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .job-description {
            color: #475569;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .job-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #64748b;
        }
        .job-category {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            color: #1e40af;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="%23ffffff" opacity="0.1"/><circle cx="80" cy="80" r="2" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.05"/></svg>');
            animation: float 10s ease-in-out infinite;
        }
        .cta-title {
            font-size: 3rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            margin-bottom: 2rem;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
            position: relative;
            z-index: 2;
        }
        .cta-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            color: white;
            padding: 1rem 3rem;
            border-radius: 3rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
            display: inline-block;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid rgba(255,255,255,0.3);
            position: relative;
            z-index: 2;
            overflow: hidden;
        }
        .cta-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .cta-btn:hover::before {
            left: 100%;
        }
        .cta-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        footer {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: #94a3b8;
            padding: 3rem 0;
            text-align: center;
            position: relative;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 3rem;
            }
            .jobs-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
        }
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-subtitle {
                font-size: 1.25rem;
            }
            .section-title {
                font-size: 2rem;
            }
            .stats-section {
                margin: -1rem 1rem 0;
                padding: 3rem 0;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            .jobs-grid {
                grid-template-columns: 1fr;
            }
            .job-card {
                padding: 1.5rem;
            }
            .cta-title {
                font-size: 2rem;
            }
            nav {
                gap: 2rem;
            }
        }
        @media (max-width: 480px) {
            .hero-section {
                padding: 4rem 0 3rem;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .stat-card {
                padding: 2rem 1rem;
            }
            .stat-number {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-briefcase logo-icon"></i>
                    <span class="logo-text">PenMedia.Loker</span>
                </div>
                <nav>
                    <a href="/">Beranda</a>
                    <a href="/jobs">Pekerjaan</a>
                    <a href="/users">Pengguna</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">Temukan Pekerjaan Impian Anda</h1>
                <p class="hero-subtitle">Platform lowongan kerja terpercaya untuk karir Anda</p>
            </div>
        </section>

        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">{{ $totalJobs }}</div>
                        <div class="stat-label">Lowongan Tersedia</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">{{ $categories->count() }}</div>
                        <div class="stat-label">Kategori Pekerjaan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Pengguna Aktif</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Tingkat Kepuasan</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-section">
            <div class="container">
                <h2 class="section-title">Lowongan Terbaru</h2>
                <div class="jobs-grid">
                    @forelse($featuredJobs as $job)
                        <div class="job-card">
                            <h3 class="job-title">{{ $job->title }}</h3>
                            <div class="job-company">{{ $job->company }}</div>
                            <div class="job-location">
                                <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                            </div>
                            <p class="job-description">{{ Str::limit($job->description, 100) }}</p>
                            <div class="job-meta">
                                <span class="job-category">{{ $job->category }}</span>
                                <span><i class="fas fa-clock"></i> {{ $job->type }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="job-card">
                            <p style="text-align: center; color: #64748b;">Belum ada lowongan tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Siap Memulai Karir Baru?</h2>
                <a href="/jobs" class="cta-btn">Lihat Semua Lowongan</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 PenMedia.Loker. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
]