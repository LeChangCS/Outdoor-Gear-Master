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

    $sql="SELECT * FROM postItem ORDER BY ID desc";
    $res=mysqli_query($conn,$sql); 

 
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
					<a href="mainsite.html"><img src="images/OMG.png" alt=""></a>	
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
				      <li><a  href="gear.php">Gear</a>
                      <li><a href="postitem.html">Post Item</a></li>
				      <li><a  href="dashboard.php">Dashboard</a>
                      <li><a  href="blog.html">Blog</a>				
				      <li><a class="color6" href="contact.html">Conact</a></li>
				      
			  </ul> 
              </div>
        
	       </div>
       </div>
</div>
<!--//header-->

<div class="container">
	<div class="row row-content" ng-controller="dashboardController as dashCtrl" >
        <div class="row">
           <div class="col-md-2 col-md-offset-5">
               <h1>Dashboard</h1>


            </div><br>
        </div>
          <div class="col-xs-12">
               <ul class="media-list">
                <li class="media" ng-repeat="history in dashCtrl.histories">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{history.image}} alt="camalot">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{history.itemName}}
                         <span class="badge">State: {{history.state}}</span>
                         <span class="badge">Price: {{history.price | currency}}</span>
                         <span class="badge">Date: {{history.date}}</span></h2>
                        <p>{{history.description}}</p>
                        <p>Comment: {{history.comment}}</p>
                        <p>Type your comment:
                         <input type="text" ng-model="history.comment"></p>
                    </div>
                </li>
            </ul>
            </div>
    </div>
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
    <script>
        var app=angular.module('omgApp',[]);
        app.controller('dashboardController',function(){
            var histories=[
                                          {
                                              itemName:'Black Diamond Camalot C4 Package',
                                              image:'images/camalot.jpg',
                                              state:'Rent',
                                              category:'climbing',
                                              price:'10',
                                              date:'',
                                              description:'Incredible expansion range and low weight make the Black Diamond Camalot C4 Package a perfect way to start off any trad rack or beef up an old one. These five cams (size 0.5-3) cover all the bases from fingers to fists.',
                                              comment:''
                                          },
                                          {
                                              itemName:'Climing shoe',
                                              image:'images/climingshoe.jpeg',
                                              state:'Rent',
                                              category:'climbing',
                                              price:'7',
                                              date:'',
                                              description:'The Men Skwama Climbing Shoe is La Sportiva high-performance slipper for competition bouldering and technical sport climbing. P3 technology applies a Permanent Power Platform that ensures the Skwama downturn stays downturned.',
                                              comment:''
                                          },
                                          {
                                              itemName:'Icelantic Pioneer 109 Ski',
                                              image:'images/ski.jpg',
                                              state:'Leased',
                                              category:'ski',
                                              price:'10',
                                              date:'',
                                              description:'Whether you are looking to diversify your quicker with a well-rounded pair of skis between your big powder boards and skinny groomer sticks or seeking the elusive quiver-of-one ski, the Icelantic Pioneer 109 Ski will most definitely fit the bill.',
                                              comment:''
                                          }
                                          ]
            this.histories = histories;
        });
    </script>
</body>
</html>