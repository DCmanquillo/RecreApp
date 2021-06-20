<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Daniela',
            'apellido' => 'Campo',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin0000'),
            'numero_documento' => '11013131',
            'tipo_documento' => 'cedula',
            'fecha_nacimiento' => '23/12/0000',
            'telefono' => '3107804134',
            'genero' => 'femenino',
            'roles_id' =>'1'

        ])->assignRole('Admin');

        User::factory(0)->create();
    }
}
