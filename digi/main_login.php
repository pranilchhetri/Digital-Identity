<?php
  session_start();

  if(isset($_SESSION['username'])){
    header("location:request.php");
  }
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="css/w3.css" rel="stylesheet">
  </head>
  <style>
    body{
      background:  url("images/back2.gif") no-repeat right top;

    }
  </style>
  <body>
    <div class="container" style="padding-top: 50px;">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 w3-card-4 w3-white w3-round-xlarge">
         
      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading" style="color:#0d3370;">Sign in</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus style="margin-bottom: 10px;">
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"></div>
        <div style="padding-bottom: 20px;">
          
        </div>
      </form>
</div>
<div class="col-md-4">
        </div>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
    
  </body>
</html>
