<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
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
      <li class="white"><a href="<?php echo site_url();?>/admin/upload_file"><i class="material-icons">file_upload</i>Upload File</a></li>
      <li class="active"><a href="<?php echo site_url();?>/admin/soal"><i class="material-icons">assignment</i>Soal MBTI</a></li>
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

    </div>
  </main>
</body>
</html>
