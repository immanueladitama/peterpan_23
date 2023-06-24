<?php

namespace App\Http\Controllers;

use App\Models\JangkaPanjang;
use App\Models\JangkaPendek;
use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\peminjam;
use App\Models\ruangandosen;

class tampilan_controller extends Controller
{
    public function indexhomeuser(){
        $data_peminjam = peminjam::all();
        return view('user.userhomepage',compact('data_peminjam'));
    }

    public function indexhomedosen(){
        $panjangs = JangkaPanjang::all();
        $pendeks = JangkaPendek::all();
        return view('admin.peminjamdosen',compact('panjangs', 'pendeks'));
    }

    public function indexkalendar(){
        return view('user.kalendarruangan');
    }

    public function filterstatus(){
        $data_ruangan = ruangan::where('status','Belum Dipinjam')->get();
        return view('user.userhomepage',compact('data_ruangan'));
    }


}
