<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Basement booking page
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
<h1> Rent HTGW Basement </h1>
</div>
<p class="lead">The HTGW basement hall is available for private fuctions for a very nominal fee. If you would like to book the basement, please send an email to <span class="glyphicon glyphicon-envelope"></span>
<a href="mailto:hindutempleofgreaterwichita@gmail.com">HTGW, Wichita</a> with event details, and a committee member will contact you.
Please refer <a href="https://drive.google.com/file/d/0B7OKbjhdCzqcRndvcWFKenFuN00/view" target=_blank>Basement Rent Guidelines document</a> for guidelines for renting the temple basement
</p>';
echo '<div class="container" align="center">
<h3>Basment Hall Availability: </h3>
<iframe src="https://www.google.com/calendar/embed?showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=hindutempleofgreaterwichita%40gmail.com&amp;color=%23691426&amp;ctz=America%2FChicago" style=" border:solid 1px #777 " width="1000" height="800" frameborder="0" scrolling="no" align="center"></iframe>
</div>';
echo '</div>';
echo '</div>';
echo '</body>';

generateFooter();
echo '</html>';
?>
