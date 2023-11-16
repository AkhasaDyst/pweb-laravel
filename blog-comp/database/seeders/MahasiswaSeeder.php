<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mahasiswaData = [
            ['name' => 'Yudhi W', 'nim' => '120009', 'email' => 'yud@gmail.com', 'ukt_id' => 1, 'fakultas_id' => 1],
            ['name' => 'Yudhi A', 'nim' => '120010', 'email' => 'yudhi@gmail.com', 'ukt_id' => 2, 'fakultas_id' => 4],
            ['name' => 'Yudhi B', 'nim' => '120011', 'email' => 'yudhiB@gmail.com', 'ukt_id' => 1, 'fakultas_id' => 3],
            ['name' => 'Yudhi C', 'nim' => '120012', 'email' => 'yudhiC@gmail.com', 'ukt_id' => 3, 'fakultas_id' => 2],
            ['name' => 'Yudhi T', 'nim' => '120013', 'email' => 'yudhiT@gmail.com', 'ukt_id' => 1, 'fakultas_id' => 1],
            ['name' => 'Yudhi Y', 'nim' => '120014', 'email' => 'yudhiY@gmail.com', 'ukt_id' => 4, 'fakultas_id' => 1],
            // Add more data as needed
        ];

        foreach ($mahasiswaData as $data) {
            DB::table('mahasiswa')->insert($data);
        }
    }
}
