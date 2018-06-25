<!DOCTYPE html>
<html>
<head>
  <title>Selamat Datang</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/materialize.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  .parallax-container {
      height: 700px;
    }

    h1{
      font-family: 'Open Sans', sans-serif;
      font-size: 30px;
    }

    .navbar-fixed{
    @extend .blue, .lighten-4;
    }

    * {
    box-sizing: border-box;
    }

    .column {
        float: left;
        width: 33.33%;
        padding: 0px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

  </style>

</head>
<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='<?php echo base_url();?>js/materialize.min.js'></script>

  <!--Menu-->
  <div class="navbar-fixed ">
    <nav class=" red darken-3">
      <div class="nav-wrapper container">
        <img src="<?php echo base_url();?>images/headericon.png">
        <a href="#" data-activates="mobile-menu" class="button-collapse">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down"> <!--Menu Normal-->
          <li class="active"><a href="#">Menu</a></li>
          <li><a href="<?php echo site_url();?>/home/login">Login</a></li>
        </ul>
        <ul class="side-nav" id="mobile-menu"> <!--Side Nav untuk Mobile-->
          <li class="active"><a href="#">Menu</a></li>
          <li><a href="#">Login</a></li>
          <script>
             $(".button-collapse").sideNav();
          </script>
        </ul>
      </div>
    </nav>
  </div>

  <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->

  <!--Tutorial-->
  <h3 class="center">Cara Mendapatkan Kamar Asrama</h3>
  <p class="center">Jangan ragu untuk masuk Asrama Universitas Telkom, ikuti langkah-langkah di bawah ini!</p>
  <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
  <!--Card Tutorial-->
  <div class="row container">
    <div class="col s4">
      <div class="card-panel white">
        <span>
        <div class="row center">
          <img src="<?php echo base_url();?>images/login.png">
        </div>
        <div class="row">
          <h5 class="center">Login</h5>
          <p class="center">Login dengan menggunakan nomor peserta dan password yang terdapat pada surat kelulusan 
            yang didapat saat pengumuman.</p>
        </div>
        </span>
      </div>
    </div>
    <div class="col s4">
      <div class="card-panel white">
        <span>
        <div class="row center">
          <img src="<?php echo base_url();?>images/formulir.png">
        </div>
        <div class="row">
          <h5 class="center">Isi Tes</h5>
          <p class="center">Mengisi tes secara teliti dan benar.</p>
        </div>
        </span>
      </div>
    </div>
    <div class="col s4">
      <div class="card-panel white waves-effect waves-red">
      <span>
      <div class="row center">
        <img src="<?php echo base_url();?>images/roomnumber.png">
      </div>
      <div class="row">
        <h5 class="center">Nomor Kamar</h5>
        <p class="center">Setelah mengisi test akan mendapatkan nomor kamar asrama dan 
          mengetahui data diri teman sekamar.</p>
      </div>
      </span>
      </div>
    </div>
  </div>

  <!--Penjelasan Asrama-->
  <div class="row container">
    <div class="col s6">
    <h3 class="center">Tentang Asrama Telkom University</h3>
    <p align="justify">Asrama Universitas Telkom mulai diberlakukan pada tahun 2013. Mahasiswa baru akan menempati asrama selama satu tahun akademik.
                      Satu kamar asrama terdiri akan ditempati oleh 4 penghuni. Asrama Universitas Telkom dibangun dengan tujuan sebagai sarana membentuk 
                      karakter mahasiswa baru. Diharapkan dengan adanya program asrama ini akan menjadi tempat belajar mahasiswa baru untuk hidup mandiri
                      dan bertanggung jawab.</p>
  
    </div>
    <div class="col s6">
        <img class="materialboxed" src="<?php echo base_url();?>images/asrama.jpg" alt="Fjords" style="width:100%">
    </div>
  </div>
  <!--Image Slider-->
  <h3 class="center">Sekilas Asrama</h3>
  <div class="row container">
    <div class="col s6">
        <img class="materialboxed" src="<?php echo base_url();?>images/fasilitas.jpg" alt="Fasilitas Kamar  width="100%"">
    </div>
    <div class="col s6">
      <h5>Fasilitas Kamar:</h5>
      <p>1. Tempat Tidur (lengkap dengan bantal dan guling)</p>
      <p>2. Meja Belajar</p>
      <p>3. Kamar Mandi</p>
      <p>4. Lemari</p>
    </div>
  </div>
  <div class="row">
    <div class="column">
        <img class="materialboxed" src="<?php echo base_url();?>images/asrama2.jpg" alt="Fjords" style="width:100%">
    </div>
    <div class="column">
        <img class="materialboxed" src="<?php echo base_url();?>images/asrama3.jpg" alt="Fjords" style="width:100%">
    </div>
    <div class="column">
        <img class="materialboxed" src="<?php echo base_url();?>images/asrama5.jpg" alt="Fjords" style="width:100%">
    </div>
  </div>



<!--Footer-->
  <footer class="red darken-3">
    <div class="layout">
      <ul class="footer-links">
        <li>
          <a href="https://igracias.telkomuniversity.ac.id/admission/index.php" style="color:white;">Admission</a>
        </li>
      </ul>
      <div class="social-links-wrapper">
        <ul class="social-links">
            <a href="https://www.facebook.com/groups/dormitorytelkom" target="_blank"><img src="<?php echo base_url();?>images/icon-facebook.png" width="30px" height="30px"></a>
            <a href="https://www.instagram.com/telkomdormitory/" target="_blank"><img src="<?php echo base_url();?>images/icon-instagram.png" width="30px" height="30px"></a>
            <a href="https://twitter.com/telkomdormitory" target="_blank"><img src="<?php echo base_url();?>images/icon-twitter.png" width="30px" height="30px"></a>
            <a href="mailto:dormitory@telkomuniversity.ac.id" target="_blank"><img src="<?php echo base_url();?>images/icon-email.png" width="30px" height="30px"></a>
        </ul>
      </div>
    </div>
  </footer>
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
</body>
</html>
