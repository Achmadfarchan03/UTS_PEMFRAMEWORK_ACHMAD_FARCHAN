<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
            'kode_barang' => 'MYK01',
            'nama_barang' => 'Minyak Goreng',
            'harga_barang' => 50000,
            'deskripsi_barang' => 'Minyak untuk masak',
            'satuan_id' => 2
            ],
            [
            'kode_barang' => 'BRS01',
            'nama_barang' => 'Beras Putih',
            'harga_barang' => 150000,
            'deskripsi_barang' => 'Beras putih untuk makan',
            'satuan_id' => 1
            ],
            [
            'kode_barang' => 'AP01',
            'nama_barang' => 'Apel Merah',
            'harga_barang' => 20000,
            'deskripsi_barang' => 'Apel merah enak',
            'satuan_id' => 3
            ],
        ]);
    }
}
