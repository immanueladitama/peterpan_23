<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\peminjam;
use App\Models\peminjamdosen;


class peminjam_controller extends Controller
{
    public function indexpeminjam(){
        $data_ruangan = ruangan::all();
        return view('admin.datapeminjam',compact('data_ruangan'));
    }

    public function addpeminjam(Request $request){ 
        peminjam::create($request->all());
        return redirect('homepage')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    public function adddosen(Request $request){ 
        peminjamdosen::create($request->all());
        return redirect('dosenhomepage')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    public function dosenlogin(){
        return view('user.logindosen');
    }

    public function userlogin(){
        return view('user.loginpage');
    }
}
