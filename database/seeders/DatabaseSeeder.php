<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sipalink;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'bps',
            'username' => 'bps1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'pengolahan',
            'username' => 'ipds1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'nerwilis',
            'username' => 'nerwilis1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'produksi',
            'username' => 'produksi1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'distribusi',
            'username' => 'distribusi1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'sosial',
            'username' => 'sosial1374',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'bagianumum',
            'username' => 'sektoral1374',
            'password' => bcrypt('admin')
        ]);

        Tag::create([
            'title' => 'BPS',
            'slug' => 'bps',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Bagian Umum',
            'slug' => 'bagian-umum',
            'description' => 'Berisi tentang link yang digunakan oleh Bagian Umum BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Pengolahan',
            'slug' => 'pengolahan',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Sosial',
            'slug' => 'sosial',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Produksi',
            'slug' => 'produksi',
            'description' => 'Berisi tentang link yang digunakan oleh Produksi BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Nerwilis',
            'slug' => 'nerwilis',
            'description' => 'Berisi tentang link yang digunakan oleh Nerwilis BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Distribusi',
            'slug' => 'distribusi',
            'description' => 'Berisi tentang link yang digunakan oleh Distribusi BPS Kota Padang Panjang',
        ]);

        Sipalink::create([
            'title' => 'KipApp',
            'description' => 'Aplikasi penilaian Kinerja Pegawai',
            'link' => 'https://webapps.bps.go.id/kipapp/',
            'tags_id' => '1',
            'created_by' => '1',
            'hit_counter' => 120
        ]);

        Sipalink::create([
            'title' => 'Simpeg BPS',
            'description' => 'Aplikasi penilaian Kepegawaian',
            'link' => 'https://simpeg.bps.go.id/',
            'tags_id' => rand(1,7),
            'created_by' => '1',
            'hit_counter' => 100
        ]);

        Sipalink::factory(50)->create();
    }
}
