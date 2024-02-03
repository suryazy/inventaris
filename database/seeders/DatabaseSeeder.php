<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Item;
use App\Models\Category;
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

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'username' => 'admin',
            'role' => 'admin',
            'is_admin' => 1
        ]);

        User::factory(4)->create();

        Category::create([
            'id' => 1,
            'name' => 'ATK'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'kendaraan'
        ]);

        Category::create([
            'id' => 3,
            'name' => 'elektronik'
        ]);

        Category::create([
            'id' => 4,
            'name' => 'perabot'
        ]);

        Item::create([
            'name' => 'laptop',
            'stock' => 8,
            'category_id' => 3,
            'description' => 'Lenovo i5-10500 GTX1650 8GB RAM'
        ]);
        Item::create([
            'name' => 'mouse',
            'stock' => 8,
            'category_id' => 3,
            'description' => 'Lenovo i5-10500 GTX1650 8GB RAM'
        ]);
        Item::create([
            'name' => 'flashdisk',
            'stock' => 30,
            'category_id' => 3,
            'description' => 'sandisk 64GB'
        ]);
        Item::create([
            'name' => 'handphone',
            'stock' => 25,
            'category_id' => 3,
            'description' => 'samsung A50'
        ]);
        Item::create([
            'name' => 'mobil',
            'stock' => 4,
            'category_id' => 2,
            'description' => 'avanza'
        ]);
        Item::create([
            'name' => 'kursi',
            'stock' => 20,
            'category_id' => 4,
            'description' => 'rexus nc1'
        ]);
        Item::create([
            'name' => 'motor',
            'stock' => 7,
            'category_id' => 2,
            'description' => 'honda scoopy'
        ]);
        Item::create([
            'name' => 'pulpen',
            'stock' => 39,
            'category_id' => 1,
            'description' => 'pulpen pilot'
        ]);
        Item::create([
            'name' => 'pensil',
            'stock' => 45,
            'category_id' => 1,
            'description' => 'pensil 2B'
        ]);
        Item::create([
            'name' => 'printer',
            'stock' => 10,
            'category_id' => 3,
            'description' => 'Epson L3110'
        ]);
        Item::create([
            'name' => 'kertas',
            'stock' => 50,
            'category_id' => 1,
            'description' => 'kertas A4'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
