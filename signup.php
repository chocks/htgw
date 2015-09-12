<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : HTGW sign-up page
 */


include 'header.php';
include 'footer.php';
include 'mailchimpSignup.php';

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
<h1> Sign-up to our mailing list. </h1>
</div>
<p class="lead">Want to know what\'s going on at HTGW? By registering your name and email address, you\'ll always be informed of upcoming events. We\'ll also let you know about temple closings (due to bad weather (or) the priest is at an outside pooja), schedule changes, and other important news. <br />By giving your email address, we\'ll email the Temple Newsletters.
<br /> <br />
Don\'t Worry. We will not share your information with any individuals (or) organizations.
</p><br />';
echo '<p><b>NOTE:</b> After signing up you will receive a confirmation email, please confirm to the email to get added to our mailing list.</p>';
generateMailchimpForm();
echo '</div>';
echo '</div>';
echo '</body>';

generateFooter();
echo '</html>';
?>
