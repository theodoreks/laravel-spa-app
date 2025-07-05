<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // PANGGIL ROLE SEEDER DI SINI
        $this->call([
            RoleSeeder::class,
        ]);

        // Anda bisa memanggil seeder lain di sini jika ada
    }
}