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
  <a href="/homepage" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="/pageruangan" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-building w3-xxlarge"></i>
    <p>TAMBAH INFORMASI RUANGAN</p>
  </a>
  <a href="/pagepeminjam" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-exclamation-triangle w3-xxlarge"></i>
    <p>VALIDASI RUANGAN</p>
  </a>
</nav>


<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h2><b>Edit Ruangan UKDW</b></h2>
</div>

<div class="w3-main" style="margin-left:200px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Edit Data Ruangan</b></h2>
    <form action="{{route('editruangan',['id'=>$data_ruangan->id])}}" method="GET">
          {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Ruangan</label>
              <input name="nama_ruangan"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_ruangan->nama_ruangan}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kategori</label>
              <input name="kategori"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_ruangan->kategori}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kapasitas</label>
              <input name="kapasitas"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_ruangan->kapasitas}}" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas</label>
              <input name="fasilitas"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_ruangan->fasilitas}}">

      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">SUBMIT</button>
      </form>
</div>
    </header>
  
    </div>
  </div>
</div>



</body>
</html>