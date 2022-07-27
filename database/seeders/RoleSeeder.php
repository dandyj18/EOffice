<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'nama_role'=>'Admin',
        ]);

        Role::create([
            'nama_role'=>'Direktur',
        ]);

        Role::create([
            'nama_role'=>'Devisi',
        ]);
        Role::create([
            'nama_role'=>'Departemen',
        ]);
        Role::create([
            'nama_role'=>'Seksi',
        ]);

    }
}
