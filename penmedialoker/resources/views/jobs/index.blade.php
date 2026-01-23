<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pekerjaan - Penmedia Loker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 50%, #e2e8f0 100%);
            min-height: 100vh;
            color: #1e293b;
            line-height: 1.6;
        }
        header {
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .logo-icon {
            font-size: 2.5rem;
            color: #1e40af;
        }
        .logo-text {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1e293b;
            letter-spacing: -0.025em;
        }
        nav {
            display: flex;
            gap: 2rem;
        }
        nav a {
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #1e40af;
        }
        .search-section {
            background: #ffffff;
            padding: 2rem 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .search-form {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }
        .search-input {
            flex: 1;
            min-width: 200px;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .search-input:focus {
            outline: none;
            border-color: #1e40af;
        }
        .category-select {
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 1rem;
            background: white;
            min-width: 150px;
        }
        .search-btn {
            background: #1e40af;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .search-btn:hover {
            background: #1e3a8a;
        }
        .jobs-section {
            padding: 2rem 0;
        }
        .job-card {
            background: #ffffff;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }
        .job-card:hover {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .job-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }
        .job-company {
            color: #1e40af;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        .job-location {
            color: #64748b;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        .job-description {
            color: #475569;
            margin-bottom: 1rem;
            line-height: 1.5;
        }
        .job-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #64748b;
        }
        .job-category {
            background: #dbeafe;
            color: #1e40af;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }
        .pagination a {
            padding: 0.5rem 0.75rem;
            background: #ffffff;
            color: #1e40af;
            text-decoration: none;
            border-radius: 0.25rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .pagination a:hover,
        .pagination .active {
            background: #1e40af;
            color: white;
        }
        @media (max-width: 767px) {
            .search-form {
                flex-direction: column;
                align-items: stretch;
            }
            .job-meta {
                flex-direction: column;
                gap: 0.5rem;
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
                    <span class="logo-text">Penmedia Loker</span>
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
        <section class="search-section">
            <div class="container">
                <form method="GET" action="{{ route('jobs.index') }}" class="search-form">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari pekerjaan..." class="search-input">
                    <select name="category" class="category-select">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </form>
            </div>
        </section>

        <section class="jobs-section">
            <div class="container">
                @if($jobs->count() > 0)
                    @foreach($jobs as $job)
                        <div class="job-card">
                            <h3 class="job-title">{{ $job->title }}</h3>
                            <div class="job-company">{{ $job->company }}</div>
                            <div class="job-location">
                                <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                            </div>
                            <p class="job-description">{{ Str::limit($job->description, 200) }}</p>
                            <div class="job-meta">
                                <span class="job-category">{{ $job->category }}</span>
                                <span><i class="fas fa-clock"></i> {{ $job->type }}</span>
                                @if($job->salary)
                                    <span><i class="fas fa-dollar-sign"></i> {{ number_format($job->salary, 0, ',', '.') }}</span>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    {{ $jobs->appends(request()->query())->links() }}
                @else
                    <div class="job-card">
                        <p style="text-align: center; color: #64748b;">Tidak ada pekerjaan yang ditemukan.</p>
                    </div>
                @endif
            </div>
        </section>
    </main>
</body>
</html>