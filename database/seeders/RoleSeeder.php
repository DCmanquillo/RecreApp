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

        //crear los permisos
        Permission::create([ 'name' => 'admin.home'])->syncRoles([ $roleAdmin]);//permiso para entrar al dashboard
        Permission::create([ 'name' => 'admin.users.index'])->assignRole($roleAdmin);//permiso para ver la lista de usuarios

        Permission::create([ 'name' => 'Activ.listar'])->syncRoles([ $roleInstructor]);//permiso para entrar al dashboard
        Permission::create([ 'name' => 'Activ.create'])->assignRole($roleInstructor);//permiso para ver la lista de usuarios


    }
}
