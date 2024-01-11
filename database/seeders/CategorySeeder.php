<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Company Profile'
        ]);

        Category::create([
            'name' => 'eCommerce'
        ]);

        Category::create([
            'name' => 'Profile UMKM'
        ]);

        Category::create([
            'name' => 'Portofolio'
        ]);
    }
}
