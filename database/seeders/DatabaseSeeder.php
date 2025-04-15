<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if users already exist
        if (DB::table('users')->count() === 0) {
            $this->call(UserSeeder::class);
        }

        // Check if rumah_sakit table is empty
        if (DB::table('rumah_sakit')->count() === 0) {
            $this->call(RumahSakitDanPasienSeeder::class);
        }
    }

}
