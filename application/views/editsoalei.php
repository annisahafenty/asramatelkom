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
      <li class ="white"><a href="<?php echo site_url();?>/admin/soal_ei"><i class="material-icons">assignments</i>Soal Extrovert & Introvert</a></li> <!--baru diubah-->
      <li class ="white"><a href="<?php echo site_url();?>/admin/soal_sn"><i class="material-icons">assignments</i>Soal Sensing & Intuitive</a></li>
      <li class ="white"><a href="<?php echo site_url();?>/admin/soal_tf"><i class="material-icons">assignments</i>Soal Thinking & Feeling</a></li>
      <li class ="white"><a href="<?php echo site_url();?>/admin/soal_jp"><i class="material-icons">assignments</i>Soal Judgment & Perceiving</a></li>
      <li class ="white"><a href="<?php echo site_url();?>/admin/deskripsi"><i class="material-icons">assignments</i>Deskripsi</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/admin_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>


  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h3>Edit Soal Extrovert & Introvert</h3>
        <?php
          $id=$_GET['id'];
          $query = mysqli_query($db,"SELECT * FROM soal_ei WHERE id='$id'");
          $row = mysqli_fetch_array ($query);

        ?>
        <form action="inc/admin_editsoaltesei.php" method="post">
          <input type="hidden" name="no" value="<?php echo $id ?>" >
        <table id="soal" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="50%">
          <tr>
            <td>Soal Extrovert  : </td>
            <td><input type="text" name="soal_e" id="soal_e" size="25" type="text" class="validate" value="<?php echo $row['soal_e'];?>"></td>
          </tr>
          <tr>
            <td>Soal Introvert  : </td>
            <td><input type="text" name="soal_i" id="soal_i" size="25" type="text" class="validate" value="<?php echo $row['soal_i'];?>"></td><!--baru diubah-->
          </tr>

        </table>
        <div class="row">
          <div class="col s6">
            <button class="btn waves-effect grey darken-4" type="submit" name="action" style="float:right">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
