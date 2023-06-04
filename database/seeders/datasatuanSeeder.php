<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datasatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'KG',
                'nama_satuan' => 'kilogram',
            ],
            [
                'kode_satuan' => 'G',
                'nama_satuan' => 'Gram',
            ],
            [
                'kode_satuan' => 'L',
                'nama_satuan' => 'Liter',
            ],
        ]);
    }
}
