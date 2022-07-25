<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\level_jabatan;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        level_jabatan::create([
            'level_jabatan'=>'Direktur',
        ]);

        level_jabatan::create([
            'level_jabatan'=>'Kepala Devisi',
        ]);

        level_jabatan::create([
            'level_jabatan'=>'Kepala Departemen',
        ]);

        level_jabatan::create([
            'level_jabatan'=>'Kepala Seksi',
        ]);
    }
}
