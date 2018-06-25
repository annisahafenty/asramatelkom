<!DOCTYPE html>
<html>
<head>
  <title>Admin Page - Data Kamar</title>
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
      <li class="active"><a href="#"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
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
        <input type="text"  id="myInput" onkeyup="mySearchFunction()" placeholder="Cari Kamar" style="width:30%;height:40px;float: right;">
        <h3>Data Kamar</h3>
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Table Data Gedung-->
        <div class="pmd-card pmd-z-depth pmd-card-custom-view">

        <form method="GET" action =''>
        <a><button type="submit" class="btn pmd-btn-raised pmd-ripple-effect btn-info" id="laki-laki" name="laki-laki">Kamar Laki-Laki</button></a>
        <a><button type="submit" class="btn pmd-btn-raised pmd-ripple-effect btn-info" id="perempuan" name="perempuan">Kamar Perempuan</button></a>
        </form>
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->

          <div class="table-responsive">
            <table id="tabelkamar" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Gedung</th>
                  <th>Kamar</th>
                  <th>Jumlah Penghuni</th>
                  <th>Bobot Kamar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_GET['perempuan'])) {
                  $query_data_kamar = mysqli_query($db,"SELECT tbkamar.nama_kamar, tbgedung.nama_gedung, tbkamar.id_kamar, COUNT(tbisikamar.id_kamar) AS total FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung LEFT JOIN tbisikamar ON tbisikamar.id_kamar=tbkamar.id_kamar WHERE tbgedung.tipe_gedung='Asrama Perempuan' GROUP BY tbkamar.id_kamar ORDER BY tbkamar.id_kamar ASC");
                }else{
                  $query_data_kamar = mysqli_query($db,"SELECT tbkamar.nama_kamar, tbgedung.nama_gedung, tbkamar.id_kamar, COUNT(tbisikamar.id_kamar) AS total FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung LEFT JOIN tbisikamar ON tbisikamar.id_kamar=tbkamar.id_kamar WHERE tbgedung.tipe_gedung='Asrama Laki-Laki' GROUP BY tbkamar.id_kamar ORDER BY tbkamar.id_kamar ASC");
                }

                $no = 1;
                $numbering=1;

                while($row=mysqli_fetch_array($query_data_kamar))
                {
                $id_kamar=$row['id_kamar'];
                ?>
                <td><?php echo $numbering; $numbering++?></td>
                <td><?php echo $row['nama_gedung'];?></td>
                <td><?php echo $row['nama_kamar'];?></td>
                <td><?php echo $row['total'];?>/4</td>
                <?php
                    $query_bobot=mysqli_query($db,"SELECT
                    SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'SF' then 1 else 0 end) as SF,
                    SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'ST' then 1 else 0 end) as ST,
                    SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NT' then 1 else 0 end) as NT,
                    SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NF' then 1 else 0 end) as NF
                    FROM tbisikamar i JOIN tbhasiltes t ON i.id_penghuni = t.id_penghuni WHERE i.id_kamar = '$id_kamar'");

                    $no2 = 1;
                    $bobot = 0;
                    while($row2=mysqli_fetch_array($query_bobot))
                    {
                      $SF=$row2['SF'];
                      $ST=$row2['ST'];
                      $NF=$row2['NF'];
                      $NT=$row2['NT'];

                      if($ST == 2 && $SF == 2 || $ST == 2 && $NT == 2 || $SF == 2 && $NF == 2 || $NF == 2 && $NT == 2){
                        $bobot = 2;
                      }else if($ST == 1 && $SF == 3 || $ST == 3 && $SF == 1
                            || $ST == 1 && $NT == 3 || $ST == 3 && $NT == 1
                            || $SF == 1 && $NF == 3 || $SF == 3 && $NF == 1
                            || $NF == 1 && $NT == 3 || $NF == 3 && $NT == 1
                            || $ST == 4 || $SF == 4 || $NT == 4 || $NF == 4){
                        $bobot = 1;
                      }else{
                        $bobot = "-";
                      }
                ?>

                <td><?php echo $bobot;?></td>
                  <?php
                  $no2++;
                    }
                  ?>
                <td>
                  <a href="admin_lihatdatakamar.php?id=<?php echo $row['id_kamar']; ?>"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">View</button></a>
                </td>
                </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div> <!--Table -->
      </div>
    </div>
  </main>
  <script>
    function mySearchFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tabelkamar");
      tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        	td = tr[i].getElementsByTagName("td")[2];
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
</body>
</html>
