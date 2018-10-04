<?php
$var = @$_POST['id'] ;
$sql="UPDATE students SET approve = 1 WHERE rollno = $var";

//$sql = "UPDATE gradeReason SET current = 0 WHERE reasonID = $var";
$result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
//added for testing
echo 'var = '.$var;


?>