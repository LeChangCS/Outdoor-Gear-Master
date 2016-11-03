<?php
//we use mysqli_connect() to connect to the db, use mysqli_query() to execute the query
//$sql is the varible that holds our query
//in the while loop, the 1st iteration: $row= the first row of the result. in the 2nd iteration: $row= the 2nd row of the result
//var_dump just tell you the data type of the results
//mysqli_fetch_row() returns all the rows in the result of the query

session_start();//Le added this.

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

<html>
    <head>
        <title>OMG!!</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>

<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
    </head>
    <body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-sm-4 world">
					<ul >
						
					</ul>
				</div>
				<div class="col-sm-4 logo">
					<a href="index.html"><img src="images/OMG.png" alt=""></a>	
				</div>
		
             <div class="col-md-4 header-left">		
					<p class="log">
						<?php echo 'Welcome, '.$_SESSION['username'];  ?>
                    </p>

					<div class="clearfix"> </div>
			</div>
            
			<div class="col-sm-4 header-left">		
				

					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				


				<ul class="memenu skyblue">

					  <li class=" grid"><a  href="mainsite.html">Home</a></li>	
				      <li><a  href="gear.html">Gear</a>
                      <li><a href="postitem.html">Post Item</a></li>
				      <li><a  href="dashboard.html">Dashboard</a>
                      <li><a  href="blog.html">Blog</a>				
				      <li><a class="color6" href="contact.html">Contact</a></li>
										<li><a href="#"><img src="images/search.png" alt="Smiley face" height="42" width="42"></a></li>
			  </ul> 
			</div>
				<div class="col-sm-2 search">		
		
		</div>
		<div class="clearfix"> </div>
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Recent Products</h1>
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3>
                            ski
                        </h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="single.html">
							<img class="img-responsive" src="images/item1.jpg" alt="" />
						</a>
						<h3><a href="single.html">Tent</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="single.html" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
		</div>

	</div>
    <?php
        $sql="SELECT * FROM postItem ORDER BY ID desc";
        $res=mysqli_query($conn,$sql); 
    
        $titlelinks = array("http://www.google.com","http://www.kimo.com");
    
        if(!$res)
        {
            die("query failed!");
        }
        while($row=mysqli_fetch_assoc($res))
        {
            foreach($row as $key=>$val)
            {
                
                
                    echo "{$key}: "."<a href='{
        
                    $titlelinks[1]
                    
                    }'>{$val}</a><br />";
                
                
            }
            echo "<br /> <hr /> <br />";
            
        }

        mysqli_free_result($res);
    ?>
</div>
<!--footer-->
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
						<li><a href="#">xxxxxxxxxxxx</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">xxxxxxxxxxxx</a></li>
					
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">xxxxxxxxxxxx</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li>xxxxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxxxx</li>
						<li>xxxxxxxxxxxxxxxxxxx</li>
						<li class="phone">PH : +1(xxx)xxx-xxxx</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				
			</div>
	</div>
</div>

<!--//footer-->
            
    </body>

</html>

<?php
    mysqli_close($conn);
?>
        
                                