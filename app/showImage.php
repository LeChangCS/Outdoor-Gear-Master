<?php
$DB_HOST = 'localhost';
$DB_ROOT = 'group';
$DB_PASSWORD = '12345';
$DB_NAME = 'signup';

$con=mysqli_connect($DB_HOST, $DB_ROOT, $DB_PASSWORD, $DB_NAME);
mysqli_select_db($con, $DB_NAME);

 $ID = mysqli_real_escape_string($con, $_GET['ID']);
$query = mysqli_query($con, "SELECT * FROM `postItem` WHERE `ID` = '$ID'");

    while($row = mysqli_fetch_assoc($query))
    {
        $imageData = $row['image'];
        $imageName = $row['image_name'];
    }
    header("content-type: image/jpeg");
    echo $imageData;
    echo $imageName;
mysqli_close($con);
?>

<html>
<body>

    
</body>

</html>