<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
         ];
         $guard_name = "web";
 
         foreach ($names as $name){
             Permission::findOrCreate($name,$guard_name);
         }
 
         $permissions = Permission::pluck("name")->all();
         $users = User::whereHas("roles", function($q) {
             $q->whereIn("name", ["Admin"]);
         })
             ->get();
         foreach ($users as $user){
             $user->syncPermissions($permissions);
         }
    }
}
