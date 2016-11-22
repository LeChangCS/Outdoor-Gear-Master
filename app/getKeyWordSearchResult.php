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

    $Keyword = $_POST['keyword'];
    $_SESSION['keyword']=$_POST['keyword'];
?>
<!DOCTYPE html>

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
        </div>
		<div class="container">
			<div class="head-top">
				


				<ul class="memenu skyblue">

					  <li class=" grid"><a  href="mainsite.php">Home</a></li>	
				      <li><a  href="gear.php">Gear</a>
                      <li><a href="postitem.html">Post Item</a></li>
				      <li><a  href="dashboard.php">Dashboard</a>
                      <li><a  href="blog.html">Blog</a>				
				     
										<li>
                                            <a href="searchKeyWord.php"><img src="images/search.png" alt="Smiley face" height="42" width="42"></a>
                                            <a href="searchCategory.php"><img src="images/Csearch.png" alt="Smiley face" height="42" width="42"></a>
                                        </li>
			  </ul> 
			</div>
				<div class="col-sm-2 search">		
		
		</div>
        </div>
		<div class="clearfix"> </div>
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Search Results</h1>
            <h2>Key Word: <?php echo $Keyword  ?></h2>
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle1.php">

							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />

							

						</a>
						<h3><a href="searchKeywordSingle1.php">
                            <?php
                                $queryTitle="SELECT Title FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                            ?></a>
                        </h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle1.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	

			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle2.php">

							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />

							

						</a>
						<h3>
                           <a href="searchKeywordSingle2.php"> 
                            <?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 1,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle2.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle3.php">

							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 2,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />

							

						</a>
						<h3><a href="searchKeywordSingle3.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 2,1";
                            $resultID=mysqli_query($conn,$queryID);
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 2,1";
                            $resultID=mysqli_query($conn,$queryID);
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle3.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle4.php">
							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 3,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />
						</a>
						<h3><a href="searchKeywordSingle4.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 3,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 3,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle4.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="clearfix"> </div>
			
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle5.php">
							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 4,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />
						</a>
						<h3><a href="searchKeywordSingle5.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 4,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 4,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle5.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>
                </div>
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle6.php">
							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 5,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />
						</a>
						<h3><a href="searchKeywordSingle6.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 5,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 5,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle6.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle7.php">
							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 6,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />
						</a>
						<h3><a href="searchKeywordSingle7.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 6,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 6,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle7.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1">
						<a href="searchKeywordSingle8.php">
							<img class="img-responsive" src="showImage.php?ID=<?php  $queryID="SELECT ID  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 7,1";
                            $resultID=mysqli_query($conn,$queryID);
                                
                                
                                if(!$resultID)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultID))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['thisID']=$val;
                                            echo $_SESSION['thisID'];

                                    }

                                }   ?>" alt="" />
						</a>
						<h3><a href="searchKeywordSingle8.php"><?php
                                $queryTitle="SELECT Title  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 2,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "{$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></a></h3>
						<div class="price">
								<h5 class="item_price"><?php
                                $queryTitle="SELECT price  FROM `postItem` WHERE Description LIKE '%" . $Keyword. "%' OR Title LIKE '%" . $Keyword ."%' ORDER BY ID desc limit 7,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemName']=$val;
                                            echo "$ {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                               ?></h5>
								<a href="searchKeywordSingle8.php" class="item_add">See Details</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
             </div>
    </div>
             </div>
    </div>   
			<div class="clearfix"> </div>
		

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			
			<div class="clearfix"> </div>	
		</div>	
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

<!--//footer-->
             
    </body>

</html>

<?php
    mysqli_close($conn);
?>
        
                                