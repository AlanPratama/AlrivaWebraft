<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Statis'
        ]);

        Type::create([
            'name' => 'Dimanis'
        ]);

        Type::create([
            'name' => 'Blog'
        ]);
    }
}
