<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;

class daftar_controller extends Controller
{
    public function indexdaftar(){
        $data_ruangan = ruangan::all();
        return view('user.daftarruangan',compact('data_ruangan')); 
    }

   
}
