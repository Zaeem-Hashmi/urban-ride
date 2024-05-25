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
            'driver-list',
            'driver-create',
            'driver-edit',
            'driver-delete',
            'customer-list',
            'customer-edit',
            'customer-create',
            'customer-delete',
            'booking-list',
            'booking-edit',
            'booking-create',
            'booking-delete',
            'staff-list',
            'staff-edit',
            'staff-create',
            'staff-delete',
            'vehicle-list',
            'vehicle-edit',
            'vehicle-create',
            'vehicle-delete',
         ];
         $guard_name = "web";
 
         foreach ($names as $name){
             $permission = Permission::firstOrNew([
                "name"=>$name
             ]);
             $permission->guard_name = $guard_name;
             $permission->save();
         }
    }
}
