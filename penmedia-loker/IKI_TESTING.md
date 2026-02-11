# ✅ CHECKLIST TESTING LENGKAP - Penmedia Loker

## 🔧 PERSIAPAN AWAL

### Setup Database
```bash
□ php artisan migrate
□ php artisan db:seed --class=AdminSeeder
□ php artisan storage:link
□ php artisan serve
```

### Akun Testing
```
□ Admin: admin@penmedia.com / admin123
□ Company: Buat sendiri di /registercompany
□ User: Buat sendiri di /register
```

---

## 🛡️ ADMIN PANEL (46 Routes Total)

### 1. Login Admin
```
URL: /login
□ Buka halaman login
□ Input email: admin@penmedia.com
□ Input password: admin123
□ Klik Login
□ ✅ Redirect ke /admin/dashboard
□ ✅ Sidebar muncul dengan menu lengkap
□ ✅ Tema blue gradient
```

### 2. Dashboard Admin
```
URL: /admin/dashboard
□ ✅ Statistik muncul (Users, Companies, Jobs, Applications)
□ ✅ Angka statistik benar
□ ✅ Tabel "User Terbaru" muncul (5 data)
□ ✅ Tabel "Perusahaan Terbaru" muncul (5 data)
□ ✅ Tabel "Lowongan Terbaru" muncul (5 data)
□ ✅ Cards dengan hover effect
□ ✅ Gradient icons
```

### 3. Kelola Users
```
URL: /admin/users
□ ✅ Tabel users muncul
□ ✅ Data: Nama, Email, Jurusan, Status, Tanggal
□ ✅ Tombol "Hapus" ada di setiap row
□ ✅ Klik Hapus → Konfirmasi muncul
□ ✅ Konfirmasi Yes → User terhapus
□ ✅ Success message muncul
□ ✅ User hilang dari database
□ ✅ Tidak bisa hapus admin
```

### 4. Kelola Perusahaan
```
URL: /admin/companies
□ ✅ Tabel perusahaan muncul
□ ✅ Data: Nama, Email, Industri, Jumlah Lowongan, Tanggal
□ ✅ Badge jumlah lowongan
□ ✅ Tombol "Hapus" ada
□ ✅ Klik Hapus → Konfirmasi muncul
□ ✅ Konfirmasi Yes → Company terhapus
□ ✅ Lowongan company ikut terhapus
□ ✅ Success message muncul
```

### 5. Kelola Lowongan
```
URL: /admin/jobs
□ ✅ Tabel lowongan muncul
□ ✅ Data: Posisi, Perusahaan, Lokasi, Tipe, Lamaran, Status, Tanggal
□ ✅ Badge jumlah lamaran
□ ✅ Badge status (active/inactive)
□ ✅ Tombol "Hapus" ada
□ ✅ Klik Hapus → Konfirmasi muncul
□ ✅ Konfirmasi Yes → Lowongan terhapus
□ ✅ Success message muncul
```

### 6. Logout Admin
```
□ ✅ Klik tombol Logout di sidebar
□ ✅ Redirect ke homepage
□ ✅ Session cleared
```

---

## 🏢 COMPANY PANEL

### 1. Register Company
```
URL: /registercompany
□ ✅ Form register muncul
□ ✅ Input: Nama Perusahaan, Email, Industri, Password
□ ✅ Validasi email unique
□ ✅ Validasi password min 8 karakter
□ ✅ Validasi password confirmation
□ ✅ Submit → Redirect ke complete profile
```

### 2. Complete Profile Company
```
URL: /company/complete-profile
□ ✅ Form lengkap muncul
□ ✅ Input: Alamat, Tipe, Jurusan, Jumlah Karyawan, Telepon, Website, Deskripsi
□ ✅ Semua field required kecuali website
□ ✅ Submit → Redirect ke dashboard
□ ✅ Success message muncul
```

### 3. Login Company
```
URL: /login
□ ✅ Login dengan email company
□ ✅ Redirect ke /company/dashboard
□ ✅ Sidebar company muncul
```

### 4. Dashboard Company
```
URL: /company/dashboard
□ ✅ Statistik muncul (Total Jobs, Active Jobs, Applicants, Unread, Interviews)
□ ✅ Tabel lowongan muncul
□ ✅ Jumlah aplikasi per lowongan
□ ✅ Status lowongan (active/inactive)
□ ✅ Tombol "Tambah Lowongan"
```

### 5. Post Lowongan
```
URL: /company/lowongan
□ ✅ Tombol "Tambah Lowongan" berfungsi
□ ✅ Modal form muncul
□ ✅ Input: Title, Department, Job Type, Work Location, Location, Education, Salary, Description, Requirements
□ ✅ Validasi semua field
□ ✅ Submit → Lowongan tersimpan
□ ✅ Success message muncul
□ ✅ Lowongan muncul di tabel
```

### 6. Edit Lowongan
```
URL: /company/lowongan
□ ✅ Tombol "Edit" ada di setiap lowongan
□ ✅ Klik Edit → Modal muncul dengan data
□ ✅ Data ter-populate di form
□ ✅ Edit data → Submit
□ ✅ Lowongan terupdate
□ ✅ Success message muncul
```

### 7. Hapus Lowongan
```
URL: /company/lowongan
□ ✅ Tombol "Hapus" ada
□ ✅ Klik Hapus → Konfirmasi
□ ✅ Konfirmasi Yes → Lowongan terhapus
□ ✅ Success message muncul
```

### 8. Lihat Kandidat
```
URL: /company/kandidat
□ ✅ Daftar kandidat muncul
□ ✅ Card per kandidat dengan info lengkap
□ ✅ Avatar dengan initial
□ ✅ Nama, Email, Jurusan, Tahun Lulus, Telepon
□ ✅ Status badge (Pending, Masih Proses, Approved, Cancel)
□ ✅ Tombol "Detail"
□ ✅ Tombol "Download CV" (jika ada)
□ ✅ Tombol "Portfolio" (jika ada)
```

### 9. Detail Kandidat & Update Status
```
URL: /company/kandidat (Modal)
□ ✅ Klik Detail → Modal muncul
□ ✅ Info lengkap kandidat
□ ✅ Surat lamaran lengkap
□ ✅ Dropdown status muncul
□ ✅ Pilih status baru (Pending/Masih Proses/Approved/Cancel)
□ ✅ Klik "Update Status"
□ ✅ Status terupdate di database
□ ✅ Success message muncul
□ ✅ Modal close
□ ✅ Status badge berubah di list
```

### 10. Download CV
```
□ ✅ Klik tombol "Download CV"
□ ✅ File PDF terdownload
□ ✅ File bisa dibuka
```

### 11. Update Profil Company
```
URL: /company/profile
□ ✅ Form profil muncul dengan data existing
□ ✅ Edit data profil
□ ✅ Upload logo (jika ada fitur)
□ ✅ Upload background (jika ada fitur)
□ ✅ Submit → Data terupdate
□ ✅ Success message muncul
```

### 12. Laporan Company
```
URL: /company/laporan
□ ✅ Statistik muncul
□ ✅ Total Jobs, Applicants, Accepted, Rejected
□ ✅ Angka benar
```

---

## 👤 USER PANEL

### 1. Register User
```
URL: /register
□ ✅ Form register muncul
□ ✅ Input: Nama, Email, Password
□ ✅ Validasi email unique
□ ✅ Validasi password min 8 karakter
□ ✅ Validasi password confirmation
□ ✅ Submit → Redirect ke complete profile
```

### 2. Complete Profile User
```
URL: /complete-profile
□ ✅ Form lengkap muncul
□ ✅ Input: Jurusan, Tipe Kerja, Status Pendidikan, Lokasi, Keahlian
□ ✅ Submit → Redirect ke dashboard
□ ✅ Success message muncul
```

### 3. Login User
```
URL: /login
□ ✅ Login dengan email user
□ ✅ Redirect ke /dashboard
□ ✅ Navbar user muncul
```

### 4. Dashboard User (Browse Lowongan)
```
URL: /dashboard
□ ✅ Hero section muncul
□ ✅ Search bar berfungsi
□ ✅ Filter lokasi berfungsi
□ ✅ Filter job type berfungsi
□ ✅ Lowongan featured muncul (6 cards)
□ ✅ Lowongan recent muncul (8 cards)
□ ✅ Rekomendasi lowongan muncul (jika ada)
□ ✅ Favorit perusahaan muncul (jika ada)
□ ✅ Card lowongan dengan info lengkap
□ ✅ Tombol "Lamar" ada
```

### 5. Search & Filter Lowongan
```
URL: /dashboard
□ ✅ Ketik keyword di search → Enter
□ ✅ Hasil filter muncul
□ ✅ Pilih lokasi → Filter berfungsi
□ ✅ Pilih job type → Filter berfungsi
□ ✅ Kombinasi filter berfungsi
```

### 6. Lihat Detail Lowongan
```
URL: /dashboard (Modal)
□ ✅ Klik card lowongan → Modal muncul
□ ✅ Info lengkap lowongan
□ ✅ Deskripsi pekerjaan
□ ✅ Requirements
□ ✅ Salary range
□ ✅ Info perusahaan
□ ✅ Tombol "Lamar Sekarang"
```

### 7. Lamar Lowongan
```
URL: /dashboard (Modal Lamar)
□ ✅ Klik "Lamar Sekarang" → Modal form muncul
□ ✅ Input: Nama Lengkap, Jurusan, Tahun Lulus, Telepon, Surat Lamaran
□ ✅ Upload CV (PDF, max 2MB)
□ ✅ Input Portfolio URL (optional)
□ ✅ Validasi semua field
□ ✅ Submit → Lamaran tersimpan
□ ✅ Success message muncul
□ ✅ Status: Pending
□ ✅ Tidak bisa lamar 2x di lowongan sama
```

### 8. Lihat Status Lamaran
```
URL: /applications
□ ✅ Hero dengan statistik (Total, Pending, Reviewed, Accepted, Rejected)
□ ✅ Stats cards muncul dengan angka benar
□ ✅ Daftar lamaran muncul
□ ✅ Card per lamaran dengan info lengkap
□ ✅ Status badge dengan warna & emoji:
    □ ⏳ Pending (Yellow)
    □ 🔄 Masih Proses (Blue)
    □ ✅ Approved (Green)
    □ ❌ Cancel (Red)
□ ✅ Progress bar 3 tahap
□ ✅ Progress bar update sesuai status
□ ✅ Info lowongan lengkap
□ ✅ Tanggal lamar
□ ✅ Tombol "Lihat Detail"
```

### 9. Filter Lamaran
```
URL: /applications
□ ✅ Search lamaran berfungsi
□ ✅ Filter status berfungsi
□ ✅ Filter tanggal berfungsi
```

### 10. Lihat Perusahaan
```
URL: /companies
□ ✅ Daftar perusahaan muncul
□ ✅ Card per perusahaan
□ ✅ Logo perusahaan (atau initial)
□ ✅ Nama, Industri, Lokasi
□ ✅ Jumlah lowongan aktif
□ ✅ Tombol "Lihat Profil"
□ ✅ Tombol "Favorit" (heart icon)
```

### 11. Search & Filter Perusahaan
```
URL: /companies
□ ✅ Search perusahaan berfungsi
□ ✅ Filter industri berfungsi
□ ✅ Filter size berfungsi
```

### 12. Favorit Perusahaan
```
URL: /companies
□ ✅ Klik icon heart → Perusahaan difavoritkan
□ ✅ Icon berubah jadi filled
□ ✅ Klik lagi → Unfavorite
□ ✅ Icon kembali outline
□ ✅ Data tersimpan di database
```

### 13. Update Profil User
```
URL: /profile
□ ✅ Form profil muncul dengan data existing
□ ✅ Edit: Nama, Email, Jurusan, Tipe Kerja, Status, Lokasi, Keahlian
□ ✅ Submit → Data terupdate
□ ✅ Success message muncul
```

### 14. Career Tips
```
URL: /career-tips
□ ✅ Halaman tips karir muncul
□ ✅ Konten tips muncul
```

---

## 🔐 AUTHENTICATION

### 1. Login
```
URL: /login
□ ✅ Form login muncul
□ ✅ Input email & password
□ ✅ Validasi required
□ ✅ Login berhasil → Redirect sesuai role:
    □ Admin → /admin/dashboard
    □ Company → /company/dashboard
    □ User → /dashboard
□ ✅ Login gagal → Error message
□ ✅ Remember me berfungsi (jika ada)
```

### 2. Logout
```
□ ✅ Klik Logout
□ ✅ Session cleared
□ ✅ Redirect ke homepage
□ ✅ Tidak bisa akses halaman protected
```

### 3. Google OAuth (Jika ada)
```
URL: /auth/google
□ ✅ Tombol "Login with Google" ada
□ ✅ Klik → Redirect ke Google
□ ✅ Login Google berhasil
□ ✅ Callback → User tersimpan
□ ✅ Redirect ke dashboard
```

---

## 🗄️ DATABASE

### 1. Migrations
```bash
□ php artisan migrate
□ ✅ Semua tabel terbuat:
    □ users
    □ job_listings
    □ job_applications
    □ favorites
    □ password_reset_tokens
    □ sessions
    □ cache
    □ jobs
```

### 2. Seeders
```bash
□ php artisan db:seed --class=AdminSeeder
□ ✅ Admin account terbuat
□ ✅ Email: admin@penmedia.com
□ ✅ Password: admin123
□ ✅ Role: admin
```

### 3. Storage Link
```bash
□ php artisan storage:link
□ ✅ Symlink terbuat
□ ✅ Upload CV berfungsi
□ ✅ File tersimpan di storage/app/public
□ ✅ File bisa diakses via /storage/
```

---

## 🎨 UI/UX

### 1. Responsiveness
```
□ ✅ Desktop (1920px) - Layout bagus
□ ✅ Laptop (1366px) - Layout bagus
□ ✅ Tablet (768px) - Layout adjust
□ ✅ Mobile (375px) - Layout mobile-friendly
□ ✅ Sidebar collapse di mobile
□ ✅ Cards stack di mobile
```

### 2. Tema Konsisten
```
□ ✅ User: Blue gradient
□ ✅ Company: Blue gradient
□ ✅ Admin: Blue gradient
□ ✅ Font: Plus Jakarta Sans
□ ✅ Icons: Boxicons
□ ✅ Border radius: 24px
□ ✅ Shadows: Soft & consistent
```

### 3. Animations
```
□ ✅ Hover effects pada cards
□ ✅ Hover effects pada buttons
□ ✅ Smooth transitions
□ ✅ Modal animations
□ ✅ Loading states (jika ada)
```

### 4. Accessibility
```
□ ✅ Contrast ratio bagus
□ ✅ Font size readable
□ ✅ Buttons clickable area cukup
□ ✅ Form labels jelas
□ ✅ Error messages jelas
```

---

## 🔒 SECURITY

### 1. Authentication
```
□ ✅ Password di-hash (bcrypt)
□ ✅ CSRF protection aktif
□ ✅ Session secure
□ ✅ Middleware auth berfungsi
□ ✅ Redirect ke login jika belum auth
```

### 2. Authorization
```
□ ✅ User tidak bisa akses /company/*
□ ✅ User tidak bisa akses /admin/*
□ ✅ Company tidak bisa akses /admin/*
□ ✅ Admin tidak bisa dihapus
□ ✅ Company hanya bisa edit lowongan sendiri
□ ✅ User hanya bisa lihat lamaran sendiri
```

### 3. Validation
```
□ ✅ Email validation
□ ✅ Password min 8 karakter
□ ✅ File upload validation (PDF, max 2MB)
□ ✅ Required fields validation
□ ✅ Unique email validation
□ ✅ URL validation
```

---

## 🐛 ERROR HANDLING

### 1. Form Errors
```
□ ✅ Error message muncul di form
□ ✅ Field yang error di-highlight
□ ✅ Error message jelas
```

### 2. 404 Not Found
```
□ ✅ Akses route tidak ada → 404
□ ✅ Halaman 404 custom (jika ada)
```

### 3. 500 Server Error
```
□ ✅ Error di-log ke storage/logs
□ ✅ User tidak lihat error detail (production)
```

---

## 📊 SUMMARY

### Total Checklist Items: ~200+

### Kategori:
- ✅ Admin Panel: 30+ items
- ✅ Company Panel: 50+ items
- ✅ User Panel: 60+ items
- ✅ Authentication: 10+ items
- ✅ Database: 10+ items
- ✅ UI/UX: 20+ items
- ✅ Security: 15+ items
- ✅ Error Handling: 5+ items

---

## 🚀 CARA TESTING

### 1. Testing Manual
```
1. Buka checklist ini
2. Test satu per satu dari atas
3. Centang (✅) jika berhasil
4. Catat error jika ada
5. Fix error
6. Test ulang
```

### 2. Testing Flow
```
1. Test Admin dulu (paling simple)
2. Test Company (medium)
3. Test User (paling kompleks)
4. Test integrasi (Admin → Company → User)
```

### 3. Testing Scenario
```
Scenario 1: Full Flow Lamaran
- Company post lowongan
- User lamar lowongan
- Company ubah status
- User lihat status berubah
- Admin hapus lowongan

Scenario 2: Full Flow User
- User register
- Complete profile
- Browse lowongan
- Lamar 3 lowongan
- Lihat status
- Favorit perusahaan
- Update profil

Scenario 3: Full Flow Company
- Company register
- Complete profile
- Post 3 lowongan
- Lihat kandidat
- Download CV
- Update status lamaran
- Update profil
```

---

## 📝 NOTES

### Jika Ada Error:
1. Check `storage/logs/laravel.log`
2. Check browser console (F12)
3. Check network tab untuk AJAX errors
4. Check database apakah data tersimpan

### Jika Fitur Tidak Berfungsi:
1. Clear cache: `php artisan cache:clear`
2. Clear config: `php artisan config:clear`
3. Clear route: `php artisan route:clear`
4. Clear view: `php artisan view:clear`
5. Restart server

---

**SELAMAT TESTING! 🎉**
