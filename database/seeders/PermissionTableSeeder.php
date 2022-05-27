<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'staycation-list',
            'staycation-create',
            'staycation-edit',
            'staycation-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete'
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

        $role1 = Role::create(['name' => 'Guest']);
        $role1->givePermissionTo('staycation-list');

        $role2 = Role::create(['name' => 'Co-Host']);
        $role2->givePermissionTo('staycation-list');

        $role3 = Role::create(['name' => 'Host']);
        $role3->givePermissionTo('staycation-list');
        $role3->givePermissionTo('staycation-create');
        $role3->givePermissionTo('staycation-edit');
        $role3->givePermissionTo('staycation-delete');

        $role4 = Role::create(['name' => 'Admin']);
        $role4->givePermissionTo('user-list');
        $role4->givePermissionTo('user-create');
        $role4->givePermissionTo('user-edit');
        $role4->givePermissionTo('user-delete');
        $role4->givePermissionTo('staycation-list');
        $role4->givePermissionTo('staycation-edit');
        $role4->givePermissionTo('staycation-delete');

        $role5 = Role::create(['name' => 'Super-Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role5->syncPermissions($permissions);


        $user = User::create([
            'fname' => 'superadmin', 
            'lname' => 'admin', 
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        $user->assignRole($role5);

        $user1 = User::create([
            'fname' => 'admin', 
            'lname' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        $user1->assignRole($role4);


        $user2 = User::create([
            'fname' => 'host', 
            'lname' => 'host', 
            'email' => 'host@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        $user2->assignRole($role1);


    }
}
