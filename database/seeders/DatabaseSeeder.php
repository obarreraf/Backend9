<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);
    
        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('customer'); // assuming 'supscription' was a typo
        });
        Product::factory(50)->create();
    }
}
