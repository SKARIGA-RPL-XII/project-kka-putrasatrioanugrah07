<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Perusahaan - Penmedia Loker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            --blue-primary: #2563eb;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --white: #ffffff;
            --bg-body: #f8fafc;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
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
        }

        .main-content {
            margin-left: 280px;
            flex: 1;
            min-height: 100vh;
        }

        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            padding: 60px 20px;
            color: var(--white);
        }

        .hero-content {
            max-width: 1100px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 36px;
            font-weight: 900;
            margin: 0 0 8px;
        }

        .hero p {
            color: #cbd5e1;
            margin: 0;
        }

        .content {
            max-width: 1100px;
            margin: -40px auto 80px;
            padding: 0 20px;
            position: relative;
            z-index: 20;
        }

        .profile-card {
            background: white;
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 12px 40px rgba(37, 99, 235, 0.12);
            border: 2px solid #e5e7eb;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-main);
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--blue-primary);
            box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .upload-area {
            border: 2px dashed #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .upload-area:hover {
            border-color: var(--blue-primary);
            background: rgba(37,99,235,0.05);
        }

        .upload-area input[type="file"] {
            display: none;
        }

        .upload-preview {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-top: 12px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1e40af, #2563eb);
            color: white;
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(37,99,235,0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37,99,235,0.4);
        }

        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        @media (max-width: 768px) {
            .sidebar { width: 80px; }
            .main-content { margin-left: 80px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('company.partials.sidebar')

    <div class="main-content">
        <header class="hero">
            <div class="hero-content">
                <h1>Profil Perusahaan</h1>
                <p>Kelola informasi profil perusahaan Anda</p>
            </div>
        </header>

        <main class="content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="profile-card">
                <form method="POST" action="{{ route('company.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Nama Perusahaan *</label>
                        <input type="text" name="company_name" value="{{ old('company_name', Auth::user()->company_name) }}" required>
                        @error('company_name')
                            <small style="color: #ef4444;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Perusahaan</label>
                        <textarea name="company_description">{{ old('company_description', Auth::user()->company_description) }}</textarea>
                        @error('company_description')
                            <small style="color: #ef4444;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Logo Perusahaan</label>
                            <div class="upload-area" onclick="document.getElementById('logo').click()">
                                <i class='bx bx-upload' style="font-size: 32px; color: var(--blue-primary);"></i>
                                <p style="margin: 8px 0 0; color: var(--text-muted);">Klik untuk upload logo</p>
                                <input type="file" id="logo" name="company_logo" accept="image/*" onchange="previewImage(this, 'logoPreview')">
                                @if(Auth::user()->company_logo)
                                    <img src="{{ asset('storage/' . Auth::user()->company_logo) }}" id="logoPreview" class="upload-preview">
                                @else
                                    <img id="logoPreview" class="upload-preview" style="display: none;">
                                @endif
                            </div>
                            @error('company_logo')
                                <small style="color: #ef4444;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Background Perusahaan</label>
                            <div class="upload-area" onclick="document.getElementById('background').click()">
                                <i class='bx bx-image' style="font-size: 32px; color: var(--blue-primary);"></i>
                                <p style="margin: 8px 0 0; color: var(--text-muted);">Klik untuk upload background</p>
                                <input type="file" id="background" name="company_background" accept="image/*" onchange="previewImage(this, 'backgroundPreview')">
                                @if(Auth::user()->company_background)
                                    <img src="{{ asset('storage/' . Auth::user()->company_background) }}" id="backgroundPreview" class="upload-preview">
                                @else
                                    <img id="backgroundPreview" class="upload-preview" style="display: none;">
                                @endif
                            </div>
                            @error('company_background')
                                <small style="color: #ef4444;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="company_address" value="{{ old('company_address', Auth::user()->company_address) }}">
                        @error('company_address')
                            <small style="color: #ef4444;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="company_phone" value="{{ old('company_phone', Auth::user()->company_phone) }}">
                            @error('company_phone')
                                <small style="color: #ef4444;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" name="company_website" value="{{ old('company_website', Auth::user()->company_website) }}" placeholder="https://example.com">
                            @error('company_website')
                                <small style="color: #ef4444;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; justify-content: flex-end; margin-top: 32px;">
                        <a href="{{ route('company.dashboard') }}" style="padding: 16px 32px; background: #f8fafc; color: #64748b; border: 2px solid #e2e8f0; border-radius: 12px; text-decoration: none; font-weight: 600;">Batal</a>
                        <button type="submit" class="btn-primary">Simpan Profil</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
