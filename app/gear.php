<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" ng-app="omgApp">

<head>
<title>Gear</title>
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
				      <li><a  href="gear.php">Gear</a>
                      <li><a href="postitem.html">Post Item</a></li>
				      <li><a  href="dashboard.php">Dashboard</a>
                      <li><a  href="blog.html">Blog</a>				
				      
				      
			  </ul> 
              </div>
        
	       </div>
       </div>
</div>
<!--//header-->
    <div class="container">
        <div class="row row-content" ng-controller="gearController">
            
            <div class="col-xs-12">
                <div class="tab-content">
                <button ng-click="toggleDetails()" class="btn btn-xs btn-primary pull-right"                    type="button">
                    {{showDetails ? 'Hide Details':'Show Details'}}
                </button>  

                   <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" ng-class="{active:isSelected(1)}">
                        <a  ng-click="select(1)"
                         aria-controls="all gear"
                         role="tab">All Gear</a></li>
                        <li role="presentation" ng-class="{active:isSelected(2)}">
                        <a  ng-click="select(2)"
                         aria-controls="climing"
                         role="tab">Climing</a></li>
                        <li role="presentation" ng-class="{active:isSelected(3)}">
                        <a  ng-click="select(3)"
                         aria-controls="ski"
                         role="tab">Ski</a></li>
                        <li role="presentation" ng-class="{active:isSelected(4)}">
                        <a  ng-click="select(4)"
                         aria-controls="bicycling"
                         role="tab">Bicycling</a></li>
                    </ul>
                </div>
               <ul class="media-list">
                <li class="media" ng-repeat="history in histories | filter:filtText">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{history.image}} alt="item">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{history.itemName}}
                         <span class="badge">State: {{history.state}}</span>
                         <span class="badge">Price: {{history.price | currency}}</span>
                         <span class="badge">Date: {{history.date}}</span></h2>
                         <p ng-show="showDetails">{{history.description}}</p>
                        
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <!-- build:js scripts/main.js -->
    <script src="../bower_components/angular/angular.min.js"></script>
    
    <script src="scripts/app.js"></script>


</body>

</html>
