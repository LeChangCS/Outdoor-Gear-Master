<?php
session_start();
$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';

$price = $_POST['price'];
$Start_Time = date(strtotime($_POST['Start_Time']));
$End_Time = date(strtotime($_POST['End_Time']));
$CheckBoxAgreement = $_POST['CheckBoxAgreement'];
$Description = $_POST['Description'];
$Title = $_POST['Title'];
$Category = $_POST['categories'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);        
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
} 
mysqli_select_db($con, $DB_NAME);

mysqli_query($con,"INSERT INTO postitem (`itemowner`, `price`, `Start_Time`, `End_Time`, `CheckBoxAgreement`,`Description`,`Title`,`Category`,`image`,`image_name`)
VALUES ('{$_SESSION['username']}','$price','$Start_Time', '$End_Time', '$CheckBoxAgreement','$Description','$Title','$Category','{$image}','{$image_name}')")
or die(mysqli_error($con));


echo "<script>
alert('Item Listed');
window.location.href='mainsite.php';
</script>";

mysqli_close($con);
?>