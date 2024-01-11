<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Company Profile',
            'slug' => Str::slug('Company Profile'),
        ]);

        Category::create([
            'name' => 'eCommerce',
            'slug' => Str::slug('eCommerce'),
        ]);

        Category::create([
            'name' => 'Profile UMKM',
            'slug' => Str::slug('Profile UMKM'),
        ]);

        Category::create([
            'name' => 'Portofolio',
            'slug' => Str::slug('Portofolio'),
        ]);
    }
}
