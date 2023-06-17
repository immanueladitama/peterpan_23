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
  <a href="/homepage" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="/pageruangan" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-building w3-xxlarge"></i>
    <p>DAFTAR RUANGAN</p>
  </a>
   <a href="/loginmahasiswa" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
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
    <h2><b>Daftar Ruangan Yang Tersedia</b></h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Pinjam Ruangan
    </button>
    </header>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Form Pinjam Ruangan</h5>
</div>
<div class="modal-body">
    <form action="/pinjamruangan" method="POST">
      {{csrf_field()}}
      <div class="form-group">
                 <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Nama Peminjam</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nama" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">NIM</label>
                        <div class="cols-sm-10">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nim" id="email" placeholder="" />
                          </div>
                        </div>
                  </div>
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
    <div class="w3-row">
    <div>
        <table class="table">
        <tr>
        <th>Nama Ruangan</th>
        <th>Kategori</th> 
        <th>Kapasitas</th> 
        <th>Fasilitas</th>
        <th>Status</th>
        </tr>
        @foreach($data_ruangan as $ruangan)
        <tr>
        <td>{{$ruangan->nama_ruangan}}</td>   
        <td>{{$ruangan->kategori}}</td> 
        <td>{{$ruangan->kapasitas}}</td> 
        <td>{{$ruangan->fasilitas}}</td> 
        <td>{{$ruangan->status}}</td> 
        </tr>
        @endforeach
        </table>
        </div>
       
      </div>
      
  </div>


</body>
</html>