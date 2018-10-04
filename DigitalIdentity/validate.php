<?php

$rollNo = '071bct501';
//$g_hash = $_POST["g_hash"];
$ib_hash = 'kljljh';
$b_address ='lkjhlj';
// Create connection
$conn = mysqli_connect("ma-gar.com", "magarcom_pranil", "toshiba2015", "magarcom_digitalid");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE apple set b_address= $b_address ,ib_hash = $ib_hash where rollNo=$rollNo";



if (mysqli_query($conn, $sql)) {
    debug_to_console("Successfully created");
} else {
    debug_to_console("unSuccessfully created");
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>alert( 'Debug Objects: " . $output . "' );</script>";
}

mysqli_close($conn);
?>
