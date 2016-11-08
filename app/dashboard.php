<?php
//we use mysqli_connect() to connect to the db, use mysqli_query() to execute the query
//$sql is the varible that holds our query
//in the while loop, the 1st iteration: $row= the first row of the result. in the 2nd iteration: $row= the 2nd row of the result
//var_dump just tell you the data type of the results
//mysqli_fetch_row() returns all the rows in the result of the query
   
    session_start();

    $host="localhost";
    $dbuser="root";
    $pass="root";
    $dbname="signup";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);

    if(mysqli_connect_errno())
    {
        die("Connection failed!".mysqli_connect_error());
    }

    $sql="SELECT * FROM postItem WHERE itemowner='{$_SESSION['username']}'";
    $res=mysqli_query($conn,$sql); 

    $sqlRented="SELECT * FROM rentItem WHERE renter='{$_SESSION['username']}'";
    $resRented=mysqli_query($conn,$sqlRented); 
 
?>
<!DOCTYPE html>
<html lang="en" ng-app="omgApp">

<head>
<title>Dashboard</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--<script><script src="js/jquery.min.js"></script>-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<!--<script>$(document).ready(function(){$(".memenu").memenu();});</script>-->
<!--<script><script src="js/simpleCart.min.js"> </script>-->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/bootstrap-social.css" rel="stylesheet">
    <link href="styles/mystyles.css" rel="stylesheet">

</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-md-4 world">
					
				</div>
				<div class="col-md-4 logo">
					<a href="mainsite.php"><img src="images/OMG.png" alt=""></a>	
				</div>
		
			 <div class="col-md-4 header-left">		
					<p class="log">
						<?php echo 'Welcome, '.$_SESSION['username'];  ?>
                    </p>

					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-md-2 number">
					
				</div>
	            <div class="col-md-8 h_menu4">
				<ul class="memenu skyblue">

					  <li class=" grid"><a  href="mainsite.php">Home</a></li>	
                    <li><a  href="gear.php">Gear</a></li>
                      <li><a href="postitem.html">Post Item</a></li>
                    <li><a  href="dashboard.php">Dashboard</a></li>
                    <li><a  href="blog.html">Blog</a></li>				
				      
				      
			  </ul> 
              </div>
        
	       </div>
       </div>
</div>
<!--//header-->

  
    <h1>
        Items I've posted:
    </h1>
    <div class="col-lg-offset-4">
    
    <?php
    if(!$res)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            
                                            echo "{$key}: {$val}<br />";


                                    }
                                    
                                    echo "<br/>";
                                }

                                mysqli_free_result($res);
    ?>
    </div>
   

 
    <h1>
        Items I've rented:
    </h1>
    <div class="col-lg-offset-4">
    
    <?php
    if(!$resRented)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resRented))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            
                                            echo "{$key}: {$val}<br />";


                                    }
                                    
                                    echo "<br/>";
                                }

                                mysqli_free_result($res);
    ?>

    </div>

        
<!--         <h1>Dashboard</h1>
    	    <table >
		  <tr>
			<th>Item</th>
			<th>State</th>		
			<th>Prices</th>
			<th>Dates</th>
			<th>Subtotal</th>
		  </tr>
		  <tr>
			<td class="ring-in"><a href="single.html" class="at-in"><img src="images/camalot.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Black Diamond Camalot C4 Package</h5>
				<p>Incredible expansion range and low weight make the Black Diamond Camalot C4 Package a perfect way to start off any trad rack or beef up an old one. These five cams (size 0.5-3) cover all the bases from fingers to fists.</p>
			
			</div>
			<div class="clearfix"> </div></td>
              <td class="check"><label type="text" value="rent">Rent</label></td>		
			<td>$10.00</td>
			<td></td>
			<td>$100.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="images/climingshoe.jpeg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Climing shoe</h5>
				<p>The Men's Skwama Climbing Shoe is La Sportiva's high-performance slipper for competition bouldering and technical sport climbing. P3 technology applies a Permanent Power Platform that ensures the Skwama's downturn stays downturned.</p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><label type="text" value="rent">Rent</label></td>		
			<td>$7.00</td>
			<td></td>
			<td>$200.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="images/ski.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Icelantic Pioneer 109 Ski</h5>
				<p>Whether you're looking to diversify your quicker with a well-rounded pair of skis between your big powder boards and skinny groomer sticks or seeking the elusive quiver-of-one ski, the Icelantic Pioneer 109 Ski will most definitely fit the bill.</p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><label type="text" value="rent">Leased</label></td>		
			<td>$10.00</td>
			<td></td>
			<td>$150.00</td>
		  </tr>
	</table>
	
	<div class="clearfix"> </div>
    </div>
</div>
-->

<div class="footer">
	<div class="container">
		<div class="footer-top">
			
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li>xxxxxxxxxxx</li>										
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Feature Projects</h6>
					<ul>
						<li>xxxxxxxxxxxx</li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
					<ul>
						<li>xxxxxxxxxxxxx</li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li>xxxxxxxxxxxxxxxxx </li>
						<li>xxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxx</li>
						<li class="phone">xxxxxxxxxxxxxxxxx</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class">Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
	</div>
</div>

    <script src="../bower_components/angular/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-route.js"></script>
 
</body>
</html>