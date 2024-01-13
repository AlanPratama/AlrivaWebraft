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
            'type_id' => 3,
            'category_id' => 1,
            'image' => 'assets/images/service-image/company-website.jpg',
            'image_link' => 'NO',
            'name' => 'Company Profile Website',
            'slug' => Str::slug('Company Profile Website'),
            'estimation' => 30,
            'description' => 'Website Informasi Tentang Perusahaan Kamu, Yang Akan Membuat Perusahaan Kamu Menjadi Lebih Terlihat Elegan.',
            'price_before' => 800,
            'price_after' => 249,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/blog-pendidikan.jpg',
            'image_link' => 'NO',
            'name' => 'Blog Pendidikan',
            'slug' => Str::slug('Blog Pendidikan'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 800,
            'price_after' => 199,
            'sold' => 10,
            'status' => 'avalaible'
        ]);

        Service::create([
            'type_id' => 2,
            'category_id' => 1,
            'image' => 'assets/images/service-image/ecommerce.jpg',
            'image_link' => 'NO',
            'name' => 'Website eCommerce',
            'slug' => Str::slug('Website eCommerce'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 8000,
            'price_after' => 5999,
            'sold' => 10,
            'status' => 'avalaible'
        ]);

        Service::create([
            'type_id' => 2,
            'category_id' => 1,
            'image' => 'assets/images/service-image/event.png',
            'image_link' => 'NO',
            'name' => 'Website Event',
            'slug' => Str::slug('Website Event'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 3000,
            'price_after' => 1499,
            'sold' => 10,
            'status' => 'avalaible'
        ]);

        Service::create([
            'type_id' => 2,
            'category_id' => 1,
            'image' => 'assets/images/service-image/food.png',
            'image_link' => 'NO',
            'name' => 'Website Resep Kuliner',
            'slug' => Str::slug('Website Resep Kuliner'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 800,
            'price_after' => 249,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 2,
            'category_id' => 1,
            'image' => 'assets/images/service-image/forum-komunitas.png',
            'image_link' => 'NO',
            'name' => 'Website Forum Komunitas',
            'slug' => Str::slug('Website Forum Komunitas'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 800,
            'price_after' => 249,
            'sold' => 10,
            'status' => 'avalaible'
        ]);

        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/game.png',
            'image_link' => 'NO',
            'name' => 'Website Informasi Game',
            'slug' => Str::slug('Website Informasi Game'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 500,
            'price_after' => 99,
            'sold' => 10,
            'status' => 'avalaible'
        ]);

        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/portofolio.png',
            'image_link' => 'NO',
            'name' => 'Website Portofolio',
            'slug' => Str::slug('Website Portofolio'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 500,
            'price_after' => 99,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/restoran.png',
            'image_link' => 'NO',
            'name' => 'Website Restoran',
            'slug' => Str::slug('Website Restoran'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 600,
            'price_after' => 99,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/trading.png',
            'image_link' => 'NO',
            'name' => 'Website Trading',
            'slug' => Str::slug('Website Trading'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 30000,
            'price_after' => 20000,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/umkm.png',
            'image_link' => 'NO',
            'name' => 'Website UMKM',
            'slug' => Str::slug('Website UMKM'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 500,
            'price_after' => 99,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


        Service::create([
            'type_id' => 1,
            'category_id' => 1,
            'image' => 'assets/images/service-image/portal-berita.png',
            'image_link' => 'NO',
            'name' => 'Website Portal Berita',
            'slug' => Str::slug('Website Portal Berita'),
            'estimation' => 30,
            'description' => 'Website Blog Pendidikan adalah sumber inspirasi dan pengetahuan untuk pencari ilmu dari berbagai kalangan. Dengan fokus pada berbagai topik pendidikan, mulai dari tips studi efektif, strategi pembelajaran inovatif, hingga informasi terkini dalam dunia pendidikan.',
            'price_before' => 500,
            'price_after' => 349,
            'sold' => 10,
            'status' => 'avalaible'
        ]);


    }
}
