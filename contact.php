<!DOCTYPE html>
<html>
<head>
<title>Techbuddy</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<nav class="navbar navbar-inverse" id="menudiv">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">TechBuddy</a>
    </div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
						<li><a >Free Phone : 800-088-5445</a></li>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="plans.html">Plans</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="contact.html">Contact Us</a></li> 
      </ul>
    </div>
  </div>
</nav>

</div>
  <div class="support">
				
        <div class="container">	
					<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mbottom5p">
							<h3 class="font-bold">Contact Us</h3>
                            </div>
                            <?php
                                if (isset($_POST['name'])) {
                                    echo " Name: ".$_POST['name'].'<br />';
                                }
                                if (isset($_POST['email'])) {
                                    echo "Email: ".$_POST['email'].'<br />';
                                }
                                if (isset($_POST['phone'])) {
                                    echo "Phone: ".$_POST['phone'].'<br />';
                                }
                                if (isset($_POST['time'])) {
                                    echo "Time: ".$_POST['time'].'<br />';
                                }
								if (isset($_POST['category'])) {
                                    echo "Category: ".$_POST['category'].'<br />';
                                }
								if (isset($_POST['subcategory'])) {
                                    echo "Sub Category: ".$_POST['subcategory'].'<br />';
                                }
                                if (isset($_POST['message'])) {
                                    echo "Message: ".$_POST['message'].'<br />';
                                }
                            ?>
							
	  </div>
						  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
						  </div>
						  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						  <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12"></div>
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 support-right">
<h2 class="font-bold">Office Address:</h2>
<p>&nbsp;</p>
<p>TechBuddy</p>
<p>1234 Washington Street</p>
<p>Suite# 230</p>
<p>Cedar</p>
<p>CB 12345-3421</p>
<p>United States</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



</div>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 support-right">
<h2 class="font-bold">Office Phone : 123-745-6000</h2>
<p>9 a.m to 5 p.m</p>
</div>
</div>
							                              
            </div>
	        <div class="clearfix"></div>
  </div>
  <div id="message">
  <h3>Password must contain the following:</h3>
	<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
	<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
	<p id="number" class="invalid">A <b>number</b></p>
	<p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
		
  <div class="clearfix"></div>
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p> All Rights Reserved</p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#menudiv" id="toTop" class="scroll" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<a href="#" id="toTop">To Top</a>
 </body>
</html>