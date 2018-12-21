<!DOCTYPE html>
<html>
<head>
  <title>Admin Page - Data Penghuni</title>
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
      <li class="white"><a href="<?php echo site_url();?>/admin/datagedung"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datakamar"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="active"><a href="#"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/detailnilai"><i class="material-icons">assessment</i>Nilai Tes Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/admin_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="divtoprint">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <input type="text"  id="myInput" onkeyup="mySearchFunction()" placeholder="Cari Penghuni" style="width:30%;height:40px;float: right;">
        <h3>Data Penghuni</h3>
        <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Table Data Gedung-->
        <div class="pmd-card pmd-z-depth pmd-card-custom-view">
          <div class="table-responsive">
          <div class="right" id="divnottoprint" style="padding:25px;">
            <a href="" target="_blank" onclick="PrintDiv()"><button type="button" class="right btn waves-effect grey darken-4">Print<i class="material-icons right">local_printshop</i></button></a>
          </div>
          <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
            <table id="tabelpenghuni" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Program Studi</th>
                  <th>Nomor Hp</th>
                  <th>Kota</th>
                  <th>Tipe Kepribadian</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $numbering=1;

                foreach($penghuni as $row)

                {
                ?>
                <td><?php echo $numbering; $numbering++?></td>
                <td><?php echo $row->nama_penghuni;?></td>
                <td><?php echo $row->jenis_kelamin;?></td>
                <td><?php echo $row->program_studi;?></td>
                <td><?php echo $row->nomor_hp;?></td>
                <td><?php echo $row->kota;?></td>
                <td><?php echo $row->tipe_kepribadian;?></td>
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
                	  table = document.getElementById("tabelpenghuni");
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
              <script type="text/javascript"> //script print
              function PrintDiv() {
                var divToPrint = document.getElementById('divtoprint');
                var popupWin = window.open('', '_blank');
                popupWin.document.open();
                popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                popupWin.document.close();
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
