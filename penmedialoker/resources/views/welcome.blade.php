<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-10 rounded-lg shadow-lg text-center max-w-lg">
        <h1 class="text-4xl font-bold mb-4 text-blue-600">Selamat Datang!</h1>
        <p class="text-gray-700 mb-6">Ini adalah halaman awal aplikasi Laravel kamu.</p>
        <a href="{{ route('user.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Lihat User</a>
    </div>
</body>
</html>
