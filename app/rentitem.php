<?php
session_start();
$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';

$date1 = $_POST['date1'];
$date2 = $_POST['date1'];

$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);



if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
} 
mysqli_select_db($con, $DB_NAME);


mysqli_query($con,"INSERT INTO rentitem (`renter`,`itemrented`,`itemowner`,`date1`, `date2`)
VALUES ('{$_SESSION['username']}','{$_SESSION['itemName']}','{$_SESSION['itemOwner']}','$date1', '$date2')")
or die(mysqli_error($con));


echo "<script>
alert('Item selected!');
window.location.href='confirmation.php';
</script>";

mysqli_close($con);
?>