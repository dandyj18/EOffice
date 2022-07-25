<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kategori::create([
            'no_kategori'=>'1001',
            'nama_kategori'=>'Surat Keluar',
        ]);

        kategori::create([
            'no_kategori'=>'1002',
            'nama_kategori'=>'Surat Masuk',
        ]);

        kategori::create([
            'no_kategori'=>'1003',
            'nama_kategori'=>'Disposisi',
        ]);

        kategori::create([
            'no_kategori'=>'1004',
            'nama_kategori'=>'Memo',
        ]);
    }
}
