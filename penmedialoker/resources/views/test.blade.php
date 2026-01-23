<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .test { color: blue; }
    </style>
</head>
<body>
    <h1>Test Page</h1>
    <p class="test">Jika Anda melihat ini, maka routing dan view bekerja dengan baik!</p>
    <p>Featured Jobs: {{ $featuredJobs->count() }}</p>
    <p>Total Jobs: {{ $totalJobs }}</p>
</body>
</html>