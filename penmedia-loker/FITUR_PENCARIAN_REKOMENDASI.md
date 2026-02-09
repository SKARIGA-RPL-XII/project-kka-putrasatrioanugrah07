# Fitur Pencarian & Rekomendasi

## Fitur yang Telah Ditambahkan

### 1. Pencarian Lowongan Kerja (Dashboard)
**Lokasi:** `/` atau `/dashboard`

Fitur pencarian dengan 3 parameter:
- **Posisi**: Mencari berdasarkan judul pekerjaan
- **Lokasi**: Mencari berdasarkan lokasi kerja
- **Tipe Kerja**: Filter berdasarkan tipe (Full-time, Part-time, Freelance, Magang)

**Cara Kerja:**
- User mengisi form pencarian di hero section
- Sistem akan filter lowongan berdasarkan kriteria yang dipilih
- Hasil pencarian ditampilkan di section "Rekomendasi Terbaru"

### 2. Rekomendasi Kerja Berdasarkan Profil
**Lokasi:** `/` atau `/dashboard` (hanya untuk user yang login)

Sistem akan menampilkan rekomendasi lowongan berdasarkan:
- **Jurusan**: Mencocokkan dengan department atau title pekerjaan
- **Tipe Kerja**: Mencocokkan dengan preferensi tipe kerja user (full_time, part_time, freelance, magang)

**Cara Kerja:**
- Sistem membaca profil user (jurusan dan tipe_kerja)
- Mencari lowongan yang sesuai dengan profil
- Menampilkan di section khusus "Rekomendasi Untuk Anda"
- Badge "✨ Rekomendasi" ditampilkan pada lowongan yang sesuai

### 3. Pencarian Perusahaan
**Lokasi:** `/companies`

Fitur pencarian dengan 3 parameter:
- **Nama/Industri**: Mencari berdasarkan nama perusahaan atau industri
- **Industri**: Filter berdasarkan industri (Teknologi, Keuangan, Kesehatan, dll)
- **Ukuran**: Filter berdasarkan jumlah karyawan (Startup, Menengah, Besar)

**Cara Kerja:**
- User mengisi form filter di bagian atas halaman
- Sistem akan filter perusahaan berdasarkan kriteria
- Menampilkan jumlah hasil pencarian
- Tombol "Hapus Filter" untuk reset pencarian

## Cara Menggunakan

### Untuk User:
1. **Lengkapi Profil**: Isi jurusan dan tipe kerja di halaman profil
2. **Lihat Rekomendasi**: Sistem otomatis menampilkan lowongan yang sesuai
3. **Gunakan Pencarian**: Filter lowongan sesuai kebutuhan
4. **Cari Perusahaan**: Temukan perusahaan berdasarkan kriteria

### Untuk Developer:
- Controller: `app/Http/Controllers/UserController.php`
- View Dashboard: `resources/views/user/dashboard.blade.php`
- View Companies: `resources/views/user/companies.blade.php`

## Teknologi
- Laravel Query Builder dengan filter dinamis
- Blade templating untuk conditional rendering
- Form GET untuk pencarian (SEO friendly)
- Responsive design

## Catatan
- Rekomendasi hanya muncul jika user sudah login dan mengisi profil
- Pencarian menggunakan LIKE query untuk fleksibilitas
- Filter dapat dikombinasikan untuk hasil lebih spesifik
