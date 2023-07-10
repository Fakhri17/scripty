<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $waktuTertentu = Carbon::create(2023, 7, 6, 14, 30, 0); // Menyetel tanggal dan waktu tertentu

        Jadwal::factory(10)->create();

        // Jadwal::create([
        //     'user_id' => 1,
        //     'label' => 'Bimbingan BAB 1',
        //     'tanggal' => '2023-07-10',
        //     'waktu' => '08:10:12',
        //     'status' => 'Diajukan',
        // ]);
    }
}
