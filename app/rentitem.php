<?php
session_start();
$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';

$Start_Time = date("Y-d-m", strtotime(['Start_Time']));
$End_Time = date("Y-d-m", strtotime(['End_Time']));

$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);



if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
} 
mysqli_select_db($con, $DB_NAME);


mysqli_query($con,"INSERT INTO rentitem (`itemrented`,`itemowner`,`Start_Time`, `End_Time`)
VALUES ('','{$_SESSION['itemOwner']}','$Start_Time', '$End_Time')")
or die(mysqli_error($con));


echo "<script>
alert('Item selected!');
window.location.href='payment.php';
</script>";

mysqli_close($con);
?>