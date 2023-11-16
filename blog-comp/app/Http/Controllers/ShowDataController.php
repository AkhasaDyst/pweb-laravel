<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShowDataController extends Controller
{
    public function showdata()
    {
        // Get data from the database
        $uktData = DB::table('ukt')->get();
        $fakultasData = DB::table('fakultas')->get();
        $mahasiswaData = DB::table('mahasiswa')->get();

        // Pass data to the view
        return view('showdata', compact('uktData', 'fakultasData', 'mahasiswaData'));
    }
}
