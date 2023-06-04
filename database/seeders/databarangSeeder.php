<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class databarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '01',
                'nama_barang' => 'Mie',
                'harga_barang' => 10000,
                'deskripsi_barang' => 'enak dan siap santap',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => '02',
                'nama_barang' => 'milk shake',
                'harga_barang' => 5000,
                'deskripsi_barang' => 'enak dan menyegarkan',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => '03',
                'nama_barang' => 'Gorengan',
                'harga_barang' => 4000,
                'deskripsi_barang' => 'enak dan bikin kenyang',
                'satuan_id' => 3
            ]
        ]);
    }
}
