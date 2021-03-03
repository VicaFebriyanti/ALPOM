<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Petugas;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            "nama_petugas" => "Vica Pebriyanti Jatnika",
            "username" => "vicaa.f",
            "telp" => "08872821774",
            "password" => Hash::make('vica1234'),
            "level" => "admin",
        ]);
    }
}
