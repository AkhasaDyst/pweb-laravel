<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ukt')->insert([
            ['tingkat_ukt' => '1', 'ukt_rupiah' => 500000],
            ['tingkat_ukt' => '2', 'ukt_rupiah' => 1000000],
            ['tingkat_ukt' => '3', 'ukt_rupiah' => 3500000],
            ['tingkat_ukt' => '4', 'ukt_rupiah' => 5000000],
            // Add more data as needed
        ]);
    }
}
