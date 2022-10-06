<?php
include 'config.php';

    $date= $_POST['date'];
 	$room= $_POST['room'];
    $adult= $_POST['adult'];
    $child= $_POST['child'];
    $status= $_POST['status'];
   
   
$sql = 
"INSERT INTO `booking`(`id`, `date`, `room`, `adult`, `child`, `status`, `roomNo`) 
            VALUES ('','$date','$room','$adult','$child','$status','')
";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
header("Location:../bookings.php"); 
exit;


?>
