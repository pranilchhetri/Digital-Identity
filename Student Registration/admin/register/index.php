<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<?php //echo $dataofpage ; ?>
<html>

<style>
        .fc-r2 {

  font-family: Roboto, sans-serif;
  font-size: 1.2em;
  font-weight: 10;

  line-height: 1em;
  
  
  display: inline-block;
  
  padding: 0.65em 0 0.65em 0.7em;
}
</style>

<body bgcolor="" >
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

<div class="container-fluid" style="background-color: #0d3370; padding-top:5px;">
        <h5 class="fc-r2" style="color: white; text-align: left; padding: 5px;">Howdy <?php echo htmlspecialchars($_SESSION['username']); ?></h5>
        <a href="../logout.php"><div style="float: right; padding-right: 20px;">
        <img src="../../images/logout.png" style="width: 20px; height: auto; float: right; padding-right: 5px; padding-top: 5px;"><h5 style="text-align: right; color:white;">Logout</h5>
        </div></a>
    </div>
 <div class="container" style="padding:50px;padding-left:250px; padding-right:250px;">
	<h4>Register Here</h4>
<form name="iksk" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
  

           

    <div class="form-group">
      <label>First Name:</label>
      <input type="text" class="form-control" name="f_name" placeholder="Enter firstname">
    </div>
    <div class="form-group">
      <label>Last Name:</label>
      <input type="text" class="form-control" name="l_name" placeholder="Enter lastname">
    </div>

    <div class="form-group">
      <label for="dob">Date of Birth: </label>
      <input type="Date" class="form-control" name="dob" placeholder="Enter Date of Birth"></div>

      <div class="form-group">
      <label for="rollNo">Roll No.: </label>
      <input type="number" class="form-control" name="rollNo" placeholder="Enter roll no."></div>

<div class="form-group">
      <label for="address">Address: </label>
      <input type="text" class="form-control" name="address" placeholder="Enter Address"></div>

 <div class="form-group">
      <label for="expiryDate">Expiry Date: </label>
      <input type="Date" class="form-control" name="expiryDate" placeholder="Enter Date of Expiry"></div>


    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <!--<div class="form-group">
      <label>Confirm-Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Re-Enter password"></div>
-->
    


      <div class="form-group">
      <label for="ctz_num">Citizenship Number: </label>
      <input type="text" class="form-control" name="ctz_num" placeholder="Enter citizenship Number"></div>



     

      <div class="form-group">
      <label for="depart">Department:  </label>
      <select  name="depart"  />
<option>Civil Engineering</option>
<option>Electrical Engineering</option>
<option>Electronics and Computer Engineering</option>
<option>Mechanical Engineering</option>
<option>Architechture</option>

</select></div>

<!--<div class="form-group">
      <label for="image">Upload Your Photo: </label>
      <input type="file" name="image" size="50"></div>
	-->
     <input type="submit" name="submit"  value="Published Now">
     <!--
	<button type="submit" class="btn btn-default" name="submit">Publish Now</button>-->
</form>
</div>






</body>
</html>


<?php
//$con= mysqli_connect("ma-gar.com", "magarcom_pranil", "toshiba2015", "magarcom_digitalid");
$connect= mysqli_connect("ma-gar.com", "magarcom_pranil", "toshiba2015", "magarcom_digitalid");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

  $rollNo = $_POST["rollNo"];
  $firstname= $_POST["f_name"];
  $lastname=$_POST["l_name"];
  $address = $_POST["address"];
  $dob=$_POST["dob"];
  $ctzNum = $_POST["ctz_Num"];
  $department=$_POST["depart"];
  $expiryDate = $_POST["expiryDate"];
  $password=$_POST["password"];
  $photo=$_POST["image"];


  $query = "INSERT INTO `user` (`rollNo`, `firstname`, `lastname`, `address`, `dob`, `ctzNum`, `department`, `expiryDate`, `password`, `blockchain`) VALUES ('$rollNo', '$firstname', '$lastname', '$address', '$dob', '$ctzNum', '$department', '$expiryDate', '$password', '0');";
  if(mysqli_query($connect,$query)){
    echo "successful";
  } else {
    echo mysqli_error($connect);
  }
  mysqli_close($connect);
}

/*
if(isset($_POST['submit']))
{
$post_f_name=$_POST['f_name'];
//$post_gender=$_POST['gender'];
$post_l_name=$_POST['l_name'];
$post_agency=$_POST['agency'];
$post_dob=$_POST['dob'];
//$post_f_name=$_POST['_name'];


//$post_nationality=$_POST['nationality'];
//$post_m_satus=$_POST['m_satus'];
$post_address=$_POST['address'];
//$post_e_mail=$_POST['e_mail'];
//$post_a_r_claimed=$_POST['a_r_claimed'];
$post_depart=$_POST['depart'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];

$post_ctz_num=$_POST['ctz_num'];
$post_exp_date=$_POST['exp_date'];
$post_pass=$_POST['_pass'];
$post_pass2=$_POST['repassword'];
//$post_m_payment=$_POST['m_payment'];

if($post_f_name=='' or $post_l_name=='' or $post_dob=='' )
{
 echo "<script>alert('Any of the fields is Empty ')</script>";
 
}
elseif ($post_pass!=$post_pass2) {
	echo "<script>alert('Password did not match')</script>";
{
if($image_type=="image/jpeg" or $image_type=="image/png"
 or $image_type="image/gif")
 {
	if($image_size<=500000)
	{
		move_uploaded_file($image_tmp,"images/$image_name");
	}
	else
	{
	echo "<script>alert('Image is larger, only 50kb size is allowed')</script>";
	
	}
 }
 else
 {
 echo "<script>alert('image type is invalid')</script>";
 }

$query= "insert into user
(rollNo,firstname,lastname,address,photos,date_of_birth,ctznumber,department,expiryDate,password)
values('$post_agency',$post_f_name','$post_l_name','$post_address','$image_name','$post_dob','$post_ctz_num','$post_depart','$post_exp_date','$post_pass')";
 if (isset($con))
 {
 	echo "<script>connection</script>";
 }
if(mysqli_query($con,$query))
 {
echo  "<script>alert('All Post And Image has been send in database')</script>";
 }
 else
 {
 echo "<script>alert('All Post And Image has Not been send in database')</script>";
 }
}


}
}*/
?>