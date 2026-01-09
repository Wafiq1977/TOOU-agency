<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Jasa Joki Tugas Sekolah',
                'description' => 'Bantuan profesional untuk menyelesaikan tugas sekolah, kuliah, esai, laporan, presentasi, dan tugas akademik lainnya.',
                'price' => 50000,
                'category' => 'joki',
            ],
            [
                'name' => 'Jasa Edit Video',
                'description' => 'Pengeditan video profesional dengan efek visual, transisi, dan perbaikan gambar.',
                'price' => 75000,
                'category' => 'edit',
            ],
            [
                'name' => 'Jasa Edit Foto',
                'description' => 'Perbaikan gambar, retouching, efek visual, dan pengeditan foto berkualitas tinggi.',
                'price' => 30000,
                'category' => 'edit',
            ],
            [
                'name' => 'Pembuatan Website',
                'description' => 'Pengembangan website responsif, aplikasi web, dan integrasi backend.',
                'price' => 200000,
                'category' => 'web',
            ],
            [
                'name' => 'Pembuatan Aplikasi Mobile',
                'description' => 'Pengembangan aplikasi mobile untuk Android dan iOS dengan fitur lengkap.',
                'price' => 500000,
                'category' => 'web',
            ],
            [
                'name' => 'Desain Grafis',
                'description' => 'Pembuatan poster, brosur, flyer, branding, ilustrasi, dan materi promosi lainnya.',
                'price' => 100000,
                'category' => 'design',
            ],
        ];

        $this->db->table('services')->insertBatch($data);
    }
}
