<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nim' => 123456,
                'email' => 'rosita@unika.ac.id',
                'nama' => 'Rosita Herawati',
                'active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123457,
                'email' => 'yonathansantosa@unika.ac.id',
                'nama' => 'Yonathan Purbo Santosa',
                'active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123458,
                'email' => 'yulianto.tejo@unika.di',
                'nama' => 'Yulianto Tejo Putranto',
                'active' => 'nonactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123459,
                'email' => 'robertus@unika.ac.id',
                'nama' => 'R. Aji Setiawan Nugroho',
                'active' => 'nonactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123460,
                'email' => 'setianto@unika.ac.id',
                'nama' => 'YB. Dwi Setianto',
                'active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123461,
                'email' => 'marlon@unika.ac.id',
                'nama' => 'Hironimus Leong',
                'active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => 123462,
                'email' => 'shinta@unika.ac.id',
                'nama' => 'Shinta Estri Wahyuningrum',
                'active' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
