<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => '', // INI BELUM YAHHH
            'image_link' => 'NO',
            'name' => 'Company Profile Website',
            'slug' => Str::slug('Company Profile Website'),
            'estimation' => 30,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, nihil.',
            'price_before' => 3000,
            'price_after' => 1500,
            'sold' => 10,
            'status' => 'avalaible'
        ]);
    }
}
