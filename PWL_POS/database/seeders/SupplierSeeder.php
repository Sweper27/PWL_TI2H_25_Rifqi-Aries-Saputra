<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('m_supplier')->insert([
            [
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT Sumber Rejeki',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'CV Maju Jaya',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'supplier_kode' => 'SUP03',
                'supplier_nama' => 'PT Sejahtera',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
