<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tes Kepribadian MBTI</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url();?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom.css"  media="screen,projection"/>


</head>
<body>

  <!--Menu-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='<?php echo base_url();?>js/materialize.min.js'></script>
  <script type="text/javascript">
     function alert(){ //alert mulai kuis
     var msg = confirm("Tes ini hanya dapat dilakukan 1x dan bacalah petunjuknya terlebih dahulu, yakin untuk memulai ?");
     if(msg==true){
        window.location="<?php echo site_url();?>/tes/tesmbti";
     }
     else{
        window.location="<?php echo site_url();?>/tes/indextes";
        
     }
     }
   </script>

  <div class="navbar-fixed ">
    <nav class=" red darken-3">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo"><img src="<?php echo base_url();?>images/headericon.png"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="<?php echo site_url();?>/home/user_logout">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>



  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center red-text">Tes Kepribadian MBTI</h1>
      <p class="center col s12 light" style="font-size: 19px;">Kenali diri anda lebih jauh</p>
      <div class="row center"> <!--Button mulai-->
        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal" onclick="alert();">Mulai Kuis</a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="center row">
        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="<?php echo base_url();?>images/redstopwatch.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Time</h5>

            <p class="light">Usahakan jawab dalam waktu kurang dari <b><b>15 menit.</b></b><br><br></p> <!--br untuk menyamakan card-panel-->
          </div>
        </div>

        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="<?php echo base_url();?>images/its_me.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Answer</h5>

            <p class="light"> Jawablah sesuai dengan yang paling menggambarkan diri anda sejujur mungkin</p>
          </div>
        </div>

        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="<?php echo base_url();?>images/icon1x.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Rule</h5>

            <p class="light">Tes dilakukan <b>1x</b> <br> Dengan menjawab 60 pertanyaan sederhana<br></p> <!--br untuk menyamakan card-panel-->
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <!--Footer-->
    <footer class="red darken-3">
      <div class="layout">
        <ul class="footer-links">
          <li>
            <a href="#" style="color:white;">Admission</a>

          </li>
        </ul>
        <div class="social-links-wrapper">
          <ul class="social-links">
              <a href="#">
                <img src="<?php echo base_url();?>images/icon-facebook.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="<?php echo base_url();?>images/icon-instagram.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="<?php echo base_url();?>images/icon-twitter.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="<?php echo base_url();?>images/icon-email.png" width="30px" height="30px"></a>
          </ul>
        </div>
      </div>
    </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
