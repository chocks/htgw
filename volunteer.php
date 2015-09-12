<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Volunteer page
 */


include 'header.php';
include 'footer.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
generateHeader("Hindu Temple of Greater Wichita");
echo '<body>';
echo '  <!-- Begin page content -->
<br />
<br />
<div id="wrap">
<div class="container clear-top">
<div class="page-header">
<h1> Volunteers </h1>
</div>
<p class="lead">A big <span class="glyphicon glyphicon-thumbs-up"></span> <b>THANK YOU</b> for all the volunteers who help us running the temple. Your help is greatly appreciated by the temple committee, and all the families. Without your help our temple would not be a success.</p>
<p>We need help cleaning the temple every week. The cleaning will involve <br />
<ul>
<li><span class="glyphicon glyphicon-hand-right"></span> Sweeping, </li>
<li><span class="glyphicon glyphicon-hand-right"></span> Vaccuming, </li>
<li><span class="glyphicon glyphicon-hand-right"></span> & Mopping the main hall, stairs, kitchen and restrooms. </li>
</ul>
<br />
If you would like to volunteer at the temple and help with various activities, <br /> Please send an email to  <span class="glyphicon glyphicon-envelope"></span>
 <a href="mailto:presidenthtgw@gmail.com"> President HTGW</a></p>';
echo '
<br />
<p>
If you would like to help during events, please use the sign-up form for the event. A temple committee member will contact you regarding the details.
If you have not registered with temple mailing list, please <span class="glyphicon glyphicon-link"></span> <a href="signup.php"> sign-up to HTGW-mailing list</a>, and we\'ll send you HTGW updates</p>';
echo '</div>';
echo '</div>';
echo '</body>';

generateFooter();
echo '</html>';
?>
