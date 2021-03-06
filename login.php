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
					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"></div>
					<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mbottom5p">
						
                            </div>
							<div class="form-group">
							  <div class="col-sm-10">
                              <?php
                                if (isset($_POST['email'])) {
                                      echo "<h3 class='font-bold'>Welcome ".$_POST['email'].'</h3><br />';
                                    }
                            ?>
							  </div>
							</div>
						  <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12"></div>
							                              
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
  
		
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
  </body>
</html>