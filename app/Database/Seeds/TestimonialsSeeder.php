<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Ahmad S.',
                'message' => 'Layanan joki tugas sangat membantu! Tugas saya selesai tepat waktu dan kualitasnya bagus.',
                'rating' => 5,
            ],
            [
                'name' => 'Siti R.',
                'message' => 'Edit video yang dipesan sangat memuaskan. Efeknya smooth dan hasilnya profesional.',
                'rating' => 5,
            ],
            [
                'name' => 'Budi K.',
                'message' => 'Website yang dibuat responsif dan fungsional. Terima kasih TOOU Agency!',
                'rating' => 4,
            ],
        ];

        $this->db->table('testimonials')->insertBatch($data);
    }
}
