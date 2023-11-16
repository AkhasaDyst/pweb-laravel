<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fakultas')->insert([
            ['fakultas_name' => 'Fakultas Teknik'],
            ['fakultas_name' => 'Fakultas Ekonomi dan Bisnis'],
            ['fakultas_name' => 'Fakultas Hukum'],
            ['fakultas_name' => 'Fakultas Sains dan Matematika'],
            ['fakultas_name' => 'Fakultas Psikologi'],
            // Add more data as needed
        ]);

    }
}
