<!DOCTYPE html>
<html>
<head>
<title>Sistem Admin Ruangan UKDW</title> 
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
  <a href="/tambahruangan" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-plus-square w3-xxlarge"></i>
    <p>INPUT RUANGAN MHS</p>
  </a>
  <a href="/tambahruangandosen" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-plus-square w3-xxlarge"></i>
    <p>INPUT RUANGAN DOSEN</p>
  </a>
  <a href="/loginadmin" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
</nav>


<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h2><b>Daftar Ruangan UKDW</b></h2>
</div>

<div class="w3-main" style="margin-left:200px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Tambah Data Ruangan</b></h2>
    <h3>Informasi Ruangan Untuk Mahasiswa</h3>
    <form action="/addpengajuan" method="POST">
          {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Ruangan</label>
              <input name="nama_ruangan"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kategori</label>
              <input name="kategori"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kapasitas</label>
              <input name="kapasitas"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas</label>
              <input name="fasilitas"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
         
      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">SUBMIT</button>
      </form>
</div>
    </header>
   
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form action="" method="GET" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Ruangan</label>
              <input name="nama_ruangan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kategori</label>
              <input name="kategori"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kapasitas</label>
              <input name="kapasitas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas</label>
              <input name="fasilitas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
          
      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">SUBMIT</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="text-center">
  
</div>
    <div class="w3-main" style="margin-left:200px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Data Ruangan</b></h2>
    <h3>Informasi Ruangan Mahasiswa</h3>
    
    <div class="w3-row">
    <div>
        <table class="table">
        <tr>
        <th>Nama Ruangan</th>
        <th>Kategori</th> 
        <th>Kapasitas</th> 
        <th>Fasilitas</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        @foreach($data_ruangan as $ruangan)
        <tr>
        <td>{{$ruangan->nama_ruangan}}</td>   
        <td>{{$ruangan->kategori}}</td> 
        <td>{{$ruangan->kapasitas}}</td> 
        <td>{{$ruangan->fasilitas}}</td> 
        <td><a href="/prosesviewdata/{{$ruangan->id}}" class="btn btn-primary">Edit</a></td>
        <td><a href="/deleteruangan/{{$ruangan->id}}" class="btn btn-primary">Delete</a></td>
        </tr>
        @endforeach
        </table>
        </div>
       
      </div>
  </header>
  
       
  </div>
  <div class="text-center">
  
</div>
  
       
  
       
  </div>


</body>
</html>