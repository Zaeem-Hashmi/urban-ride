<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $roles = [
            'Driver',
            'Customer'
         ];

         foreach ($roles as $role) {
              $role = Role::create(['name' => $role]);
              if ($role->name == "Driver") {
                $role->syncPermissions([
                    'driver-list',
                    'driver-create',
                    'driver-edit',
                    'driver-delete',
                    'booking-list',
                    'booking-edit',
                    'booking-create',
                    'booking-delete',
                    'vehicle-list',
                    'vehicle-edit',
                    'vehicle-create',
                    'vehicle-delete',
                ]);
              }
              if ($role->name == "Customer") {
                $role->syncPermissions([
                    'customer-list',
                    'customer-edit',
                    'customer-create',
                    'customer-delete',
                    'booking-list',
                    'booking-edit',
                    'booking-create',
                    'booking-delete',
                ]);
              }
         }

    }
}
