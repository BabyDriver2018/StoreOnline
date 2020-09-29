<?php

use Illuminate\Database\Seeder;
use App\User;
use App\StoreOnlinePermission\Models\Role;
use App\StoreOnlinePermission\Models\Permission;
use Illuminate\Support\Facades\Hash;
class StoreOnlinePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Admin
        $useradmin = User::where('email','admin@admin.com')->first();
        if($useradmin){
            $useradmin->delete();
        }
        $useradmin=User::create([
            'name' => 'admin',
            'email' => 'email',
            'password' => Hash::make('admin')
        ]);

        //Create Role Admin
        $roladmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrador',
            'full-acces' => 'yes'
        ]);
        $useradmin->roles()->sync([$roladmin->id]);

    }
}
