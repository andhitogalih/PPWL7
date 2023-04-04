<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nim' => 214172055,
                'Nama' => 'Iemaduddin',
                'Kelas' => '2F',
                'Jurusan' => 'TI',
                'No_Handphone' => '081213232434',
                'Email' => '214172055@student.polinema.ac.id',
                'Tanggal_lahir' => '22 Oktober 2003'
            ],
            [
                'Nim' => 2141720249,
                'Nama' => 'Dimitri Abdullah',
                'Kelas' => '2F',
                'Jurusan' => 'TI',
                'No_Handphone' => '08888090576',
                'Email' => '2141720249@student.polinema.ac.id',
                'Tanggal_lahir' => '15 Agustus 2003'
            ],
            [
                'Nim' => 2141720075,
                'Nama' => 'Alfi Surya P',
                'Kelas' => '2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '088617359907',
                'Email' => '2141720075@student.polinema.ac.id',
                'Tanggal_lahir' => '15 Mei 2006'
            ],
            [
                'Nim' => 2141720073,
                'Nama' => 'Abdullah Azzam',
                'Kelas' => '2F',
                'Jurusan' => 'TI',
                'No_Handphone' => '081246789230',
                'Email' => '2141720073@student.polinema.ac.id',
                'Tanggal_lahir' => '7 Mei 2004'
            ],
            [
                'Nim' => 2141720077,
                'Nama' => 'Ahmad Bima Tristan',
                'Kelas' => '2F',
                'Jurusan' => 'TI',
                'No_Handphone' => '085156552045',
                'Email' => '2141720077@student.polinema.ac.id',
                'Tanggal_lahir' => '27 Juli 2003'
            ],
            
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
