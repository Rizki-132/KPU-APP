<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemilih;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemilih::create([
            'no_kk' => '321010163103990052',
            'nik' => '321010163103990061',
            'nama' => 'Rizki idham sofyan',
            'alamat' => 'Blok Selasa',
            'gender' => 'Laki-laki',
            'tmp_lahir' => 'Majalengka',
            'tgl_lahir' => '1999-03-31',
            'status' => 'Belum Kawin',
            'keterangan' => 'Belum terdaftar di dpt',
        ]);
    }
}
