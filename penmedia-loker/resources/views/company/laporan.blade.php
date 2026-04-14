<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - PenMedia Loker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    @include('company.partials.sidebar')

    <!-- Main Content -->
    <main class="lg:ml-80 ml-20 p-8">
        <div class="max-w-7xl mx-auto">
            <div class="mb-8">
                <h1 class="text-5xl font-black text-gray-900 tracking-tight">Laporan & Statistik</h1>
                <p class="text-gray-600 mt-2 text-lg">Pantau performa rekrutmen Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-3xl shadow-lg border-2 border-gray-200 p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Total Lowongan</p>
                    <p class="text-5xl font-black text-blue-600">{{ $stats['total_jobs'] }}</p>
                </div>

                <div class="bg-white rounded-3xl shadow-lg border-2 border-gray-200 p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Total Pelamar</p>
                    <p class="text-5xl font-black text-purple-600">{{ $stats['total_applicants'] }}</p>
                </div>

                <div class="bg-white rounded-3xl shadow-lg border-2 border-gray-200 p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Diterima</p>
                    <p class="text-5xl font-black text-green-600">{{ $stats['accepted'] }}</p>
                </div>

                <div class="bg-white rounded-3xl shadow-lg border-2 border-gray-200 p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Ditolak</p>
                    <p class="text-5xl font-black text-red-600">{{ $stats['rejected'] }}</p>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-lg border-2 border-gray-200 p-8">
                <h2 class="text-3xl font-black text-gray-900 mb-6">Ringkasan Rekrutmen</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-6 bg-gray-50 rounded-2xl">
                        <span class="text-lg font-semibold text-gray-700">Tingkat Penerimaan</span>
                        <span class="text-2xl font-black text-blue-600">
                            {{ $stats['total_applicants'] > 0 ? number_format(($stats['accepted'] / $stats['total_applicants']) * 100, 1) : 0 }}%
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-6 bg-gray-50 rounded-2xl">
                        <span class="text-lg font-semibold text-gray-700">Rata-rata Pelamar per Lowongan</span>
                        <span class="text-2xl font-black text-purple-600">
                            {{ $stats['total_jobs'] > 0 ? number_format($stats['total_applicants'] / $stats['total_jobs'], 1) : 0 }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-6 bg-gray-50 rounded-2xl">
                        <span class="text-lg font-semibold text-gray-700">Status Menunggu</span>
                        <span class="text-2xl font-black text-orange-600">
                            {{ $stats['total_applicants'] - $stats['accepted'] - $stats['rejected'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
