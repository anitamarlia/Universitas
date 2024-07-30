<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Universitas;

class UniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universitas')->insert([
            ['nama' => 'XYZ', 'alamat' => 'Jakarta'],
            ['nama' => 'ABC', 'alamat' => 'Bandung'],
            ['nama' => 'DEF', 'alamat' => 'Rawamangun'],
            ['nama' => 'GHI', 'alamat' => 'Pulogadung'],
        ]);
    }
}
