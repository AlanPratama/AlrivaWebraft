<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Statis',
            'slug' => Str::slug('Statis'),

        ]);

        Type::create([
            'name' => 'Dimanis',
            'slug' => Str::slug('Dimanis'),
        ]);

        Type::create([
            'name' => 'Blog',
            'slug' => Str::slug('Blog'),
        ]);
    }
}
