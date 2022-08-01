<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JebatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jabatan::create([
            'jabatan'=>'Direktur Utama',
        ]);

        level_jabatan::create([
            'jabatan'=>'Kepala Devisi',
        ]); 

        level_jabatan::create([
            'jabatan'=>'Kepala Departemen',
        ]);

        level_jabatan::create([
            'jabatan'=>'Kepala Seksi',
        ]);
    }
}
