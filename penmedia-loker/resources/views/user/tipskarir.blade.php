<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tips Karir - Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/shared.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke="#1e3a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Penmedia<span>Loker</span>
        </a>
        <div class="nav-links">
            <a href="{{ route('user.dashboard') }}">Lowongan</a>
            <a href="{{ route('user.perusahaan') }}">Perusahaan</a>
            <a href="{{ route('user.tipskarir') }}" class="active">Tips Karir</a>
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
                                <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Profil Saya
                            </a>
                            
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="dropdown-item danger">
                                    <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>

    <header class="hero">
        <h1>Panduan Karir Terlengkap</h1>
        <p>Dapatkan tips dan strategi terbaik untuk mengembangkan karir impian Anda dari para ahli industri.</p>
    </header>

    <main class="content">
        <h2 class="section-title">Tips Karir Terpopuler</h2>
        
        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-icon" style="background: #eff6ff; color: #2563eb;">📝</div>
                <h3>Cara Membuat CV yang Menarik</h3>
                <p>Pelajari teknik menulis CV yang dapat menarik perhatian HRD dan meningkatkan peluang dipanggil interview.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>

            <div class="tip-card">
                <div class="tip-icon" style="background: #f0fdf4; color: #16a34a;">💼</div>
                <h3>Persiapan Interview Kerja</h3>
                <p>Tips dan trik menghadapi interview kerja dengan percaya diri dan memberikan kesan terbaik kepada interviewer.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>

            <div class="tip-card">
                <div class="tip-icon" style="background: #fff1f2; color: #e11d48;">🚀</div>
                <h3>Mengembangkan Skill di Era Digital</h3>
                <p>Skill apa saja yang harus dikuasai untuk tetap relevan di dunia kerja yang terus berkembang pesat.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>

            <div class="tip-card">
                <div class="tip-icon" style="background: #fef3c7; color: #d97706;">💰</div>
                <h3>Negosiasi Gaji yang Efektif</h3>
                <p>Strategi dan teknik negosiasi gaji yang tepat untuk mendapatkan kompensasi sesuai dengan kemampuan Anda.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>

            <div class="tip-card">
                <div class="tip-icon" style="background: #f3e8ff; color: #9333ea;">🎯</div>
                <h3>Membangun Personal Branding</h3>
                <p>Cara membangun citra profesional yang kuat di media sosial dan dunia kerja untuk kemajuan karir.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>

            <div class="tip-card">
                <div class="tip-icon" style="background: #ecfdf5; color: #059669;">🌟</div>
                <h3>Work-Life Balance yang Sehat</h3>
                <p>Tips menjaga keseimbangan antara kehidupan kerja dan pribadi untuk produktivitas dan kesehatan mental.</p>
                <a href="#" class="read-more">Baca Selengkapnya →</a>
            </div>
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

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('profileDropdown').classList.remove('active');
            }
        });
    </script>
</body>
</html>