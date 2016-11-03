<?php
session_start();//Le added this.

$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($con, $DB_NAME);


mysqli_query($con,"INSERT INTO userAccount (`firstName`, `lastName`, `email`, `password`)
VALUES ('$firstName','$lastName', '$email', '$password')")
or die(mysqli_error($con));


echo "<script>
alert('You have successfully signed up, please log in now!');
window.location.href='index.html';
</script>";

mysqli_close($con);
?>