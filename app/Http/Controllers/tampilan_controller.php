<?php

namespace App\Http\Controllers;

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
        $data_ruangandosen = ruangandosen::all();
        return view('admin.peminjamdosen',compact('data_ruangandosen'));
    }

    public function indexkalendar(){
        return view('user.kalendarruangan');
    }

    public function filterstatus(){
        $data_ruangan = ruangan::where('status','Belum Dipinjam')->get();
        return view('user.userhomepage',compact('data_ruangan'));
    }


}
