<!DOCTYPE html>
<html>
<head>
  <title>Lihat Kamar</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='<?php echo base_url();?>css/materialize.css'>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Script untuk Chart-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
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
          <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        </div>
      </div>
      <!--Menu Sidenav-->
      <li class="white"><a href="<?php echo site_url();?>/home/datakepribadian"><i class="material-icons">stars</i>Data Kepribadian</a></li>
      <li class="active"><a href="#"><i class="material-icons">content_paste</i>Lihat Kamar</a></li>
      <li class="white"><a href="<?php echo site_url();?>/home/user_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <?php
        $qry = "SELECT * FROM tbpenghuni
                INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni
                INNER JOIN tbisikamar ON tbisikamar.id_penghuni=tbhasiltes.id_penghuni
                INNER JOIN tbkamar ON tbisikamar.id_kamar=tbkamar.id_kamar
                INNER JOIN tbgedung ON tbgedung.id_gedung = tbkamar.id_gedung WHERE tbpenghuni.id_penghuni=$id_penghuni";
        $result = mysqli_query($db, $qry);
        $row = mysqli_fetch_assoc($result);
        $kamar=$row['id_kamar'];


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
            <?php
            $querylist = mysqli_query($db,"SELECT * FROM tbpenghuni
                    INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbisikamar ON tbisikamar.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbkamar ON tbisikamar.id_kamar=tbkamar.id_kamar WHERE tbkamar.id_kamar=$kamar");
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
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <button class="btn waves-effect grey darken-4" type="submit" name="action">Print<i class="material-icons right">local_printshop</i>
        </button>
      </div>
    </div>
    </div>
    </main>

</body>
</html>
