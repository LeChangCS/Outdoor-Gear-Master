<?php 
session_start();
?>

<!DOCTYPE html>

<html>
<head>
<title>Search Items</title>
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
<!-- slide -->
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
					
				</div>
	<div class="col-md-8 h_menu4">
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
			<!---pop-up-box---->
					  <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
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
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<!---->
<div class="container">
    <div class="row row-content" id="confirmation" name="confirmation">
    <div style="padding:10px">
          </div>
        
        <!-- Trigger the modal with a button -->
<div class="col-xs-8 col-lg-offset-5">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Search by Key Word</button>
</div>
<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please enter the key word of items you want to search</h4>
      </div>
      <div class="modal-body">
        
        
        <p id="seachByKeyWord"></p> 
        
          <form  method="post" action="getKeyWordSearchResult.php"  id="searchform"> 
            <input  type="text" name="keyword"> 
            <input  type="submit" name="submit" value="Search"> 
          </form> 
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        
          
        </div>

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

<!--//footer-->
    <script src="scripts/angular.min.js"></script>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(39.673393, -104.962044);
  var myCenter2 = new google.maps.LatLng(39.677625, -104.972171);
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
    var marker2 = new google.maps.Marker({
    position: myCenter2,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
  marker2.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
</body>
</html>