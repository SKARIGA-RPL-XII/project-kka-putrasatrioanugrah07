<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Profil - JobConnect</title>
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
            <h1 class="text-3xl font-bold text-gray-900">Selamat Datang! Mari lengkapi profil Anda.</h1>
            <p class="mt-2 text-gray-600">Profil yang lengkap meningkatkan peluang Anda dipanggil wawancara hingga 80%.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4 group">
                        <img id="preview-image" src="https://via.placeholder.com/150" alt="Profile" class="w-full h-full object-cover rounded-full border-4 border-blue-50">
                        <label for="photo-upload" class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </label>
                        <input type="file" id="photo-upload" class="hidden" accept="image/*" onchange="previewImage(event)">
                    </div>
                    <h3 class="font-semibold text-lg">Foto Profil</h3>
                    <p class="text-xs text-gray-500 mt-1">Format JPG/PNG, Max 2MB.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <div class="flex justify-between items-end mb-2">
                        <span class="text-sm font-medium text-gray-700">Kelengkapan Profil</span>
                        <span class="text-sm font-bold text-blue-600">30%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                    <ul class="mt-4 space-y-2 text-sm text-gray-600">
                        <li class="flex items-center text-green-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Registrasi Akun
                        </li>
                        <li class="flex items-center">
                            <span class="w-4 h-4 mr-2 border border-gray-300 rounded-full flex-shrink-0"></span>
                            Informasi Dasar & Pendidikan
                        </li>
                        <li class="flex items-center">
                            <span class="w-4 h-4 mr-2 border border-gray-300 rounded-full flex-shrink-0"></span>
                            Preferensi Pekerjaan
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-2">
                <form action="{{ route('user.profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-3">1</span>
                            Informasi Dasar & Pendidikan
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Jurusan</label>
                                <input type="text" name="jurusan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: Teknik Informatika">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Status Pendidikan</label>
                                <select name="status_pendidikan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                                    <option value="">Pilih Status</option>
                                    <option value="kuliah">Kuliah</option>
                                    <option value="smk">SMK</option>
                                    <option value="kerja">Sudah Kerja</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi Kerja Diinginkan</label>
                                <input type="text" name="lokasi_kerja" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: Jakarta, Remote">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-3">2</span>
                            Preferensi Pekerjaan
                        </h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Tipe Pekerjaan yang Diinginkan</label>
                                <select name="tipe_kerja" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                                    <option value="">Pilih Tipe Kerja</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                    <option value="freelance">Freelance</option>
                                    <option value="magang">Magang</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Keahlian</label>
                                <textarea name="keahlian" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: PHP, Laravel, JavaScript, UI/UX Design"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4">
                        <a href="{{ route('user.dashboard') }}" class="px-6 py-2.5 rounded-lg text-gray-700 font-medium hover:bg-gray-100 transition">Nanti Saja</a>
                        <button type="submit" class="px-8 py-2.5 rounded-lg bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                            Simpan Profil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('preview-image');
                output.src = reader.result;
            }
            if(event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        }
    </script>
</body>
</html>