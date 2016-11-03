<?php

$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';


$price = $_POST['price'];
$Start_Time = date("Y-d-m", strtotime(['Start_Time']));
$End_Time = date("Y-d-m", strtotime(['End_Time']));
$CheckBoxAgreement = $_POST['CheckBoxAgreement'];
$Description = $_POST['Description'];
$Title = $_POST['Title'];
$Category = $_POST['categories'];

$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);



if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
} 
mysqli_select_db($con, $DB_NAME);


mysqli_query($con,"INSERT INTO postitem (`price`, `Start_Time`, `End_Time`, `CheckBoxAgreement`,`Description`,`Title`,`Category`)
VALUES ('$price','$Start_Time', '$End_Time', '$CheckBoxAgreement','$Description','$Title','$Category')")
or die(mysqli_error($con));


echo "<script>
alert('Item Listed');
window.location.href='mainsite.html';
</script>";

mysqli_close($con);
?>