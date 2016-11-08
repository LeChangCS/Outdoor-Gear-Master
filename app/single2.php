<?php
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

    $sql="SELECT * FROM postItem ORDER BY ID desc limit 1,1";
    $res=mysqli_query($conn,$sql); 


   $queryOwner="SELECT itemowner FROM postItem ORDER BY ID desc limit 1,1";
   $resultOwner=mysqli_query($conn,$queryOwner);
                                
                                
                                if(!$resultOwner)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultOwner))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemOwner']=$val;
                                            

                                    }

                                }

                                mysqli_free_result($res);

   
?>

<!DOCTYPE html>
<html>
<head>
<title>PostItem</title>
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>

<script>
    if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
        jQuery(function($){ //on document.ready
            $('#date1').datepicker({
                dateFormat: 'yy-mm-dd'
            });
            $('#date2').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        })
    }
</script>	
				
				
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-md-4 world">
					
				</div>
				<div class="col-md-4 logo">
					<a href="index.html"><img src="images/OMG.png" alt=""></a>	
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
					<span><i class="glyphicon glyphicon-phone"></i></span>
				</div>
		 			<div class="head-top">
				


				<ul class="memenu skyblue">

					  <li class=" grid"><a  href="mainsite.php">Home</a></li>	
				      <li><a  href="gear.php">Gear</a>
                      <li><a href="postitem.html">Post Item</a></li>
				      <li><a  href="dashboard.php">Dashboard</a>
                      <li><a  href="blog.html">Blog</a>				
				      
										
			  </ul> 
			</div>
				<div class="col-md-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	
					</div>				
				</div>		
	<!---->		
		</div>
	</div>
</div>
<!---->
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/item1.jpg">
			        <div class="thumb-image"> <img src="images/item1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/item1.jpg">
			         <div class="thumb-image"> <img src="images/item1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/item1.jpg">
			       <div class="thumb-image"> <img src="images/item1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h1><?php
                                $queryTitle="SELECT Title FROM postItem ORDER BY ID DESC limit 1,1";
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
                                            echo "{$key}: {$val}<br />";


                                    }
                                    

                                }

                                mysqli_free_result($res);
                                ?></h1>
							<h1><?php
                                $IDquery="SELECT ID FROM postItem ORDER BY ID desc limit 1,1";
                                $IDresult=mysqli_query($conn,$IDquery);
                                
                                
                                if(!$IDresult)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($IDresult))
                                {
                                    foreach($row as $key=>$val)
                                    {

                                            $_SESSION['itemID']=$val;
                                            echo "{$key}: {$val}<br />";


                                    }

                                }

                                mysqli_free_result($res);
                                ?></h1>
							
                            <label>Daily Deal: </label>
								<h1>
                                <?php
                                $queryTitle="SELECT price FROM postItem ORDER BY ID desc limit 1,1";
                                $resultTitle=mysqli_query($conn,$queryTitle); 
                                if(!$resultTitle)
                                {
                                    die("query failed!");
                                }
                                while($row=mysqli_fetch_assoc($resultTitle))
                                {
                                    foreach($row as $key=>$val)
                                    {
                                        
                                            echo "{$key}: {$val}<br />";


                                    }
                                   
                                    echo "<br /> <hr /> <br />";

                                }
                                

                                mysqli_free_result($res);
                                ?>
                                </h1>
								<label>per day</label>
                               
                            
							
							<div>

							</div>
							<div>
								<h2>Select Duration:</h2>
                                <form action="rentitem.php" method="post">                               
							    <div>
                                    
									
									Start Date:
                                        <input name="date1" id="date1" type="date" required/>
									
									
									End Date:<input name="date2" id="date2" type="date" required/>
                                </div>         
							   
                                        <a class="cart item_add"><input type="submit" value="Reserve"></a>
                                   
                                
                                </form>
						    </div>
							
								<a href="mainsite.php" class="cart item_add">Return to MailSite</a>
						</div>
					</div>
	
</div>
<!----->

		</div>
		<div class="clearfix"> </div>
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
<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
</body>
</html>