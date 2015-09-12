<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Links to other sites
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
<h1><span class="glyphicon glyphicon-link"></span>Links to external sites </h1>
</div>
<ul>
<li><a href="http://www.caiwichita.org/default.php" target=_blank>Cultural Association of India, Wichita, KS</a></li>
<li><a href="http://www.wichita.edu/thisis/home/?u=isawichita" target=_blank>Indian Students Association, Wichita State University</a></li>
<li><a href="http://www.indoasian.org/" target=_blank>Wichita Asian Association, Wichita, KS</a></li>
<li><a href="http://www.hinduism.co.za//" target=_blank>Hinduism</a></li>
</ul>';
echo '</div>';
echo '</div>';
echo '</body>';

generateFooter();
echo '</html>';
?>
