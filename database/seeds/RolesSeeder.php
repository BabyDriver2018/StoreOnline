<?php

use Illuminate\Database\Seeder;
use App\StoreOnlinePermission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Administrador',
            'slug'=>'',
            'description'=>'El que Administrara los productos de la empresa',
            'full-access'=>'yes'
        ]);
        Role::create([
            'name'=>'Cliente',
            'slug'=>'sfsdf',
            'description'=>'El que podra comprar los productos',
            'full-access'=>'no'
        ]);
    }
}
