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

</head>
<body>

  <!--Menu-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='<?php echo base_url();?>js/materialize.min.js'></script>

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
      <br><br>
      <h1 class="header center orange-text">Tes Kepribadian MBTI</h1>
      <hr>
    </div>
  </div>

          <div class="container">
            <form action="<?php echo site_url();?>/tes/hasil_tesmbti" class="" role="form" method="post" accept-charset="utf-8" id="soal" >
              <div class="row">
              <!-- EI -->
                <?php foreach($soal_ei as $row) {?>
                  <div>
                  <label for="e_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="ei_<?php echo $row->id;?>" id="e_<?php echo $row->id;?>" value="A" required/>
                      <span>
                        <?php echo $row->soal_e;?>
                      </span>
                  </label>
                  </div>

                  <div>
                  <label for="i_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="ei_<?php echo $row->id;?>" id="i_<?php echo $row->id;?>" value="B" required/>
                      <span>
                        <?php echo $row->soal_i;?>
                      </span>
                  </label>
                  </div>                        
                  <hr>
                <?php }?>
                <hr>    
                <!-- SN -->
                <?php foreach($soal_sn as $row) {?>
                  <div>
                  <label for="s_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="sn_<?php echo $row->id;?>" id="s_<?php echo $row->id;?>" value="A" required/>
                      <span>
                        <?php echo $row->soal_s;?>
                      </span>
                  </label>
                  </div>

                  <div>
                  <label for="n_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="sn_<?php echo $row->id;?>" id="n_<?php echo $row->id;?>" value="B" required/>
                      <span>
                        <?php echo $row->soal_n;?>
                      </span>
                  </label>
                  </div>                        
                  <hr>
                <?php }?>
                <hr>
                <!-- TF -->
                <?php foreach($soal_tf as $row) {?>
                  <div>
                  <label for="t_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="tf_<?php echo $row->id;?>" id="t_<?php echo $row->id;?>" value="A" required/>
                      <span>
                        <?php echo $row->soal_t;?>
                      </span>
                  </label>
                  </div>

                  <div>
                  <label for="f_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="tf_<?php echo $row->id;?>" id="f_<?php echo $row->id;?>" value="B" required/>
                      <span>
                        <?php echo $row->soal_f;?>
                      </span>
                  </label>
                  </div>                        
                  <hr>
                <?php }?>
                <hr> 
                <!-- JP -->
                <?php foreach($soal_jp as $row) {?>
                  <div>
                  <label for="j_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="jp_<?php echo $row->id;?>" id="j_<?php echo $row->id;?>" value="A" required/>
                      <span>
                        <?php echo $row->soal_j;?>
                      </span>
                  </label>
                  </div>

                  <div>
                  <label for="p_<?php echo $row->id;?>">
                    <input class="with-gap" type="radio" name="jp_<?php echo $row->id;?>" id="p_<?php echo $row->id;?>" value="B" required/>
                      <span>
                        <?php echo $row->soal_p;?>
                      </span>
                  </label>
                  </div>                        
                  <hr>
                <?php }?>
                <input type="submit" name="btnSubmit" value="Lihat Hasil" class="btn btn-primary teal right" style="padding-left:100px; padding-right:100px;">  
              </div>  <!-- row -->              
            </form>
          </div>

      <!--Footer-->
        <footer class="red darken-3">
          <div class="layout">
            <ul class="footer-links">
              <li>
                <a href="#" style="color:white;">Admission</a>
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

  </body>
  </html>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>js/materialize.js"></script>
  <script src="<?php echo base_url();?>js/init.js"></script>


  </body>
</html>
