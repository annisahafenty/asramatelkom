<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='<?php echo base_url();?>css/materialize.css'>
  <link type="text/css" rel="stylesheet" href='<?php echo base_url();?>css/custom.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .card {
      width:350px;
    }
  </style>
</head>

<body class="red darken-4">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/materialize.min.js"></script>

<div class="atcenter">
  <div class="center">
    <div class="vc_empty_space" style="height:25px"><span class="vc_empty_space_inner"></span></div>
    <img src="<?php echo base_url();?>images/gku.png">
    <!--Card-->
    <div class="row">
        <div class="card card-panel loginbox blue-grey lighten-5">
          <h5 class="center card-title">Log In Admin</h5>
          <!--Form-->
              <form action="<?php echo site_url();?>/Admin/admin_login" method="POST">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="username" type="text" class="validate" name="username">
                    <label for="username">username</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">password</label>
                  </div>
                  <div class="row ">
                    <div class="col s12">
                      <button class="btn waves-effect grey darken-4" type="submit" name="action">Log In</button>
                    </div>
                  </div>
                </div>
              </form>
          <!--Form-->
        </div>
      </div>
  <!--Card-->
  </div>
</div>
</body>
</html>
