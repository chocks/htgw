<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : This is the footer generator
 */


/* Function footer generator*/
function generateFooter() {
	echo '<script src="JQuery/jquery-1.11.1.min.js"></script>';
	echo '<script src="bootstrap-3.2.0/js/bootstrap.min.js"></script>';
	echo '<div id="footer">';
	echo '<div class="container">
	  <br /> <br />
		<p class="text-center"> @'.Date("Y").' Hindu Temple of Greater Wichita. All Rights Reserved.</p>
		<p class="text-center"> For issues (or) feedback on the site, please contact <span class="glyphicon glyphicon-envelope">
		<a href="mailto:chocks@outlook.com"> HTGW Developer </a></p>
		</div></div>';
	echo '</footer>';
}
?>
