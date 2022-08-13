<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            MataKuliahV2TableSeeder::class,
            DosenTableSeeder::class,
            DosenV2TableSeeder::class,
            MataKuliahTableSeeder::class,
            DosenMataKuliahTableSeeder::class,
            DosenMataKuliahV2TableSeeder::class,
        ]);
    }
}
