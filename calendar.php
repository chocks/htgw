<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Calendar page
 */


include 'header.php';
include 'footer.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
generateHeader("Hindu Temple of Greater Wichita");
echo '<body>';
echo '<br /> <br />
<div id="wrap">';
echo '<div class="container clear-top">';
echo '<div class="page-header">
<h1> Events Calendar </h1>
</div>';
echo '
<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=8jj9tt78f32dlk36ak33ba9jng%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style="border:0" width="1000" height="800" align=center" frameborder="0" scrolling="no"></iframe>';
echo '</div>';
echo '</div>';
echo '</body>';
generateFooter();
echo '</html>';
?>
