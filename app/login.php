<?php

session_start();//Le added this.

$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';


if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['password'])){
 echo "Email or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['email'];
 $pass=$_POST['password'];

$_SESSION['username']=$user; //Le added this.
     
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);
 //Selecting Database
 $db = mysqli_select_db($conn, $DB_NAME);
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM userAccount WHERE password='$pass' AND email='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
  // Redirecting to other page
 echo "<script>
 alert('You have successfully loged in, enjoy!');
 window.location.href='mainsite.php';
 </script>";
 }
 else
 {
 echo "<script>
 alert('Invalid Username or Password');
 window.location.href='index.html';
 </script>";
 }
 mysqli_close($conn); // Closing connection
 }
}

 
?>