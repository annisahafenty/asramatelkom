<!DOCTYPE html>
<html>
<head>
  <title>Admin Page - Upload File</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='<?php echo base_url();?>css/materialize.css'>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/materialize.min.js"></script>
  <!--Navbar-->

  <main>
  <div class="navbar-fixed">
    <nav class=" red darken-3">
    </nav>
  </div>
    <!--Sidenav, belum responsive-->
    <ul class="side-nav fixed">
      <!--Header Sidenav-->
      <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <div class="user-panel">
        <div class="pull-left image">
          <i class="material-icons admin md-48" alt="user-image">face </i>
        </div>
        <div class="pull-left info">
          <p>Hello, Admin!</p>
        </div>
      </div>
      <!--Menu Sidenav-->
      <li class="white"><a href="<?php echo site_url();?>/admin/dashboard"><i class="material-icons">home</i>Home</a></li>
      <li class="active"><a href="#"><i class="material-icons">file_upload</i>Upload File</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/soal"><i class="material-icons">assignment</i>Soal MBTI</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datagedung"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datakamar"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datapenghuni"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/detailnilai"><i class="material-icons">assessment</i>Nilai Tes Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/home/admin_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h3>Upload File Data Penghuni</h3>
        <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Table Data Gedung-->
        <div class="row">
          <div class = "col s6">
            <p>1. File dalam format .csv<p>
            <p>2. Data yang dimasukkan (data harus berurutan):</p>
            <p>Nama, Jenis Kelamin, Jurusan, Nomor HP, Kota, Provinsi, Username dan Password</p>
          </div>
          <div class="col s6">
            <img class="materialboxed" src="<?php echo base_url();?>images/contoh.JPG" width="80%">
          </div>
        </div>
        <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <div class="row">
        <div class="col s6">
        <form method="POST" enctype="multipart/form-data">
              <div class="file-field input-field ">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="file">
                </div>
                <div class="file-path-wrapper ">
                  <input class="file-path validate" type="text" placeholder="Upload Excel File Format CSV Here">
                </div>
              </div>
              <div class="row">
                <div class="col s6">
                  <button class="btn waves-effect grey darken-4" type="submit" name="submit" value="Import" style="float:right">Tambah</button>
                </div>
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
      <!-- SCRIPT ZOOM PICTURE -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
    </script>
  </main>
</body>
</html>
