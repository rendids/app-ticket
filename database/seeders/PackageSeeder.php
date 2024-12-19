<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $data = [
            [
                'name' => 'Bali Adventure Package',
                'destination_id' => 1,
                'slug' => Str::slug('Bali Adventure Package'),
                'description' => $faker->paragraph, // Random description
                'price' => 2000000, // Example price in IDR
                'duration' => '3 days 2 nights',
                'image' => $faker->imageUrl(640, 480, 'travel', true, 'Bali Adventure'), // Random image
            ],
            [
                'name' => 'Yogyakarta Heritage Package',
                'destination_id' => 2,
                'slug' => Str::slug('Yogyakarta Heritage Package'),
                'description' => $faker->paragraph,
                'price' => 1500000,
                'duration' => '2 days 1 night',
                'image' => $faker->imageUrl(640, 480, 'travel', true, 'Yogyakarta Heritage'),
            ],
            [
                'name' => 'Mount Bromo Sunrise Package',
                'destination_id' => 3,
                'slug' => Str::slug('Mount Bromo Sunrise Package'),
                'description' => $faker->paragraph,
                'price' => 2500000,
                'duration' => '2 days 1 night',
                'image' => $faker->imageUrl(640, 480, 'nature', true, 'Mount Bromo Sunrise'),
            ],
            [
                'name' => 'Komodo Island Explorer Package',
                'destination_id' => 4,
                'slug' => Str::slug('Komodo Island Explorer Package'),
                'description' => $faker->paragraph,
                'price' => 5000000,
                'duration' => '4 days 3 nights',
                'image' => $faker->imageUrl(640, 480, 'wildlife', true, 'Komodo Island'),
            ],
            [
                'name' => 'Raja Ampat Diving Package',
                'destination_id' => 5,
                'slug' => Str::slug('Raja Ampat Diving Package'),
                'description' => $faker->paragraph,
                'price' => 10000000,
                'duration' => '5 days 4 nights',
                'image' => $faker->imageUrl(640, 480, 'ocean', true, 'Raja Ampat Diving'),
            ],
        ];

        foreach ($data as $package) {
            Package::create($package);
        }
    }
}
