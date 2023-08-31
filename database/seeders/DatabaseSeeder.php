<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Folder;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use App\Models\KategoriGaleri;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Dev User
        User::create([
            'nama' => 'Admin',
            'email' => 'Admin@gmail.com',
            'username' => 'Admin',
            'image' => '1676100893.jpg',
            'password' => bcrypt('123456')
        ]);


        // gallery Categories
        KategoriGaleri::create([
            'galeri_kategori' => 'Pelatihan',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Kunjungan',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Destinasi',
        ]);
        

        // kategori post
        PostCategory::create([
            'kategori' => 'Berita',
            'slug' => 'berita'
        ]);
        PostCategory::create([
            'kategori' => 'Agenda',
            'slug' => 'agenda'
        ]);
        PostCategory::create([
            'kategori' => 'Artikel',
            'slug' => 'artikel'
        ]);
    }
}
