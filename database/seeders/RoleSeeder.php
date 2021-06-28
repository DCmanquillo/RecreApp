<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //se crean los roles (se puede agregar mas roles)
        $roleAdmin = Role::create([ 'name' => 'Admin']);
        $roleInstructor = Role::create([ 'name' => 'Instructor']);
        $roleAdultoMayor = Role::create([ 'name' => 'AdultoMayor']);

        //crear los permisos //syncRoles sirve para agregar el permiso a muchos roles
        Permission::create([ 'name' => 'admin.home'])->syncRoles([ $roleAdmin,$roleInstructor]);//permiso para entrar al dashboard
        Permission::create([ 'name' => 'admin.users.index'])->syncRoles([$roleAdmin]);//permiso para ver la lista de usuarios
        Permission::create([ 'name' => 'admin.users.create'])->syncRoles([$roleAdmin]);
        //rutas de actividad
        Permission::create([ 'name' => 'Activ.create'])->syncRoles([$roleAdmin]);
        Permission::create([ 'name' => 'Activ.index'])->syncRoles([$roleAdmin,$roleInstructor]);
        //rutas de lugares
        Permission::create([ 'name' => 'lugar.create'])->syncRoles([$roleAdmin]);
        Permission::create([ 'name' => 'lugar.index'])->syncRoles([$roleAdmin, $roleInstructor]);


    }
}


