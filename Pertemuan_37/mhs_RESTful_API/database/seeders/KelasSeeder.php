<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['nama_kelas' => 'TI 4A'],
            ['nama_kelas' => 'TI 4B'],
            ['nama_kelas' => 'TI 4C'],
            ['nama_kelas' => 'TI 4D'],
            ['nama_kelas' => 'TI 4E'],
            ['nama_kelas' => 'TI 4F'],
            ['nama_kelas' => 'TI 4G'],
            ['nama_kelas' => 'TI 4H'],
        ];

        DB::table('kelas')->insert($kelas);
    }
}
