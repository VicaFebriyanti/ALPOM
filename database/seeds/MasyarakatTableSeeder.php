<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Masyarakat;

class MasyarakatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            "nik" => "11801555",
            "nama" => "Asti Dwi",
            "username" => "astidwi",
            "telp" => "081211223344",
            "password" => Hash::make('asti1234'),
        ]);
    }
}
