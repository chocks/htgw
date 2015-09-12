<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : This is the header generator
 */



/* Function generates header */
function generateHeader($title) {
	echo '<head><title>';
	echo $title;
	echo '</title>';
	echo '<meta charset="utf-8">';
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<meta name="description" content="This is the official page of Hindu Temple of Greater Wichita, Kansas">';
	echo '<meta name="author" content="Chocks Eswaramurthy">';
	echo '<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/css/bootstrap.min.css">';
	echo '<link rel="stylesheet" type="text/css" href="index.css">';
	echo '</head>';
	//<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	echo '<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->';
	echo '<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		<p class="navbar-text navbar-right lead">Hindu Temple of Greater Wichita, Kansas<br/><small align="center">A Non-Profit Organization</small> <br />
		<a href="https://www.facebook.com/HinduTempleOfGreaterWichita" target=_blank style="color:blue;text-align:center;font-size:15px;"><img src="img/like-button-2015-06.png" alt="facebook like" height="25" width="45" /> Visit us on Facebook </a></p>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" rel="home" href="index.php" title="Hindu Temple of Greater Wichita">
				    		<img height="70" width="60" src="img/logo.png" />
						</a>
				</div>
				<br/ >
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="donate.php">Donate</a></li>
						<li><a href="hours.php">Hours</a></li>
						<li><a href="signup.php">Sign up</a></li>
						<li><a href="https://balviharhtgw.org/" target=_blank>HTGW Balvihar</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="directions.php">Directions</a></li>
							<li><a href="calendar.php">Calendar</a></li>
							<li><a href="priest.php">Priest</a></li>
							<li><a href="basement.php">Basement Booking</a></li>
							<li><a href="https://drive.google.com/file/d/0B7OKbjhdCzqcejk2TTd5dHp6SXc/view" target=_blank>2015 Events List</a></li>
							<li><a href="poojaServices.php">Pooja Services</a></li>
							<li class="divider"></li>
							<li><a href="volunteer.php">Volunteer</a></li>
							<li><a href="https://drive.google.com/file/d/0B7OKbjhdCzqcOFdIX2wyZDdoU3c/view" target=_blank>Temple Rules & Regulations</a></li>
							<li><a href="management.php">Management</a></li>
							<li><a href="bylaws.php">By-Laws</a></li>
							<li><a href="links.php">Links</a></li>
						</ul>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>';
	echo '<body>';
}
?>
