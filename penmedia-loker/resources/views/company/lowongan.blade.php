<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Kerja - PenMedia Loker</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            color: #0f172a;
            line-height: 1.6;
            display: flex;
        }
        
        .main-content {
            margin-left: 280px;
            flex: 1;
            min-height: 100vh;
        }
        
        .content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 32px;
        }
        
        .page-header {
            margin-bottom: 40px;
        }
        
        .page-title {
            font-size: 36px;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 8px;
            letter-spacing: -1.5px;
        }
        
        .page-subtitle {
            font-size: 15px;
            color: #64748b;
            font-weight: 500;
        }
        
        .stats-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 32px;
        }
        
        .stat-item {
            background: white;
            padding: 24px;
            border-radius: 20px;
            border: 2px solid #e5e7eb;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .stat-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(37,99,235,0.15);
            border-color: #3b82f6;
        }
        
        .stat-label {
            font-size: 13px;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        
        .stat-value {
            font-size: 28px;
            font-weight: 900;
            color: #2563eb;
        }
        
        .action-bar {
            background: white;
            padding: 24px 32px;
            border-radius: 24px;
            border: 2px solid #e5e7eb;
            margin-bottom: 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .action-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            padding: 14px 28px;
            border-radius: 14px;
            border: none;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(37,99,235,0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37,99,235,0.4);
        }
        
        .jobs-grid {
            display: grid;
            gap: 24px;
        }
        
        .job-card {
            background: white;
            border-radius: 20px;
            border: 2px solid #e5e7eb;
            padding: 24px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #3b82f6);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s;
        }
        
        .job-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(37,99,235,0.12);
            border-color: #3b82f6;
        }
        
        .job-card:hover::before {
            transform: scaleX(1);
        }
        
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .job-info {
            flex: 1;
        }
        
        .job-title {
            font-size: 22px;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }
        
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 16px;
        }
        
        .badge {
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .badge-blue {
            background: #eff6ff;
            color: #2563eb;
        }
        
        .badge-gray {
            background: #f8fafc;
            color: #64748b;
        }
        
        .job-description {
            color: #64748b;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .job-details {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            padding-top: 20px;
            border-top: 2px solid #f8fafc;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #64748b;
            font-size: 14px;
            font-weight: 600;
        }
        
        .detail-item i {
            font-size: 18px;
            color: #3b82f6;
        }
        
        .job-stats {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 20px 28px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(37,99,235,0.3);
            min-width: 120px;
        }
        
        .applicant-count {
            font-size: 36px;
            font-weight: 900;
            color: white;
            line-height: 1;
            margin-bottom: 4px;
        }
        
        .applicant-label {
            font-size: 13px;
            font-weight: 700;
            color: rgba(255,255,255,0.9);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .job-actions {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }
        
        .btn-outline {
            padding: 10px 20px;
            border: 2px solid #e5e7eb;
            background: white;
            color: #64748b;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-outline:hover {
            border-color: #3b82f6;
            color: #2563eb;
            background: #eff6ff;
        }
        
        .btn-action {
            padding: 10px 20px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-action:hover {
            background: #1e40af;
            transform: translateY(-1px);
        }
        
        .empty-state {
            background: white;
            border-radius: 24px;
            border: 2px solid #e5e7eb;
            padding: 60px 32px;
            text-align: center;
        }
        
        .empty-icon {
            width: 96px;
            height: 96px;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .empty-icon i {
            font-size: 44px;
            color: #3b82f6;
        }
        
        .empty-title {
            font-size: 24px;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 12px;
        }
        
        .empty-text {
            font-size: 16px;
            color: #64748b;
            margin-bottom: 32px;
        }
        
        @media (max-width: 768px) {
            .main-content { margin-left: 80px; }
            .content { padding: 24px 16px; }
            .page-title { font-size: 36px; }
            .job-header { flex-direction: column; gap: 20px; }
            .job-stats { width: 100%; }
            .action-bar { flex-direction: column; gap: 16px; }
        }
    </style>
</head>
<body>
    @include('company.partials.sidebar')

    <div class="main-content">
        <div class="content">
            <div class="page-header">
                <h1 class="page-title">Lowongan Kerja</h1>
                <p class="page-subtitle">Kelola dan pantau semua lowongan pekerjaan Anda</p>
            </div>

            <div class="stats-bar">
                <div class="stat-item">
                    <div class="stat-label">Total Lowongan</div>
                    <div class="stat-value">{{ $jobs->count() }}</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Total Pelamar</div>
                    <div class="stat-value">{{ $jobs->sum('applications_count') }}</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Lowongan Aktif</div>
                    <div class="stat-value">{{ $jobs->count() }}</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Rata-rata Pelamar</div>
                    <div class="stat-value">{{ $jobs->count() > 0 ? round($jobs->sum('applications_count') / $jobs->count()) : 0 }}</div>
                </div>
            </div>

            <div class="action-bar">
                <h2 class="action-title">Daftar Lowongan</h2>
                <button onclick="openJobModal()" class="btn-primary">
                    <i class='bx bx-plus'></i>
                    Tambah Lowongan Baru
                </button>
            </div>

            <div class="jobs-grid">
                @forelse($jobs as $job)
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-info">
                            <h3 class="job-title">{{ $job->posisi }}</h3>
                            <div class="job-meta">
                                <span class="badge badge-blue">
                                    <i class='bx bx-briefcase'></i>
                                    {{ ucfirst(str_replace('_', ' ', $job->tipe_pekerjaan)) }}
                                </span>
                                <span class="badge badge-gray">
                                    <i class='bx bx-map'></i>
                                    {{ $job->lokasi }}
                                </span>
                            </div>
                            <p class="job-description">{{ Str::limit($job->deskripsi, 180) }}</p>
                            <div class="job-details">
                                <div class="detail-item">
                                    <i class='bx bx-money'></i>
                                    <span>Rp {{ number_format($job->gaji_min, 0, ',', '.') }} - Rp {{ number_format($job->gaji_max, 0, ',', '.') }}</span>
                                </div>
                                <div class="detail-item">
                                    <i class='bx bx-calendar'></i>
                                    <span>Diposting {{ $job->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="job-actions">
                                <button onclick="editJob({{ $job->id }})" class="btn-outline">Edit Lowongan</button>
                                <button class="btn-action">Lihat Pelamar</button>
                            </div>
                        </div>
                        <div class="job-stats">
                            <div class="applicant-count">{{ $job->applications_count }}</div>
                            <div class="applicant-label">Pelamar</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class='bx bx-briefcase'></i>
                    </div>
                    <h3 class="empty-title">Belum Ada Lowongan</h3>
                    <p class="empty-text">Mulai posting lowongan kerja pertama Anda dan temukan kandidat terbaik</p>
                    <button onclick="openJobModal()" class="btn-primary">
                        <i class='bx bx-plus'></i>
                        Buat Lowongan Pertama
                    </button>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Job Modal -->
    <div id="jobModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
        <div style="background: white; border-radius: 24px; padding: 40px; max-width: 800px; width: 90%; max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 50px rgba(0,0,0,0.25);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 style="font-size: 24px; font-weight: 800; margin: 0; color: #0f172a;">Tambah Lowongan Baru</h2>
                    <p style="color: #64748b; margin: 4px 0 0; font-size: 14px;">Lengkapi informasi lowongan kerja</p>
                </div>
                <button onclick="closeJobModal()" style="background: #f8fafc; border: 1px solid #e2e8f0; width: 36px; height: 36px; border-radius: 50%; font-size: 18px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" onmouseover="this.style.background='#ef4444'; this.style.color='white'" onmouseout="this.style.background='#f8fafc'; this.style.color='#64748b'">&times;</button>
            </div>
            
            <form id="jobForm" method="POST" action="{{ route('company.jobs.store') }}">
                @csrf
                <input type="hidden" id="jobId" name="job_id">
                <input type="hidden" id="methodField" name="_method">
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Posisi Pekerjaan</label>
                        <input type="text" name="title" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" placeholder="Frontend Developer" required>
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Departemen</label>
                        <input type="text" name="department" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" placeholder="Tim Teknologi" required>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Tipe Pekerjaan</label>
                        <select name="job_type" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" required>
                            <option value="">Pilih Tipe</option>
                            <option value="full_time">Full Time</option>
                            <option value="part_time">Part Time</option>
                            <option value="freelance">Freelance</option>
                            <option value="internship">Magang</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Lokasi Kerja</label>
                        <select name="work_location" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" required>
                            <option value="">Pilih Lokasi</option>
                            <option value="remote">Remote</option>
                            <option value="onsite">On-site</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Kota</label>
                        <input type="text" name="location" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" placeholder="Jakarta" required>
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Minimum Pendidikan</label>
                        <select name="education_level" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="sma">SMA/SMK</option>
                            <option value="d3">Diploma (D3)</option>
                            <option value="s1">Sarjana (S1)</option>
                            <option value="s2">Magister (S2)</option>
                        </select>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Gaji Minimum (IDR)</label>
                        <input type="text" id="salary_min_display" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" placeholder="Rp 5.000.000" required>
                        <input type="hidden" name="salary_min" id="salary_min">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Gaji Maximum (IDR)</label>
                        <input type="text" id="salary_max_display" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px;" placeholder="Rp 10.000.000" required>
                        <input type="hidden" name="salary_max" id="salary_max">
                    </div>
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Deskripsi Pekerjaan</label>
                    <textarea name="description" rows="4" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px; resize: vertical;" placeholder="Jelaskan tugas dan tanggung jawab..." required></textarea>
                </div>
                
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: #0f172a; font-size: 13px;">Persyaratan</label>
                    <textarea name="requirements" rows="3" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px; resize: vertical;" placeholder="Sebutkan persyaratan yang dibutuhkan..." required></textarea>
                </div>
                
                <div style="display: flex; gap: 12px; justify-content: flex-end;">
                    <button type="button" onclick="closeJobModal()" style="padding: 12px 24px; background: #f8fafc; color: #64748b; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; font-weight: 600; font-size: 14px;" onmouseover="this.style.background='#e2e8f0'" onmouseout="this.style.background='#f8fafc'">Batal</button>
                    <button type="submit" style="padding: 12px 24px; background: linear-gradient(135deg, #2563eb, #3b82f6); color: white; border: none; border-radius: 12px; cursor: pointer; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(37,99,235,0.3);" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">Simpan Lowongan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let isEditMode = false;
        let currentJobId = null;

        // Format rupiah
        function formatRupiah(angka) {
            if (!angka) return '';
            const number = angka.toString().replace(/[^,\d]/g, '');
            const split = number.split(',');
            const sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            return 'Rp ' + rupiah;
        }

        // Parse rupiah ke angka
        function parseRupiah(rupiah) {
            return rupiah.replace(/[^\d]/g, '');
        }

        // Event listener untuk input gaji minimum
        document.getElementById('salary_min_display').addEventListener('keyup', function(e) {
            const value = parseRupiah(e.target.value);
            e.target.value = formatRupiah(value);
            document.getElementById('salary_min').value = value;
        });

        // Event listener untuk input gaji maximum
        document.getElementById('salary_max_display').addEventListener('keyup', function(e) {
            const value = parseRupiah(e.target.value);
            e.target.value = formatRupiah(value);
            document.getElementById('salary_max').value = value;
        });

        function openJobModal() {
            isEditMode = false;
            currentJobId = null;
            document.getElementById('jobModal').style.display = 'flex';
            document.querySelector('#jobModal h2').textContent = 'Tambah Lowongan Baru';
            document.getElementById('jobForm').reset();
            document.getElementById('salary_min_display').value = '';
            document.getElementById('salary_max_display').value = '';
            document.getElementById('jobForm').action = '{{ route("company.jobs.store") }}';
            document.getElementById('methodField').value = '';
        }

        function editJob(jobId) {
            isEditMode = true;
            currentJobId = jobId;
            
            fetch(`/company/jobs/${jobId}`)
                .then(response => response.json())
                .then(job => {
                    document.getElementById('jobModal').style.display = 'flex';
                    document.querySelector('#jobModal h2').textContent = 'Edit Lowongan';
                    document.getElementById('jobForm').action = `/company/jobs/${jobId}`;
                    document.getElementById('methodField').value = 'PUT';
                    
                    document.querySelector('[name="title"]').value = job.title;
                    document.querySelector('[name="department"]').value = job.department;
                    document.querySelector('[name="job_type"]').value = job.job_type;
                    document.querySelector('[name="work_location"]').value = job.work_location;
                    document.querySelector('[name="location"]').value = job.location;
                    document.querySelector('[name="education_level"]').value = job.education_level;
                    
                    // Format gaji untuk tampilan
                    document.getElementById('salary_min_display').value = formatRupiah(job.salary_min);
                    document.getElementById('salary_min').value = job.salary_min;
                    document.getElementById('salary_max_display').value = formatRupiah(job.salary_max);
                    document.getElementById('salary_max').value = job.salary_max;
                    
                    document.querySelector('[name="description"]').value = job.description;
                    document.querySelector('[name="requirements"]').value = job.requirements;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal memuat data lowongan');
                });
        }

        function closeJobModal() {
            document.getElementById('jobModal').style.display = 'none';
            document.getElementById('jobForm').reset();
        }

        // Close modal when clicking outside
        document.getElementById('jobModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeJobModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeJobModal();
            }
        });
    </script>
</body>
</html>
