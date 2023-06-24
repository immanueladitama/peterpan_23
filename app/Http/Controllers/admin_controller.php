<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;
use App\Models\ruangandosen;
use App\Models\peminjamdosen;
use App\Models\peminjam;
use App\Models\dosen;

class admin_controller extends Controller
{
    public function indexadmin(){
        $data_ruangan = ruangan::all();
        return view('admin.tambahruangan',compact('data_ruangan'));
    }

    public function indexadmindosen(){
        $data_ruangandosen = ruangandosen::all();
        return view('admin.addruangandosen',compact('data_ruangandosen'));
    }

    public function indexpeminjam(){
        $data_peminjam = peminjam::all();
        return view('admin.datapeminjam',compact('data_peminjam'));
    }

    public function indexpeminjamdosen(){
        $data_peminjamdosen = peminjamdosen::all();
        return view('user.dosenhome',compact('data_peminjamdosen'));
    }

    public function indexdosen(){
        $data_dosen = dosen::all();
        return view('admin.datadosen',compact('data_dosen'));
    }

    public function addpengajuan(Request $request){ 
        ruangan::create($request->all());
        return redirect('tambahruangan')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    public function pengajuanruangandosen(Request $request){ 
        ruangandosen::create($request->all());
        return redirect('tambahruangandosen')->with('sukses','pengajuan telah dikirim!');
        //dd($request);
    }

    
    public function edit_ruangan(Request $request, $id){
        $data_ruangan = ruangan::find($id);
        $data_ruangan->nama_ruangan = $request->input('nama_ruangan');
        $data_ruangan->kategori = $request->input('kategori');
        $data_ruangan->kapasitas = $request->input('kapasitas');
        $data_ruangan->fasilitas = $request->input('fasilitas');
        $data_ruangan->save();
        return redirect('tambahruangan');
    }

    public function edit_ruangandosen(Request $request, $id){
        $data_ruangandosen = ruangandosen::find($id);
        $data_ruangandosen->nama_ruangan = $request->input('nama_ruangan');
        $data_ruangandosen->kategori = $request->input('kategori');
        $data_ruangandosen->kapasitas = $request->input('kapasitas');
        $data_ruangandosen->fasilitas = $request->input('fasilitas');
        $data_ruangandosen->save();
        return redirect('tambahruangandosen');
    }

    public function findid($id){
        $data_ruangan = ruangan::where('id',$id)->first();
        $data = [
            'title' => 'ruangan',
            'data_ruangan' => $data_ruangan
        ];
        return view('admin.editruangan',$data);
    }

    public function findiddosen($id){
        $data_ruangandosen = ruangandosen::where('id',$id)->first();
        $data = [
            'title' => 'ruangandosen',
            'data_ruangandosen' => $data_ruangandosen
        ];
        return view('admin.editruangandosen',$data);
    }


    public function vdataweb($id){
        $data_ruangan = ruangan::find($id);
        $data = [
            'title'=>'data',
            'data_ruangan'=>$data_ruangan
        ];
        return view('admin.validasi',$data);
    }

    public function vdatawebdosen($id){
        $data_ruangandosen = ruangandosen::find($id);
        $data = [
            'title'=>'data',
            'data_ruangandosen'=>$data_ruangandosen
        ];
        return view('admin.validasiruangdosen',$data);
    }


    public function deleteruangan($id){
        ruangan::where('id',$id)->delete();
        return redirect()->back();
    }

    public function deleteruangandosen($id){
        ruangandosen::where('id',$id)->delete();
        return redirect()->back();
    }

    public function filterstatus(){
        $data_ruangan = ruangan::where('status','Sudah Dipinjam')->get();
        return view('user.daftarruangan',compact('data_ruangan'));
    }

    public function filterstatusdosen(){
        $data_ruangandosen = ruangandosen::where('status','Belum Dipinjam')->get();
        return view('user.dosenhome',compact('data_ruangandosen'));
    }

    public function adminlogin(){
        return view('user.loginadmin');
    }

    // public function indexvalidasi($id, Request $request)
    // {

    // }

}
