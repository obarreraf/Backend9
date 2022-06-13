<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //Role creation
     $roleAdmin = Role::create(['name' => 'admin']);
     $roleGuest = Role::create(['name' => 'guest']);

     //Permission Assigment
     Permission::create(['name' => 'show:role']);
     Permission::create(['name' => 'create:role']);
     Permission::create(['name' => 'edit:role']);
     Permission::create(['name' => 'delete:role']);

     Permission::create(['name' => 'show:permission']);

     Permission::create(['name' => 'show:user']);
     Permission::create(['name' => 'create:user']);
     Permission::create(['name' => 'edit:user']);
     Permission::create(['name' => 'delete:user']);


     $user = new User;
     $user->name = 'Admin';
     $user->email = 'admin@mail.com';
     $user->password = bcrypt('12345678');
     $user->save();
     $user->assignRole($roleAdmin);

     $user = new User;
     $user->name = 'Guest';
     $user->email = 'guest@mail.com';
     $user->password = bcrypt('12345678');
     $user->save();
     $user->assignRole($roleGuest);

    }
}
