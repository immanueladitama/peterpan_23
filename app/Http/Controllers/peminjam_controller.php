<?php

namespace App\Http\Controllers;

use App\Models\JangkaPanjang;
use App\Models\JangkaPendek;
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
        // peminjamdosen::create($request->all());
        if ($request->type == "panjang") {
            // dd($request->hari);
            JangkaPanjang::create([
                'nama_peminjam' => $request->nama_peminjam,
                'no_hp' => $request->no_hp,
                'ruangan' => $request->ruangan,
                'kegiatan' => $request->kegiatan,
                'jumlah_peserta' => $request->jumlah_peserta,
                'range' => $request->range,
                'hari' => $request->input('hari', []),
                'jam_mulai' => $request->jam_mulai_panjang,
                'jam_selesai' => $request->jam_selesai_panjang
            ]);
        }else{
            JangkaPendek::create([
                'nama_peminjam' => $request->nama_peminjam,
                'no_hp' => $request->no_hp,
                'ruangan' => $request->ruangan,
                'kegiatan' => $request->kegiatan,
                'jumlah_peserta' => $request->jumlah_peserta,
                'jam_mulai' => $request->jam_mulai_pendek,
                'jam_selesai' => $request->jam_selesai_pendek,
                'tanggal_mulai' => $request->tgl_pinjam_mulai,
                'tanggal_selesai' => $request->tgl_pinjam_selesai
            ]);
        }
        return redirect('/pinjamruangan')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    public function dosenlogin(){
        return view('user.logindosen');
    }

    public function userlogin(){
        return view('user.loginpage');
    }
}
