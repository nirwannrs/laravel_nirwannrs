<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RumahSakitDanPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert 5 rumah sakit
        $rumahSakitData = [
            [
                'nama_rs' => 'RS Harapan Bunda',
                'alamat' => 'Jl. Merdeka No.1, Jakarta',
                'email' => 'harapanbunda@example.com',
                'telepon' => '021-1234567',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_rs' => 'RS Kasih Ibu',
                'alamat' => 'Jl. Melati No.5, Bandung',
                'email' => 'kasihibu@example.com',
                'telepon' => '022-7654321',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_rs' => 'RS Mitra Sehat',
                'alamat' => 'Jl. Mawar No.10, Surabaya',
                'email' => 'mitrasehat@example.com',
                'telepon' => '031-9988776',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_rs' => 'RS Bhakti Utama',
                'alamat' => 'Jl. Kenanga No.3, Yogyakarta',
                'email' => 'bhaktiutama@example.com',
                'telepon' => '0274-334455',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_rs' => 'RS Sentosa Medika',
                'alamat' => 'Jl. Dahlia No.7, Medan',
                'email' => 'sentosamedika@example.com',
                'telepon' => '061-5566778',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('rumah_sakit')->insert($rumahSakitData);

        $rumahSakit = DB::table('rumah_sakit')->get();

        // Insert exactly one pasien per rumah sakit
        $pasienData = [
            [
                'nama_pasien' => 'Andi Setiawan',
                'alamat' => 'Jl. Kebon Jeruk, Jakarta',
                'no_telpon' => '081234567890',
            ],
            [
                'nama_pasien' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Cipaganti, Bandung',
                'no_telpon' => '082345678901',
            ],
            [
                'nama_pasien' => 'Rudi Hartono',
                'alamat' => 'Jl. Kenjeran, Surabaya',
                'no_telpon' => '083456789012',
            ],
            [
                'nama_pasien' => 'Dewi Lestari',
                'alamat' => 'Jl. Kaliurang, Yogyakarta',
                'no_telpon' => '084567890123',
            ],
            [
                'nama_pasien' => 'Budi Santoso',
                'alamat' => 'Jl. Gatot Subroto, Medan',
                'no_telpon' => '085678901234',
            ],
        ];

        foreach ($rumahSakit as $index => $rs) {
            DB::table('pasien')->insert([
                'nama_pasien' => $pasienData[$index]['nama_pasien'],
                'alamat' => $pasienData[$index]['alamat'],
                'no_telpon' => $pasienData[$index]['no_telpon'],
                'id_rs' => $rs->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
