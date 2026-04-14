<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Profil Perusahaan - JobConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">Job<span class="text-gray-900">Connect</span></span>
                    <span class="ml-2 text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-0.5 rounded">FOR BUSINESS</span>
                </div>
                <div class="flex items-center">
                    <button class="text-gray-500 hover:text-gray-700 text-sm font-medium">Bantuan</button>
                    <span class="mx-4 text-gray-300">|</span>
                    <button class="text-red-500 hover:text-red-700 text-sm font-medium">Keluar</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <div class="mb-8 text-center sm:text-left">
            <h1 class="text-3xl font-bold text-gray-900">Selamat Datang di Panel Rekruter!</h1>
            <p class="mt-2 text-gray-600">Lengkapi profil perusahaan Anda untuk mulai memasang lowongan kerja dan menarik talenta terbaik.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4 group bg-gray-50 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center overflow-hidden">
                        <img id="preview-logo" src="" alt="" class="hidden w-full h-full object-contain">
                        <div id="placeholder-icon" class="text-gray-400 text-center">
                            <svg class="mx-auto h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="text-[10px] uppercase font-bold">Upload Logo</span>
                        </div>
                        <label for="logo-upload" class="absolute inset-0 cursor-pointer"></label>
                        <input type="file" id="logo-upload" class="hidden" accept="image/*" onchange="previewLogo(event)">
                    </div>
                    <h3 class="font-semibold text-lg">Logo Perusahaan</h3>
                    <p class="text-xs text-gray-500 mt-1">Rekomendasi ukuran 500x500px (PNG/JPG).</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <div class="flex justify-between items-end mb-2">
                        <span class="text-sm font-medium text-gray-700">Kelengkapan Data</span>
                        <span class="text-sm font-bold text-blue-600">40%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 40%"></div>
                    </div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center text-green-600 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Akun Terdaftar
                        </li>
                        <li class="flex items-center">
                            <span class="w-4 h-4 mr-2 border border-gray-300 rounded-full flex-shrink-0"></span>
                            Profil Perusahaan
                        </li>
                        <li class="flex items-center">
                            <span class="w-4 h-4 mr-2 border border-gray-300 rounded-full flex-shrink-0"></span>
                            Informasi Kontak & Alamat
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-2">
                <form action="#" method="POST" class="space-y-6">
                    
                    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-3">1</span>
                            Profil Bisnis
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Resmi Perusahaan</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: PT Maju Jaya Teknologi">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bidang Industri</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition bg-white text-gray-600">
                                    <option value="">Pilih Industri</option>
                                    <option value="it">Teknologi / IT</option>
                                    <option value="creative">Kreatif & Media</option>
                                    <option value="finance">Keuangan & Perbankan</option>
                                    <option value="manufacturing">Manufaktur</option>
                                    <option value="retail">Ritel / Perdagangan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ukuran Perusahaan</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition bg-white text-gray-600">
                                    <option value="1-10">1 - 10 Karyawan</option>
                                    <option value="11-50">11 - 50 Karyawan</option>
                                    <option value="51-200">51 - 200 Karyawan</option>
                                    <option value="201+">Lebih dari 200</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat (Tentang Perusahaan)</label>
                                <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Ceritakan visi, misi, atau budaya kerja di perusahaan Anda..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-3">2</span>
                            Alamat & Media Sosial
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap Kantor</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Jl. Sudirman No. 10, Jakarta Pusat">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Website Perusahaan (URL)</label>
                                <input type="url" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="https://www.nama-pt.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Instagram / LinkedIn (Optional)</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="@perusahaan_id">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-3">3</span>
                            Verifikasi Tambahan (Opsional)
                        </h2>
                        <div class="p-4 bg-blue-50 rounded-lg border border-blue-100 mb-6">
                            <p class="text-sm text-blue-700">Mengunggah nomor legalitas membantu meningkatkan kepercayaan calon pelamar.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Induk Berusaha (NIB)</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: 123456789">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email HRD / Rekrutmen</label>
                                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="hrd@nama-pt.com">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <button type="button" class="px-6 py-2.5 rounded-lg text-gray-700 font-medium hover:bg-gray-100 transition">Lewati</button>
                        <button type="submit" class="px-8 py-2.5 rounded-lg bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                            Simpan Profil Bisnis
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function previewLogo(event) {
            const reader = new FileReader();
            const preview = document.getElementById('preview-logo');
            const placeholder = document.getElementById('placeholder-icon');
            
            reader.onload = function(){
                preview.src = reader.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            if(event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        }
    </script>
</body>
</html>