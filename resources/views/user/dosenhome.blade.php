<!DOCTYPE html>
<html>
<head>
<title>Sistem Peminjaman Ruangan Dosen</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <p>PINJAM RUANGAN</p>
  </a>
   <a href="/logindosen" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
</nav>


<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h2><b>Daftar Peminjam Ruangan UKDW</b></h2>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Ubah Status Pinjaman</h5>
</div>
<div class="modal-body">
    <form action="" method="">
      {{csrf_field()}}
      <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Status Pinjaman</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                                <select name="ruangan"class="form-control" id="exampleFormControlSelect1">
                                                    <option value="Ruang Seminar Tasdik">Tidak Diperbolehkan</option>
                                                    <option value="Atrium Didaktos">Diperbolehkan</option>
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

<div class="text-center">
  
</div>
    <div class="w3-main" style="margin-left:200px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Data Dosen Peminjam Ruangan</b></h2>
    
    <div class="w3-row">
    <div>
        <table class="table">
        <tr>
        <th>Nama Dosen</th>
        <th>NIM</th>
        <th>Fakultas</th> 
        <th>Prodi</th>
        <th>Tanggal Pinjam</th>
        <th>Jam Pinjam(mulai)</th>
        <th>Jam Pinjam(selesai)</th>
        <th>Nama Ruangan</th>
        </tr>
        @foreach($data_peminjamdosen as $peminjamdosen)
        <tr>
        <td>{{$peminjamdosen->nama}}</td>
        <td>{{$peminjamdosen->nik}}</td>
        <td>{{$peminjamdosen->fakultas}}</td>
        <td>{{$peminjamdosen->prodi}}</td>
        <td>{{$peminjamdosen->tgl_pinjam}}</td>
        <td>{{$peminjamdosen->jam_mulai}}</td>
        <td>{{$peminjamdosen->jam_selesai}}</td>
        <td>{{$peminjamdosen->ruangan}}</td>
        </tr>
        @endforeach
        </table>
        </div>
       
      </div>
  </header>
       
  </div>


</body>
</html>