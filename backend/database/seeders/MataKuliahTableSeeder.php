<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mata_kuliah')->delete();
        
        \DB::table('mata_kuliah')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_matakuliah' => 'Agama 1',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_matakuliah' => 'Pancasila ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_matakuliah' => 'Bahasa Inggris 1',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_matakuliah' => 'Kalkulus 1 ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_matakuliah' => 'Fisika Dasar ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_matakuliah' => 'Rangkaian Logika',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_matakuliah' => 'Pengantar Teknologi Informasi ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_matakuliah' => 'Algoritma dan Pemrograman  1  ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_matakuliah' => 'Bahasa Indonesia',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            9 => 
            array (
                'id' => 10,
                'nama_matakuliah' => 'Matematika Rekayasa ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            10 => 
            array (
                'id' => 11,
                'nama_matakuliah' => 'Arsitektur Komputer ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            11 => 
            array (
                'id' => 12,
                'nama_matakuliah' => 'Rekayasa Perangkat Lunak',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            12 => 
            array (
                'id' => 13,
                'nama_matakuliah' => 'Pemrograman Berbasis Objek  1',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            13 => 
            array (
                'id' => 14,
                'nama_matakuliah' => 'DataBase  ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            14 => 
            array (
                'id' => 15,
                'nama_matakuliah' => 'Pengetahuan Lingkungan ',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            15 => 
            array (
                'id' => 16,
                'nama_matakuliah' => 'Communication Skill',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            16 => 
            array (
                'id' => 17,
                'nama_matakuliah' => 'Statistik dan Probabilitas',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            17 => 
            array (
                'id' => 18,
                'nama_matakuliah' => 'Jaringan Komputer 1',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            18 => 
            array (
                'id' => 19,
                'nama_matakuliah' => 'Pengolahan Citra Digital',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            19 => 
            array (
                'id' => 20,
                'nama_matakuliah' => 'Interkasi Manusia dan Komputer',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            20 => 
            array (
                'id' => 21,
                'nama_matakuliah' => 'Pemrograman Mobile',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            21 => 
            array (
                'id' => 22,
            'nama_matakuliah' => 'Keamanan, Kesehatan, dan Keselamatan Kerja (K3)',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            22 => 
            array (
                'id' => 23,
                'nama_matakuliah' => 'Metodologi Penelitian',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            23 => 
            array (
                'id' => 24,
                'nama_matakuliah' => 'Kapita Selekta',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            24 => 
            array (
                'id' => 25,
                'nama_matakuliah' => 'Keamanan Sistem Komputer',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            25 => 
            array (
                'id' => 26,
                'nama_matakuliah' => 'Pemrograman Jaringan Komputer',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            26 => 
            array (
                'id' => 27,
                'nama_matakuliah' => 'Manajemen Bisnis',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
            27 => 
            array (
                'id' => 28,
                'nama_matakuliah' => 'Kewarganegaraan',
                'created_at' => '2022-08-13 17:05:50',
                'updated_at' => '2022-08-13 17:05:50',
            ),
        ));
        
        
    }
}