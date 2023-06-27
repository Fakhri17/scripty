<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@example.com',
            'nomor_induk' => '1234567890',
            'role' => 'mhs',
            'password' => Hash::make('password'),
        ]);
        User::factory()->create([
            'name' => 'Dosen',
            'email' => 'dosen@example.com',
            'nomor_induk' => '1122334455',
            'role' => 'dosen',
            'password' => Hash::make('password'),
        ]);
    }
}
