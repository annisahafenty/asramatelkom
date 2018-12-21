<!DOCTYPE html>
<html>
<head>
  <title>Tipe Kepribadian</title>
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
      <li class="active"><a href="#"><i class="material-icons">stars</i>Data Kepribadian</a></li>
      <li class="white"><a href="<?php echo site_url();?>/asrama/lihatkamar"><i class="material-icons">content_paste</i>Lihat Kamar</a></li>
      <li class="white"><a href="<?php echo site_url();?>/home/user_logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <div class="section no-pad-bot" id="divtoprint">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->

        <?php
        foreach($tbhasiltes as $row){
        ?>

        <h2>Tipe Kepribadian Saya - <?php echo $row->tipe_kepribadian;?></h2>
        <br>
        <p>Nama : <?php echo $row->nama_penghuni; ?> </p>
        <p>Jurusan : <?php echo $row->program_studi; ?> </p>
        <div class="chart" style="padding:0; margin:0;"><!--chart-->
          <b style="font-size:23px;">Skor :</b>

        </div>
        <div class="left container" style="width:40%; ">
            <div id="stackedchart_values" style="header:none;"></div>
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Extrovert : <?php echo $row->nilai_e;?> (<?php echo round($persenE,0);?>%) &nbsp Introvert : <?php echo $row->nilai_i;?> (<?php echo round($persenI,0);?>%)</p> <!--hasil dari tes bukan diagram-->
                <div id="stackedchart_values2"></div>
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Sensing : <?php echo $row->nilai_s;?> (<?php echo round($persenS,0);?>%) &nbsp Intuitive : <?php echo $row->nilai_n;?> (<?php echo round($persenN,0);?>%)</p>
                <div id="stackedchart_values3"></div>
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Thinking : <?php echo $row->nilai_t;?> (<?php echo round($persenT,0);?>%) &nbsp Feeling : <?php echo $row->nilai_f;?> (<?php echo round($persenF,0);?>%)</p>
                <div id="stackedchart_values4"></div>
                <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Judging : <?php echo $row->nilai_j;?> (<?php echo round($persenJ,0);?>%) &nbsp Perceiving : <?php echo $row->nilai_p;?> (<?php echo round($persenP,0);?>%)</p>
                <br>            
        </div>
        <h3>Deskripsi</h3>
        <p><?php echo $row->keterangan;?></p>
        <h3>Partner</h3>
        <p><?php echo $row->partner1;?> dan <?php echo $row->partner2;?></p>
        <?php }?>
      </div>
      <div class="right" id="divnottoprint" style="padding:25px;">
        <a href="" target="_blank" onclick="PrintDiv()"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Cetak Hasil Tes</button></a>
      </div>
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
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" scr="https://www.google.com/jsapi"></script>
    <script type="text/javascript"> //script chart
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Extrovert', 'Introvert'],
           ['E/I',  <?php echo $totalE; ?>,  <?php echo $totalI; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 50,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values"));
        chart.draw(view, options_fullStacked);
    }
    </script>


    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Sensing', 'Intuitive'],
           ['S/N',  <?php echo $totalS; ?>,  <?php echo $totalN; ?>],

        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 50,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values2"));
        chart.draw(view, options_fullStacked);
    }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Thinking', 'Feeling'],
           ['T/F',  <?php echo $totalT; ?>,  <?php echo $totalF; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 50,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values3"));
        chart.draw(view, options_fullStacked);
    }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Judging', 'Perceiving'],
           ['J/P',  <?php echo $totalJ; ?>,  <?php echo $totalP; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 50,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values4"));
        chart.draw(view, options_fullStacked);
    }
    </script>

</body>
</html>
