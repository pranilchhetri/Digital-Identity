<?php
  session_start();

  //if(!isset($_SESSION['username'])){
    //header("location:insert.php");
  //}
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



  <title>Digital identity</title>
  
    <link href="css/main.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#mySidenav a {
    position: absolute;
    z-index: 2;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 125px;
    text-decoration: none;
    font-size: 12px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 80px;
    background-color: #3B5998;
}

#blog {
    top: 140px;
    background-color: #2196F3;
}

#projects {
    top: 200px;
    background-color: #3F729B;
}

#contact {
    top: 260px;
    background-color: #e4405f;
}
.icon{
  float: right;
  width: 25px;
  height: auto;
}
</style>


<body>
  <div id="mySidenav" class="sidenav">
  <a href="request.php" id="about">Request<img src="images/pending.png" class="icon"></a>
  <a href="approve.php" id="blog">Approved<img src="images/approve.png" class="icon"></a>
  <a href="project.php" id="projects">Digital ID<img src="images/digital.png" class="icon"></a>
</div>
<?php
  include 'validate2.php';
  ?>
  <div class="container">
    
  
<form action="insert.php" method="POST">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" class="form-control" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname"  class="form-control" placeholder="Last Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-group">
    <label for="pic">Display Picture</label>
    <input type="file" class="form-control-file" name="pic">
  </div>


  <button type="submit" name="sign_btn" class="btn btn-primary">Sign in</button>
</form>
</div>
</body>
</html>