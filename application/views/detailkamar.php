<!DOCTYPE html>
<html>
<head>
  <title>Data Kamar</title>
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
      <li class="white"><a href="<?php echo site_url();?>/admin/soal"><i class="material-icons">assignment</i>Soal MBTI</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datagedung"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="active"><a href="<?php echo site_url();?>/admin/datakamar"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/datapenghuni"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/admin/detailnilai"><i class="material-icons">assessment</i>Nilai Tes Penghuni</a></li>
      <li class="white"><a href="<?php echo site_url();?>/home/admin_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
  <div class="container">
    <div class="section no-pad-bot" id="divtoprint">
      <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <?php
      $id_kamar = $_GET['id'];
      $qry = mysqli_query($db,"SELECT * FROM tbkamar INNER JOIN tbgedung ON tbgedung.id_gedung = tbkamar.id_gedung WHERE tbkamar.id_kamar=$id_kamar");
      $row = mysqli_fetch_array($qry);
      ?>
      <h3>Kamar <?php echo substr($row['nama_gedung'],7,8);?>-<?php echo $row['nama_kamar'];?></h3>
      <p><?php echo $row['nama_gedung'];?></p>
      <p>Lantai <?php $string= $row['nama_kamar']; echo $firstCharacter=$string[0];?></p>
      <p>Kamar <?php echo $row['nama_kamar'];?></p>
      <table class="responsive-table">
        <thead>
          <tr>
              <th>Nama</th>
              <th>Asal Daerah</th>
              <th>Program Studi</th>
              <th>Nomor Handphone</th>
              <th>Tipe Kepribadian</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <?php
            $querylist = mysqli_query($db,"SELECT * FROM tbpenghuni
                    INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbisikamar ON tbisikamar.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbkamar ON tbisikamar.id_kamar=tbkamar.id_kamar WHERE tbkamar.id_kamar=$id_kamar");
            $no = 1;
            while($rowlist = mysqli_fetch_array($querylist))
            {
              ?>
              <td><?php echo $rowlist['nama_penghuni'];?></td>
              <td><?php echo $rowlist['kota'];?></td>
              <td><?php echo $rowlist['program_studi'];?></td>
              <td><?php echo $rowlist['nomor_hp'];?></td>
              <td><?php echo $rowlist['tipe_kepribadian'];?></td>

              </tr>
              <?php
                $no++;
              }
              ?>
        </tbody>
      </table>
      
    </div>
    <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <div class="right" id="divnottoprint">        
        <a href="" onClick="PrintDiv()"><button class="btn waves-effect grey darken-4" type="button" name="action">Print<i class="material-icons right">local_printshop</i></button></a>
      </div>
  </div>
  
  </main>
  <script type="text/javascript"> //script print
      function PrintDiv() {
           var divToPrint = document.getElementById('divtoprint');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
      }
    </script>
</body>
</html>
