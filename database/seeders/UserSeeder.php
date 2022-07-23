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
            'name'=>'hafid',
            'email'=>'hafidmuhamad204@gmail.com',
            'jabatan'=>'ketua',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'majalaya',
            'password'=>Hash::make('admin'),
        ]);
    }
}
