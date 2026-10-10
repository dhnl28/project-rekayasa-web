<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Sistem Informasi Akademik',
            'status' => 'Selesai',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, nilai, dan jadwal kuliah.',
            'teknologi' => 'Laravel & Bootstrap',
            'image' => 'project1.jpg',
        ]);

        Project::create([
            'title' => 'E-Commerce SEO Optimization',
            'status' => 'Berjalan',
            'description' => 'Aplikasi optimalisasi struktur heading dan indexing untuk toko online.',
            'teknologi' => 'PHP & Google Search Console',
            'image' => 'project2.jpg',
        ]);

        Project::create([
            'title' => 'Redesign Citra dan Branding',
            'status' => 'Baru',
            'description' => 'Perancangan desain grafis personal branding dan identitas visual usaha.',
            'teknologi' => 'Figma & Canva',
            'image' => 'project3.jpg',
        ]);
    }
}