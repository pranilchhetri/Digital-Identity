<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <style>
        .fc-r2 {

  font-family: Roboto, sans-serif;
  font-size: 1.2em;
  font-weight: 10;

  line-height: 1em;
  
  
  display: inline-block;
  
  padding: 0.65em 0 0.65em 0.7em;
}

image {
  border-radius: 50%;
  -webkit-transition: -webkit-transform 1s ease-in-out;
          transition:         transform 1s ease-in-out;
}
image:hover {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
    </style>

    <div class="container-fluid" style="background-color: #0d3370; padding-top:5px;">
        <h5 class="fc-r2" style="color: white; text-align: left; padding: 5px;">Howdy <?php echo htmlspecialchars($_SESSION['username']); ?></h5>
        <a href="logout.php"><div style="float: right; padding-right: 20px;">
        <img src="../images/logout.png" style="width: 20px; height: auto; float: right; padding-right: 5px; padding-top: 5px;"><h5 style="text-align: right; color:white;">Logout</h5>
        </div></a>
    </div>

    <div class="container" style="padding-top: 200px;">
        <div class="col-md-4">
           <a href="register/index.php"> <img src="../images/register.png" class="image" style="width: 100px; height: auto;"></a>  <br>
               <a href="register/index.php"> <p style="padding-top: 40px; font-size: 20px;" class="fc-r2">Register Students</p></a>
        </div>
    
    
   
        <div class="col-md-4">
             <a href="register.php"><img src="../images/stu_details.png" class="image"  style="width: 100px; height: auto;"> </a> <br>
                 <a href="details.php"><p style="padding-top: 40px; font-size: 20px;" class="fc-r2">Students Details</p></a>
        </div>
    
        <div class="col-md-4">
            <a href="register.php"><img src="../images/signup.png" class="image"  style="width: 100px; height: auto;">  </a><br>
               <a href="register.php"> <p style="padding-top: 40px; font-size: 20px;" class="fc-r2">Add Administrator</p></a>
        </div>

</div>
</body>
</html>