<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Tes Kepribadian MBTI</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url();?>css/materializez.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom2.css"  media="screen,projection"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>



  </head>
  <body>

    <!--Menu-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='<?php echo base_url();?>js/materialize.min.js'></script>

    <div class="navbar-fixed ">
      <nav class=" red darken-3">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo"><img src="<?php echo base_url();?>images/headericon.png"></ae>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo site_url();?>/home/user_logout">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="section no-pad-bot" >
      <div class="container">
        <br><br>
        <h4 class="h4 gray-text" id="divtoprint">Tipe Kepribadian Anda :</h4>
        <div class="center" id="divtoprint1">
          <form class="" action="" method="post">

            <h3 class="header" name="hasiltest" id='diagramhasil'>
              <p>--
                <b>
                    <?php
                      foreach ($tbhasiltes as $row){
                      echo $row->tipe_kepribadian;
                     ?>
                </b> <!--Hasil Tipe-->
              --</p>
            </h3>

        </div>
        <nav class="container center red darken-3" style="height:5px; width:100%;">

        </nav>
        <br><br>

        <!--layout-->
        <div class="row">
          <div class="left-sidebar grey lighten-2" id="divtoprint2">
            <div class="chart" style="padding:0; margin:0;"><!--chart-->
              <b style="font-size:23px;">Skor :</b>
            </div>

            <div class="" style="height:60%;">
              <div id="stackedchart_values"></div>
              <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Extrovert : <?php echo $row->nilai_e;?> (<?php echo round($persenE,0);?>%) &nbsp Introvert : <?php echo $row->nilai_i;?> (<?php echo round($persenI,0);?>%)</p> <!--hasil dari tes bukan diagram-->
              <div id="stackedchart_values2"></div>
              <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Sensing : <?php echo $row->nilai_s;?> (<?php echo round($persenS,0);?>%) &nbsp Intuitive : <?php echo $row->nilai_n;?> (<?php echo round($persenN,0);?>%)</p>
              <div id="stackedchart_values3"></div>
              <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Thinking : <?php echo $row->nilai_t;?> (<?php echo round($persenT,0);?>%) &nbsp Feeling : <?php echo $row->nilai_f;?> (<?php echo round($persenF,0);?>%)</p>
              <div id="stackedchart_values4"></div>
              <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Judging : <?php echo $row->nilai_j;?> (<?php echo round($persenJ,0);?>%) &nbsp Perceiving : <?php echo $row->nilai_p;?> (<?php echo round($persenP,0);?>%)</p>
              <br>
            </div>
          </div>
          <?php }?>
          <?php
            foreach ($tbtipekepribadian as $row){

          ?>
          <div class="right-sidebar grey lighten-2">
            <div class="col" id="divtoprint3">
              <b style="font-size:23px;">Deskripsi :</b><br><br> <!--Call deskripsi jawaban-->
                <?php echo $row->keterangan; ?>
              <br><br>
              <b style="font-size:23px;">Partner :</b><br> <!--Call partner jawaban-->
              <p><?php echo $row->partner1;?> dan <?php echo $row->partner2; ?></p>
            </div>
            <?php }?>
              <div class="right" style="padding-right:10px; padding-bottom:10px;">
                <button class="right btn waves-effect grey darken-4" type="button" onclick="window.print()">Print<i class="material-icons right">local_printshop</i></button>
                <div class="">
                  <a href="<?php echo site_url();?>/asrama/pengelompokan"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Lihat Kamar</button></a>
                </div>
              </div>

            </div>

          </div>
          </form>
        </div>

      </div>
    </div>


    <!--Footer-->
      <footer class="red darken-3 footer">
        <div class="layout">
          <ul class="footer-links">
            <li>
              <a href="#" style="color:white;">Admission</a>

            </li>
          </ul>
          <div class="social-links-wrapper">
            <ul class="social-links">
                <a href="#">
                  <img src="images/icon-facebook.png" width="30px" height="30px"></a>
                <a href="#">
                  <img src="images/icon-instagram.png" width="30px" height="30px"></a>
                <a href="#">
                  <img src="images/icon-twitter.png" width="30px" height="30px"></a>
                <a href="#">
                  <img src="images/icon-email.png" width="30px" height="30px"></a>
            </ul>
          </div>
        </div>
      </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript"> //script print
      function PrintDiv() {
           var divToPrint = document.getElementById('divtoprint');
           var divToPrint1 = document.getElementById('divtoprint1');
           var divToPrint2 = document.getElementById('divtoprint2');
           var divToPrint3 = document.getElementById('divtoprint3');
           var popupWin = window.open('', '_blank');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + divToPrint1.innerHTML + divToPrint2.innerHTML  + divToPrint3.innerHTML+ '</html>');
           popupWin.document.close();
      }
    </script>


    <!--Chart Script-->
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" scr="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Extrovert', 'Introvert'],
           ['E/I',  <?php echo $totalE; ?>,  <?php echo $totalI; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 75,
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
          height: 75,
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
          height: 75,
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
          height: 75,
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
