<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SetupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $sa = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $staff = Role::create(['name' => 'Staff']);
        $partner = Role::create(['name' => 'Partner']);
        $person = Role::create(['name' => 'Person']);
        $guest = Role::create(['name' => 'Guest']);

        //Permissions

        $createStaff = Permission::create(['name' => 'create staff']);
        $editStaff = Permission::create(['name' => 'edit staff']);
        $deleteStaff = Permission::create(['name' => 'delete staff']);
        $getStaff = Permission::create(['name' => 'get staff']);

        $createPartner = Permission::create(['name' => 'create partner']);
        $editPartner = Permission::create(['name' => 'edit partner']);
        $deletePartner = Permission::create(['name' => 'delete partner']);
        $getPartner = Permission::create(['name' => 'get partner']);

        $createPerson = Permission::create(['name' => 'create person']);
        $editPerson = Permission::create(['name' => 'edit person']);
        $deletePerson = Permission::create(['name' => 'delete person']);
        $getPerson = Permission::create(['name' => 'get person']);

        //Admin
        $admin->syncPermissions([
            $createStaff,
            $editStaff,
            $deleteStaff,
            $getStaff,
            $createPartner,
            $editPartner,
            $deletePartner,
            $getPartner,
            $createPerson,
            $editPerson,
            $deletePerson,
            $getPerson
        ]);

        //Admin
        $staff->syncPermissions([
            $createPartner,
            $editPartner,
            $deletePartner,
            $getPartner,
            $createPerson,
            $editPerson,
            $deletePerson,
            $getPerson
        ]);

        //Partner
        $staff->syncPermissions([
            $getPerson
        ]);

        //Person
        $staff->syncPermissions([
            $getPerson
        ]);

        //Guest
        $guest->syncPermissions([
            $getPerson
        ]);
    }
}
