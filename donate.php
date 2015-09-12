<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Donation page
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
<h1> Donations </h1>
</div>
<p class="lead">Our temple relies solely on donations from our devotees and supporters to operate. There are a variety of ways to make a donation: <br />
<ul>
<li> Drop your donation in the Hundi. If you are giving cash, include your name and address in the envelope. </li>
<li> Give your donation to any of the office bearers.</li>
<li> Mail your donation to the temple. The address is P.O. Box 780172, Wichita KS 67278</li>
<li> Use PayPal to use your credit card. Please note that a 2% fee will be deducted by PayPal for this service. PayPal - The safer, easier way to pay online! </li>
</ul>
All receipts are mailed at the end of the year and will include all donations made throughout the year.
</p>';

echo '</div>';
echo '</div>';
echo '</body>';

generateFooter();
echo '</html>';
?>
