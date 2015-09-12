<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : directions page
 */


include 'header.php';
include 'footer.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
generateHeader("Hindu Temple of Greater Wichita");
echo '<body>';
echo '<br />
<br />
<div id="wrap">';
echo '<div class="container clear-top">';
echo '<div class="page-header">
<h1> Location & Directions to the Temple </h1>
</div>';
echo '
<iframe width="650" height="450" align="center" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=16&center=37.6907%2C-97.1996&key=AIzaSyCJ3xo46ghvLBB042ACbPnFDk9ljFjtfSc"></iframe>';
echo '</div>';
echo '</div>';
echo '</body>';
generateFooter();
echo '</html>';
?>
