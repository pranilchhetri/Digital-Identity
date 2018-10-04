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
  session_start();

  if(!isset($_SESSION['username'])){
    header("location:main_login.php");
  }
?>
<div class="container">
      <div class="form-signin">
        <div class="alert alert-success">You have been <strong>successfully logged in</strong>.</div>
        <a href="logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php
$con=mysqli_connect("localhost","root","","digitalid");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$sql="SELECT rollno, firstname, lastname, email, image, approve FROM students";
function approve(){
   //$sql="UPDATE 'students' SET 'approve' = '1' WHERE 'students'.'rollno' = '$roll'";
   
   echo "pranil";
}

?>
<script>
  function UpdateRecord(id)
  {
      jQuery.ajax({
       type: "POST",
       url: "del_reason.php",
       data: 'id='+id,
       cache: false,
       success: function(response)
       {
         alert("Record successfully updated");
       }
     });
 }
</script>
<style>
   
   .box{
      border: 1px solid gray;
   }
</style>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <div class="container" style="margin: 20px; padding: 20px;">
      <h2>Blockchained Database</h2>
 

 <?php    

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

      if ($row['5']==2)
      {
      ?>
      <div class="row box">
         <div class="profile col-md-2">
            <img src="images/<?php echo "{$row['4']}";?>" style="width: 100px; height: auto;">
        
         </div> <div class="col-md-3" style="margin-top: 20px;">    <?php     echo "{$row['1']}   ".
         " {$row['2']} <br>".
         "{$row['0']} "; ?> </div> <div class="col-md-3">
            
         </div>
         <div class="col-md-3">
           

            
            
         </div>
         <div class="col-md-3">
           

            
            
         </div>
         <div class="col-md-3">
           

            <button class="btn btn-info disabled" style="margin-top: 30px;">
              Blockchained
            </button>
            
         </div>
      </div>

    <?php
 }
 }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
<div id="demo"></div>
   </div>
</body>
