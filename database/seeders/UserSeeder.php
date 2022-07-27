<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Hafid Muhamad',
            'email'=>'hafidmuhamad204@gmail.com',
            'jabatan'=>'Wakil Direktur',
            'jenis_kelamin'=>'laki-laki',
            'role_id'=>'1',
            'alamat'=>'majalaya',
            'password'=>Hash::make('admin'),
        ]);

        User::create([
            'name'=>'Dandy Juhara',
            'email'=>'dandyjuhara18@gmail.com',
            'jabatan'=>'Direktur',
            'jenis_kelamin'=>'laki-laki',
            'role_id'=>'1',
            'alamat'=>'Wistu Kencana',
            'password'=>Hash::make('admin'),
        ]);
    }
}
