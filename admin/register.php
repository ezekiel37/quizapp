<?php
session_start();
if(isset($_SESSION["user_id"]))
  header("Location:files/dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="robots" content="noindex">
  <title>
   Admin Panel - Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="">
  <div class="wrapper" style="overflow: hidden;">
    <div class="main-panel" style="width:100% !important">
    
      <div class="parent">
        <!-- navbar-->
        <div class="logo-brand">
           <p>My Quiz App</p>
         </div>
         <div>
        <a href="index.php" class="btn btn-success btn-round">Login</a>
        <a href="./" class="btn btn-success btn-round">Signup</a>           
         </div>
        <!-- end navbar -->
       </div>
      <div class="" style="min-height: calc(92vh - 123px) !important; margin-top:-50px;">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <center><h5 class="title">Register</h5></center>
              </div>
              <div class="card-body">
                <form id="login_form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Your username">
                      </div>
                    </div>
                  </div>
                  
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Your Password" >
                      </div>
                    </div>
                  </div>
                  <div class="row center-element py-3">
                    <div class="col-md-8">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block btn-round">Register</button>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <center><div id="result"></div></center>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
          
        </div>
      </div>
      <?php include "files/footer.php";?>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
    <script>
    $('#login_form').submit(function(event) {
      console.log($(this).serialize());
      $("#result").html("Logging in...");
      /* Act on the event */
      event.preventDefault();
      $.ajax({
        type:"POST",
        url:"files/create.php",
        data:$(this).serialize(),
        success:function(data)
        {
          console.log(data)
          if(data=="success")
          {
            $("#result").html("Registration Successful");
            setTimeout(function(){
              window.location="files/dashboard.php";
            },1200);
          }
          else
          {
            $("#result").html("Registration Failed");
          }
        }
      });
    });
  </script>
</body>
</html>