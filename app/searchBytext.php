<html>
<head>
<Title>Search</Title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="clearfix">
		<div class="col-md-5 world">
					
				</div>
				<div class="col-md-1 logo">
				  <font size="+7">Search</font>
				</div> 
        </div>
    <div class ="col-lg-3 Seach Icon">
  	<form  method="post" action="searchBytext.php?go"  id="searchform"> 
 <input  type="text" name="searchname"> 
 <input  type="submit" name="submit" value="Search"> 
 </form> 
</div>
    <div>
<?php 
if(isset($_POST['submit'])){ 
if(isset($_GET['go'])){  
$searchname=$_POST['searchname']; 
    $host="localhost";
    $dbuser="root";
    $pass="root";
    $dbname="signup";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);

    if(mysqli_connect_errno())
    {
        die("Connection failed!".mysqli_connect_error());
    }

   $query="SELECT ID,Description,Title FROM `postItem` WHERE Description LIKE '%" . $searchname. "%' OR Title LIKE '%" . $searchname ."%'";
    $result=mysqli_query($conn,$query); 

if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
       $ID = $row['ID'];
       $Description = $row['Description'];
        echo  "<li>" . $ID . " " . $Description .  "</li>\n";
      }  
    }
else {
    
        echo "Undifined ID";
            $searchname = "";
    }
}
else{ 
echo  "<p>Please enter a search query</p>"; 
} 

}
?>
</div>    
    
</body>     
</html>
