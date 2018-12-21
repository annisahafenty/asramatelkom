<!DOCTYPE html>
<html>
<head>
  <title>Admin Page - Data Gedung</title>
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
      <li class="white"><a href="<?php echo site_url();?>/upload/index"><i class="material-icons">file_upload</i>Upload File</a></li>
      <li class="active"><a href="#"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datakamar"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datapenghuni"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/detailnilai"><i class="material-icons">assessment</i>Nilai Tes Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/admin_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <input type="text"  id="myInput" onkeyup="mySearchFunction()" placeholder="Cari Gedung" style="width:30%;height:40px;float: right;">
        <h3>Data Gedung</h3>
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Table Data Gedung-->
        <div class="pmd-card pmd-z-depth pmd-card-custom-view">
        <!-- <form method="GET" action =''>
        <a><button type="submit" class="btn pmd-btn-raised pmd-ripple-effect btn-info" id="laki-laki" name="laki-laki">Gedung Laki-Laki</button></a>
        <a><button type="submit" class="btn pmd-btn-raised pmd-ripple-effect btn-info" id="perempuan" name="perempuan">Gedung Perempuan</button></a>
        </form> -->
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
            <table id="tabelgedung" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Gedung</th>
                  <th>Tipe Gedung</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // if (isset($_GET['perempuan'])) {
                //   $query_data_gedung = mysqli_query($db,"SELECT * FROM tbgedung WHERE tipe_gedung='Asrama Perempuan'");
                // }else{
                //   $query_data_gedung = mysqli_query($db,"SELECT * FROM tbgedung WHERE tipe_gedung='Asrama Laki-Laki'");
                // }
                $no = 1;
                $numbering=1;
                foreach($gedung as $row)
                {
                ?>
                <td><?php echo $numbering; $numbering++?></td>
                <td><?php echo $row->nama_gedung;?></td>
                <td><?php echo $row->tipe_gedung;?></td>
                <td>
                <?php $gedung = $row->id_gedung;?> 
                  <a href="<?php echo site_url();?>/admin/editgedung/<?php echo $gedung;?>"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger" name ="idgedung" value="<?php echo $gedung;?>">Edit</button></a>
                </td>
                </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
              <script>

                  function mySearchFunction() {
                	  var input, filter, table, tr, td, i;
                	  input = document.getElementById("myInput");
                	  filter = input.value.toUpperCase();
                	  table = document.getElementById("tabelgedung");
                	  tr = table.getElementsByTagName("tr");

                	  for (i = 0; i < tr.length; i++) {
                		td = tr[i].getElementsByTagName("td")[1];
                		if (td) {
                		  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                			tr[i].style.display = "";
                		  } else {
                			tr[i].style.display = "none";
                		  }
                		}
                	  }
                	}
              </script>
            </table>
          </div>
        </div> <!--Table -->
      </div>
    </div>
  </main>
</body>
</html>
