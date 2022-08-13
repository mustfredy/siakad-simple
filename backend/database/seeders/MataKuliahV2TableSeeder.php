<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataKuliahV2TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mata_kuliah_v2')->delete();
        
        \DB::table('mata_kuliah_v2')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_matakuliah' => 'Entrepreneurship',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_matakuliah' => 'Kalkulus 2 ',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_matakuliah' => 'Bahasa Inggris 2',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_matakuliah' => 'Algoritma dan Pemrograman 2',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_matakuliah' => 'Teori Bahasa Otomata',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_matakuliah' => 'Pemrograman Web ',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_matakuliah' => 'Teknik Digital',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_matakuliah' => 'Agama 2',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_matakuliah' => 'Matemtika Diskrit ',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            9 => 
            array (
                'id' => 10,
                'nama_matakuliah' => 'Analisis dan Desain sistem',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            10 => 
            array (
                'id' => 11,
                'nama_matakuliah' => 'Sistem Operasi',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            11 => 
            array (
                'id' => 12,
                'nama_matakuliah' => 'Pemrograman Berbasis Objek  2',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            12 => 
            array (
                'id' => 13,
                'nama_matakuliah' => 'Grafika Komputer',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            13 => 
            array (
                'id' => 14,
                'nama_matakuliah' => 'Struktur Data',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            14 => 
            array (
                'id' => 15,
                'nama_matakuliah' => 'Data Mining',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            15 => 
            array (
                'id' => 16,
                'nama_matakuliah' => 'Manajemen Proyek Perangkat Lunak',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            16 => 
            array (
                'id' => 17,
                'nama_matakuliah' => 'Jaringan Komputer 2',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            17 => 
            array (
                'id' => 18,
                'nama_matakuliah' => 'Intelegensia Buatan',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            18 => 
            array (
                'id' => 19,
                'nama_matakuliah' => 'Konstruksi Kompiler',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            19 => 
            array (
                'id' => 20,
                'nama_matakuliah' => 'Kerja Praktek',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            20 => 
            array (
                'id' => 21,
                'nama_matakuliah' => 'Etika Profesi',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
            21 => 
            array (
                'id' => 22,
                'nama_matakuliah' => 'Tugas Akhir',
                'created_at' => '2022-08-13 17:06:18',
                'updated_at' => '2022-08-13 17:06:18',
            ),
        ));
        
        
    }
}