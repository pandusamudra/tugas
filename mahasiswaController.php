<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->get();
    	return view('index',['mahasiswa' => $mahsiswa]);
    }
}