<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Ruangan UKDW</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logoukdw.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">
  <!-- Avatar image in top left corner -->
  <a href="/dosenhomepage" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="/pinjamruangan" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-building w3-xxlarge"></i>
    <p>DAFTAR RUANGAN</p>
  </a>
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</nav>


<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h2><b>Selamat Datang di Halaman Peminjaman!</b></h2>
    <h3><b>Pastikan anda mengisi data peminjaman dengan benar</b></h3>
</div>

<div class="w3-main" style="margin-left:200px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Pinjam Ruangan
</button>
    <h2><b>Daftar Ruangan</b></h2>
    <table class="table">
      <thead>
        <tr>
          <th>Ruang</th>
          <th>Kapasitas</th>
          <th>Kategori</th>
          <th>Fasilitas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>D.3.1</td>
          <td>70</td>
          <td>Kelas</td>
          <td>Komputer, LCD, Sound System, White Board, Wifi</td>
        </tr>
        <tr>
          <td>Atrium Didaktos</td>
          <td>100</td>
          <td>Atrium</td>
          <td></td>
        </tr>
        <tr>
          <td>Tasdik</td>
          <td>50</td>
          <td>Ruang Seminar</td>
          <td>LCD, Sound System</td>
        </tr>
      </tbody>
    </table>

    </header>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Form Pinjam Ruangan</h5>
</div>
<div class="modal-body">
    <form action="/pinjamruangandosen" method="POST">
      {{csrf_field()}}
      <div class="form-group">
                 <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Nama Peminjam</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nama_peminjam" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">No. HP</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="no_hp" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Kegiatan</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="kegiatan" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Jumlah Peserta</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="number" class="form-control" name="jumlah_peserta" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                    <input type="radio" name="type" value="panjang" id="panjang">Panjang
                    <input type="radio" name="type" value="pendek" id="pendek">Pendek
                  </div>
                  <div id="panjangDiv"  class="hide">
                    <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Range</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          {{-- <input type="time" class="form-control" name="jam_mulai_panjang" id="email" placeholder="" /> --}}
                          <select name="range" id="" class="form-control">
                            <option value="">Select Range</option>
                            <option value="semester">Semester</option>
                            <option value="bulanan">Bulanan</option>
                          </select>
                        </div>
                      </div>
                </div>
                <div class="form-group">
                  <label for="email" class="cols-sm-2 control-label">Hari</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      {{-- <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span> --}}
                      <input type="checkbox" name="hari[]" id="" value="senin">Senin
                      <input type="checkbox" name="hari[]" id="" value="selasa">Selasa
                      <input type="checkbox" name="hari[]" id="" value="rabu">Rabu
                      <input type="checkbox" name="hari[]" id="" value="kamis">Kamis
                      <input type="checkbox" name="hari[]" id="" value="jumat">Jumat
                      <input type="checkbox" name="hari[]" id="" value="sabtu">Sabtu
                      <input type="checkbox" name="hari[]" id="" value="minggu">Minggu
                      {{-- <input type="time" class="form-control" name="jam_mulai_panjang" id="email" placeholder="" /> --}}
                    </div>
                  </div>
            </div>
                    <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Jam Mulai</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          <input type="time" class="form-control" name="jam_mulai_panjang" id="email" placeholder="" />
                        </div>
                      </div>
                </div>
                <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Jam Selesai</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          <input type="time" class="form-control" name="jam_selesai_panjang" id="email" placeholder="" />
                        </div>
                      </div>
                </div>
                  </div>

                  <div id="pendekDiv"  class="hide">
                    <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Jam Mulai</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          <input type="time" class="form-control" name="jam_mulai_pendek" id="email" placeholder="" />
                        </div>
                      </div>
                </div>
                <div class="form-group">
                      <label for="email" class="cols-sm-2 control-label">Jam Selesai</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                          <input type="time" class="form-control" name="jam_selesai_pendek" id="email" placeholder="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Tanggal Mulai Pinjam</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="tgl_pinjam_mulai" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Tanggal Selesai Pinjam</label>
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="date" class="form-control" name="tgl_pinjam_selesai" id="email" placeholder="" />
                      </div>
                    </div>
              </div>
                </div>
                  </div>
                  {{-- <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Tanggal Pinjam</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="tgl_pinjam" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Jam Mulai</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="time" class="form-control" name="jam_mulai" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Jam Selesai</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="time" class="form-control" name="jam_selesai" id="email" placeholder="" />
                          </div>
                        </div>
                  </div> --}}
                <label for="name" class="cols-sm-2 control-label">Nama Ruangan</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                                <select name="ruangan"class="form-control" id="exampleFormControlSelect1">
                                                    <option value="Ruang Seminar Tasdik">Ruang Seminar Tasdik</option>
                                                    <option value="Atrium Didaktos">Atrium Didaktos</option>
                                                    <option value="Ruang D3.1">Ruang D3.1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>                             
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
    <div class="w3-row card">
    <div class="card">
      <div class="card-header text-bold">
        {{-- Peminjam Jangka Panjang --}}
        <h2><b>Peminjam Jangka Pendek</b></h2>
      </div>
      <div class="card-body">
        <table class="table">
        <tr>
        <th>Nama Peminjam</th>
        <th>No HP</th> 
        <th>Ruangan</th> 
        <th>Kegiatan</th>
        <th>Jumlah Peserta</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Status</th>
        <th>Action</th>
        </tr>
        @foreach($pendeks as $item)
        <tr>
        <td>{{$item->nama_peminjam}}</td>   
        <td>{{$item->no_hp}}</td> 
        <td>{{$item->ruangan}}</td> 
        <td>{{$item->kegiatan}}</td>
        <td>{{$item->jumlah_peserta}}</td>
        <td>
          {{$item->tanggal_mulai}}  
        </td> 
        <td>
          {{$item->tanggal_selesai}}
        </td> 
        <td>
          {{$item->jam_mulai}}
        </td> 
        <td>
          {{$item->jam_selesai}}  
        </td> 
        <td>
          {{$item->status}}
        </td>
        <td class="d-flex">
          @if (Auth::user()->role == 'admin')
              <form action="{{ route('peminjaman.validasi', $item->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="type" value="pendek">
                <input type="hidden" name="status" value="disetujui">
                <button class="btn btn-success">Setujui</button>
              </form>
              <form action="{{ route('peminjaman.delete', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="type" value="pendek">
                {{-- <input type="hidden" name="status" value="disetujui"> --}}
                <button class="btn btn-danger">Hapus Peminjaman</button>
              </form>
          @endif          
        </td>
        </tr>
        @endforeach
        </table>
      </div>
        </div>
    
        
        <div class="card">
          <div class="card-header text-bold">
            {{-- Peminjam Jangka Panjang --}}
            <h2><b>Peminjam Jangka Panjang</b></h2>
          </div>
          <div class="card-body">
            <table class="table">
            <tr>
            <th>Nama Peminjam</th>
            <th>No HP</th> 
            <th>Ruangan</th> 
            <th>Kegiatan</th>
            <th>Jumlah Peserta</th>
            <th>Range</th>
            <th>Hari</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
            @foreach($panjangs as $item)
            <tr>
            <td>{{$item->nama_peminjam}}</td>   
            <td>{{$item->no_hp}}</td> 
            <td>{{$item->ruangan}}</td> 
            <td>{{$item->kegiatan}}</td>
            <td>{{$item->jumlah_peserta}}</td>
            <td>
              {{$item->range}}  
            </td> 
            <td>
              <ul>
              {{-- {{$item}} --}}
              @foreach ($item->hari as $i)
                  <li>{{ $i }}</li>
              @endforeach
            </ul>
            </td> 
            <td>
              {{$item->jam_mulai}}
            </td> 
            <td>
              {{$item->jam_selesai}}  
            </td> 
            <td>
              {{$item->status}}
            </td>
            <td class="d-flex">
              @if (Auth::user()->role == 'admin')
              <form action="{{ route('peminjaman.validasi', $item->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="type" value="panjang">
                <input type="hidden" name="status" value="disetujui">
                <button class="btn btn-success">Setujui</button>
              </form>
              <form action="{{ route('peminjaman.delete', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="type" value="panjang">
                {{-- <input type="hidden" name="status" value="disetujui"> --}}
                <button class="btn btn-danger">Hapus Peminjaman</button>
              </form>
          @endif          
            </td>
            </tr>
            @endforeach
            </table>
          </div>
            </div>
        
      </div>
      
  </div>

<script>
  let panjang = document.getElementById('panjang')
  let pendek = document.getElementById('pendek')
  let divPanjang = document.getElementById('panjangDiv')
  let divPendek = document.getElementById('pendekDiv')


  panjang.addEventListener('click', function() {
    divPanjang.classList.remove('hide')
    divPendek.classList.add('hide')
  })

  pendek.addEventListener('click', function() {
    divPanjang.classList.add('hide')
    divPendek.classList.remove('hide')
  })
</script>
</body>
</html>