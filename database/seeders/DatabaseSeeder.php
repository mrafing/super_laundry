<?php

namespace Database\Seeders;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'id' => '1',
            'name' =>'Baju',
            'kg' => '5',
            'price' => '30000',
            'image' => 'baju.png'
        ]);
        Product::create([
            'id' => '2',
            'name' =>'Sepatu',
            'kg' => '1',
            'price' => '30000',
            'image' => 'sepatu.png'
        ]);
        Product::create([
            'id' => '3',
            'name' =>'Bed Cover',
            'kg' => '5',
            'price' => '50000',
            'image' => 'bedcover.png'
        ]);
        Product::create([
            'id' => '4',
            'name' =>'Selimut',
            'kg' => '2',
            'price' => '25000',
            'image' => 'selimut.png'
        ]);
    }
}
