<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dosen')->delete();
        
        \DB::table('dosen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_dosen' => 'BAGUS PRASETYO',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_dosen' => 'ICHWANUL HAKIM',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_dosen' => 'IRVAN EFENDI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_dosen' => 'MASTUTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_dosen' => 'SIGIT NOVIONO',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_dosen' => 'YERI BUDI AJI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_dosen' => 'AGUNG SETIAWAN',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_dosen' => 'AMBAR SUSANTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_dosen' => 'BAGAS IMAM FAUZI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            9 => 
            array (
                'id' => 10,
                'nama_dosen' => 'FAJAR ARIF GUSTRINDA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            10 => 
            array (
                'id' => 11,
                'nama_dosen' => 'IKA USWATUN HASANAH',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            11 => 
            array (
                'id' => 12,
                'nama_dosen' => 'SITI AISYAH',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            12 => 
            array (
                'id' => 13,
                'nama_dosen' => 'VELLA NOVIANA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            13 => 
            array (
                'id' => 14,
                'nama_dosen' => 'DERY VINTINA MELLY PANTIYA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            14 => 
            array (
                'id' => 15,
                'nama_dosen' => 'GRACE RIZKA PRAWESTY',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            15 => 
            array (
                'id' => 16,
                'nama_dosen' => 'HALINDA NUR SALIMATUL FAUZIYAH',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            16 => 
            array (
                'id' => 17,
                'nama_dosen' => 'IKE MEIWATI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            17 => 
            array (
                'id' => 18,
                'nama_dosen' => 'IRFAN MEI ISKANDAR',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            18 => 
            array (
                'id' => 19,
                'nama_dosen' => 'NUR INDRA PANGESTU',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            19 => 
            array (
                'id' => 20,
                'nama_dosen' => 'RAFIX ZAELANI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            20 => 
            array (
                'id' => 21,
                'nama_dosen' => 'SHONITA ESTRE LYCHA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            21 => 
            array (
                'id' => 22,
                'nama_dosen' => 'YULI MISNAWATI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            22 => 
            array (
                'id' => 23,
                'nama_dosen' => 'YUYUN FITNATI PRIHANA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            23 => 
            array (
                'id' => 24,
                'nama_dosen' => 'ADIKA CITRA KINANTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            24 => 
            array (
                'id' => 25,
                'nama_dosen' => 'AFIFA AUZIZAH',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            25 => 
            array (
                'id' => 26,
                'nama_dosen' => 'AGUS SUPRIYANTO',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            26 => 
            array (
                'id' => 27,
                'nama_dosen' => 'AMANDA ADITYA SUSANTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            27 => 
            array (
                'id' => 28,
                'nama_dosen' => 'ANDINI RIZKA SEFIOLA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            28 => 
            array (
                'id' => 29,
                'nama_dosen' => 'ANGGRAENI NURDIANA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            29 => 
            array (
                'id' => 30,
                'nama_dosen' => 'ANUGRAH PRAHESTU KUSHANDOYO',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            30 => 
            array (
                'id' => 31,
                'nama_dosen' => 'AQUAR FEBRYANA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            31 => 
            array (
                'id' => 32,
                'nama_dosen' => 'ARIQ FAHMI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            32 => 
            array (
                'id' => 33,
                'nama_dosen' => 'DEDE TRI MULYONO',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            33 => 
            array (
                'id' => 34,
                'nama_dosen' => 'DESTI NURHAYATI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            34 => 
            array (
                'id' => 35,
                'nama_dosen' => 'DEVI IRAWAN',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            35 => 
            array (
                'id' => 36,
                'nama_dosen' => 'DEVIA PUTRI RATNA SARI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            36 => 
            array (
                'id' => 37,
                'nama_dosen' => 'DEVIT ARIANTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            37 => 
            array (
                'id' => 38,
                'nama_dosen' => 'DIAN WARDANI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            38 => 
            array (
                'id' => 39,
                'nama_dosen' => 'DITA RAMADHAN',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            39 => 
            array (
                'id' => 40,
                'nama_dosen' => 'DWI RIZKIYANI AYUNINGTYAS',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            40 => 
            array (
                'id' => 41,
                'nama_dosen' => 'DWI YULIANTI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            41 => 
            array (
                'id' => 42,
                'nama_dosen' => 'EVANA PUTRI SETIFANI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            42 => 
            array (
                'id' => 43,
                'nama_dosen' => 'FERIAN CAHYATAMA',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            43 => 
            array (
                'id' => 44,
                'nama_dosen' => 'FITRIA FEBRI LESTARI',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
            44 => 
            array (
                'id' => 45,
                'nama_dosen' => 'FRIZKY INDRAWAN',
                'created_at' => '2022-08-13 16:56:38',
                'updated_at' => '2022-08-13 16:56:38',
            ),
        ));
        
        
    }
}