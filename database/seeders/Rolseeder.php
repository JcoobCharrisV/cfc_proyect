<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() /* PARA EJECUTAR COLOCAR EN CONSOLA: php artisan db:seed --class=RoleSeeder */
    {
        $permisos = [

            'ver-mantenimiento',
            'ver-pacientes',
            'ver-doctores',
            'ver-servicios',
            'ver-contratos',
            'ver-calendario',
            'ver-administracion',

        ];


        /* $roles = [

            'Administrador',
            'Supervisor',
            'Contadores',
            'Agente'

        ];


        foreach($roles as $rol) {
            Role::create(['name'=>$rol]);
        } */

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
