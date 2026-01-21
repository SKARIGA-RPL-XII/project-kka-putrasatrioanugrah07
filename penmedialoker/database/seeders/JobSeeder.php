<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Kami mencari software engineer berpengalaman untuk bergabung dengan tim kami. Anda akan bekerja dengan teknologi terbaru dan berkontribusi pada proyek inovatif.',
            'company' => 'TechCorp Indonesia',
            'location' => 'Jakarta',
            'category' => 'Teknologi',
            'salary' => 12000000,
            'type' => 'Full-time',
            'requirements' => 'Pengalaman 3+ tahun, mahir PHP/Laravel, MySQL',
        ]);

        Job::create([
            'title' => 'Marketing Manager',
            'description' => 'Posisi marketing manager untuk mengelola strategi pemasaran digital dan meningkatkan brand awareness perusahaan.',
            'company' => 'Digital Solutions',
            'location' => 'Surabaya',
            'category' => 'Marketing',
            'salary' => 10000000,
            'type' => 'Full-time',
            'requirements' => 'Pengalaman 5+ tahun di marketing digital',
        ]);

        Job::create([
            'title' => 'UI/UX Designer',
            'description' => 'Bergabunglah dengan tim desain kami untuk menciptakan pengalaman pengguna yang luar biasa.',
            'company' => 'Creative Agency',
            'location' => 'Bandung',
            'category' => 'Desain',
            'salary' => 8000000,
            'type' => 'Full-time',
            'requirements' => 'Portfolio yang kuat, mahir Figma/Sketch',
        ]);

        Job::create([
            'title' => 'Data Analyst',
            'description' => 'Analisis data untuk mendukung pengambilan keputusan bisnis perusahaan.',
            'company' => 'Finance Corp',
            'location' => 'Jakarta',
            'category' => 'Data',
            'salary' => 9000000,
            'type' => 'Full-time',
            'requirements' => 'Pengalaman dengan SQL, Python, Excel',
        ]);

        Job::create([
            'title' => 'Project Manager',
            'description' => 'Mengelola proyek dari awal hingga akhir, memastikan timeline dan budget terpenuhi.',
            'company' => 'Construction Ltd',
            'location' => 'Medan',
            'category' => 'Manajemen',
            'salary' => 15000000,
            'type' => 'Full-time',
            'requirements' => 'Sertifikasi PMP, pengalaman 7+ tahun',
        ]);

        Job::create([
            'title' => 'Content Writer',
            'description' => 'Membuat konten menarik untuk website dan media sosial perusahaan.',
            'company' => 'Media House',
            'location' => 'Yogyakarta',
            'category' => 'Konten',
            'salary' => 6000000,
            'type' => 'Part-time',
            'requirements' => 'Kemampuan menulis yang baik, kreatif',
        ]);
    }
}
