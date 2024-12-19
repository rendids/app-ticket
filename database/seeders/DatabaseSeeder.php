<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PackageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ]
        );
        User::create(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',
            ]
        );


        $this->call([
            DestinationSeeder::class,
            PackageSeeder::class,

        ]);
    }
}
