<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Atasan extends Seeder
{
    public function run()
    {
        $atasan = [
            [
                'nama_atasan' => 'Ir.Keren Banget',
            ],
            [
                'nama_atasan' => 'Dr.Semangat',
            ],
            [
                'nama_atasan' => 'Dr.Semngat',
            ],
        ];

        $this->db->table('atasan')->insertBatch($atasan);
    }
}
