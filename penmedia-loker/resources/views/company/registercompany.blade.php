<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kemitraan Perusahaan | Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-dark: #0f172a;
            --brand-primary: #2563eb;
            --brand-accent: #38bdf8;
            --white: #ffffff;
            --slate-50: #f8fafc;
            --slate-200: #e2e8f0;
            --slate-500: #64748b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--white);
            color: var(--brand-dark);
            line-height: 1.6;
        }

        .split-layout {
            display: flex;
            min-height: 100vh;
        }

        /* --- SISI KIRI: CORPORATE BRANDING --- */
        .visual-side {
            flex: 1;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .visual-side::before {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 100%; height: 100%;
            background: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
            opacity: 0.1;
        }

        .brand-wrapper { position: relative; z-index: 2; }
        .brand-logo { 
            font-size: 28px; 
            font-weight: 800; 
            color: white; 
            text-decoration: none; 
            display: flex; 
            align-items: center; 
            gap: 10px;
        }

        .hero-text { position: relative; z-index: 2; max-width: 500px; }
        .hero-text h1 { font-size: 48px; font-weight: 800; line-height: 1.1; margin-bottom: 24px; }
        .hero-text p { font-size: 18px; color: var(--slate-200); margin-bottom: 40px; }

        .benefit-list { list-style: none; position: relative; z-index: 2; }
        .benefit-item { 
            display: flex; 
            align-items: center; 
            gap: 15px; 
            margin-bottom: 25px; 
            background: rgba(255,255,255,0.05); 
            padding: 15px; 
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .benefit-icon { 
            width: 40px; height: 40px; 
            background: var(--brand-primary); 
            border-radius: 10px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            flex-shrink: 0;
        }

        /* --- SISI KANAN: FORM SEKSI --- */
        .form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px;
            background: var(--slate-50);
        }

        .form-container { width: 100%; max-width: 480px; }
        .form-header { margin-bottom: 35px; }
        .form-header h2 { font-size: 32px; font-weight: 800; color: var(--brand-dark); }
        .form-header p { color: var(--slate-500); font-weight: 500; }

        .grid-inputs { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .full-width { grid-column: span 2; }

        .input-group { margin-bottom: 20px; }
        .input-group label { 
            display: block; 
            font-size: 14px; 
            font-weight: 700; 
            margin-bottom: 8px; 
            color: var(--brand-dark); 
        }
        .input-group input, .input-group select {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--slate-200);
            border-radius: 12px;
            font-family: inherit;
            font-size: 15px;
            transition: all 0.3s ease;
            outline: none;
        }
        .input-group input:focus { 
            border-color: var(--brand-primary); 
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1); 
        }

        .btn-submit {
            width: 100%;
            background: var(--brand-primary);
            color: white;
            padding: 16px;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
            margin-top: 10px;
        }
        .btn-submit:hover { transform: translateY(-2px); background: #1d4ed8; }

        .footer-note { text-align: center; margin-top: 30px; font-size: 14px; color: var(--slate-500); }
        .footer-note a { color: var(--brand-primary); text-decoration: none; font-weight: 700; }

        @media (max-width: 1024px) {
            .visual-side { display: none; }
            .form-side { padding: 40px 20px; }
        }
    </style>
</head>
<body>

    <div class="split-layout">
        <section class="visual-side">
            <div class="brand-wrapper">
                <a href="/" class="brand-logo">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 21H21" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M5 21V7L13 3V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 21V11L13 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Penmedia<span>Pro</span>
                </a>
            </div>

            <div class="hero-text">
                <h1>Temukan Talent Terbaik untuk Bisnis Anda.</h1>
                <p>Bergabunglah dengan 500+ perusahaan yang telah mempercayakan rekrutmen mereka bersama kami.</p>
                
                <div class="benefit-list">
                    <div class="benefit-item">
                        <div class="benefit-icon">🚀</div>
                        <div>
                            <strong style="display:block">Posting Cepat</strong>
                            <small style="color:var(--slate-200)">Iklan lowongan tayang dalam hitungan menit.</small>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🎯</div>
                        <div>
                            <strong style="display:block">Targeted Sourcing</strong>
                            <small style="color:var(--slate-200)">AI kami mencocokkan kandidat dengan kriteria Anda.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-footer">
                <p style="font-size: 13px; opacity: 0.6;">&copy; 2026 Penmedia Loker for Business. All rights reserved.</p>
            </div>
        </section>

        <section class="form-side">
            <div class="form-container">
                <div class="form-header">
                    <h2>Registrasi Perusahaan</h2>
                    <p>Lengkapi data untuk mulai memasang lowongan.</p>
                </div>

                <form action="#" method="POST">
                    <div class="grid-inputs">
                        <div class="input-group full-width">
                            <label>Nama Perusahaan</label>
                            <input type="text" placeholder="PT. Nama Perusahaan Anda" required>
                        </div>

                        <div class="input-group">
                            <label>Nama PIC (Admin)</label>
                            <input type="text" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="input-group">
                            <label>Email Bisnis</label>
                            <input type="email" placeholder="hrd@perusahaan.com" required>
                        </div>

                        <div class="input-group">
                            <label>Industri</label>
                            <select required>
                                <option value="">Pilih Industri</option>
                                <option>Teknologi</option>
                                <option>Manufaktur</option>
                                <option>Kreatif / Media</option>
                                <option>Perbankan</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <label>Skala Perusahaan</label>
                            <select required>
                                <option value="">Jumlah Karyawan</option>
                                <option>1 - 50</option>
                                <option>51 - 200</option>
                                <option>201 - 500</option>
                                <option>500+</option>
                            </select>
                        </div>

                        <div class="input-group full-width">
                            <label>Kata Sandi</label>
                            <input type="password" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Daftarkan Perusahaan</button>
                </form>

                <div class="footer-note">
                    Sudah memiliki akun kemitraan? <a href="{{ route('login') }}">Masuk sebagai Perusahaan</a>
                </div>
            </div>
        </section>
    </div>

</body>
</html>