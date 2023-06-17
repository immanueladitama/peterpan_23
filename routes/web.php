<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tampilan_controller;
use App\Http\Controllers\daftar_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\CalenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/homepage','tampilan_controller@indexhomeuser');
route::get('/kalendar','tampilan_controller@indexkalendar');
route::get('/pageruangan','admin_controller@filterstatus');
route::get('/tambahruangan','admin_controller@indexadmin'); 
route::get('/tambahruangandosen','admin_controller@indexadmindosen'); 
route::get('/datapeminjam','admin_controller@indexpeminjam'); 
route::get('/pinjamruangan','tampilan_controller@indexhomedosen');
route::get('/pagepeminjam','peminjam_controller@indexpeminjam');
Route::post('/addpengajuan','admin_Controller@addpengajuan');
Route::post('/pengajuanruangdosen','admin_Controller@pengajuanruangandosen');
Route::post('/pinjamruangan','peminjam_Controller@addpeminjam');
Route::post('/pinjamruangandosen','peminjam_Controller@adddosen');
route::get('/prosesviewdata/{id}','admin_controller@findid');
route::get('/prosesviewdatadosen/{id}','admin_controller@findiddosen');
route::get('/editruangan/{id}','admin_controller@edit_ruangan')->name('editruangan');
route::get('/editruangandosen/{id}','admin_controller@edit_ruangandosen')->name('editruangandosen');
route::get('/deleteruangan/{id}','admin_controller@deleteruangan');
route::get('/deleteruangandosen/{id}','admin_controller@deleteruangandosen');
route::get('/loginmahasiswa','peminjam_controller@userlogin');
route::get('/logindosen','peminjam_controller@dosenlogin');
route::get('/loginadmin','admin_controller@adminlogin');
route::get('/filterruangan','admin_controller@filterstatus');
route::get('/validasi','admin_controller@indexvalidasi');
route::get('/dosenhomepage','admin_controller@indexpeminjamdosen');

