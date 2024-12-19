<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Bali',
                'slug' => Str::slug('Bali'),
                'description' => 'A tropical paradise with beautiful beaches, temples, and vibrant culture.',
                'location' => 'Indonesia',
                'image' => 'images/bali.jpg', // Example image path
            ],
            [
                'name' => 'Yogyakarta',
                'slug' => Str::slug('Yogyakarta'),
                'description' => 'Known for its traditional arts, cultural heritage, and historical landmarks.',
                'location' => 'Indonesia',
                'image' => 'images/yogyakarta.jpg',
            ],
            [
                'name' => 'Mount Bromo',
                'slug' => Str::slug('Mount Bromo'),
                'description' => 'A majestic volcano offering stunning sunrise views and dramatic landscapes.',
                'location' => 'East Java, Indonesia',
                'image' => 'images/mount-bromo.jpg',
            ],
            [
                'name' => 'Komodo Island',
                'slug' => Str::slug('Komodo Island'),
                'description' => 'Home to the famous Komodo dragons and pristine underwater environments.',
                'location' => 'Indonesia',
                'image' => 'images/komodo-island.jpg',
            ],
            [
                'name' => 'Raja Ampat',
                'slug' => Str::slug('Raja Ampat'),
                'description' => 'A marine paradise with vibrant coral reefs, diverse marine life, and turquoise waters.',
                'location' => 'West Papua, Indonesia',
                'image' => 'images/raja-ampat.jpg',
            ],
        ];

        foreach ($data as $destination) {
            Destination::create($destination);
        }
    }
}
