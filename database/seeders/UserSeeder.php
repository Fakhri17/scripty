<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(5)->create();

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
