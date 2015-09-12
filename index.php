<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : This is the main entry point to site
 */

include 'header.php';
include 'footer.php';
include 'Util.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<body>';
generateHeader("Hindu Temple of Greater Wichita");
echo '<br />';
echo '<br />';
include 'slider.php';
echo '<br />';
echo '<br />';
echo '<link rel="stylesheet" type="text/css" href="DataTables-1.10.2/media/css/jquery.dataTables.min.css">';
echo '<div id="wrap">
<div class="container clear-top">
<p> <h3 style="color:blue;text-align:center" > Welcome to Hindu Temple of Greater Wichita </h3> <br /><b>The Hindu Temple of Greater Wichita</b> <i> is a peaceful oasis of <a href="https://en.wikipedia.org/wiki/San%C4%81tan%C4%AB" target=_blank> Sanatana Dharma </a>. The main temple deity is Sri Lord Venkateshwara (Lord Balaji) with consorts Goddess Mahalakshmi and Goddess Bhumidevi. However, most of the main deities in the Hindu pantheon are represented including Lord Siva, Goddess Durga, Lord Krishna and Radha, Lord Rama Parivar, Lord Ganesha, Lord Muruga, and Lord Mahavir.
The Hindu Temple of Greater Wichita opened following a grand Inauguration program on June 14, 15, and 16. 2002. It was the culmination of many months of planning, community discussions, and fundraising efforts. There were seven Hindu priests and one Jain priest that performed all of the required Vedic rituals to install the murthis. Our priest, <a href="priest.php">Srimaan U Ve Sriraman Kadambi </a>, arrived in July 2002.
</i></p>
<div class="page-header">
<p class="lead">Regular Events</p>
</div>';
printTiminigs("regular_events");
echo '
</div>
<div class="container clear-top">
<div class="page-header">
<p class="lead">Regular Temple Timings</p>
</div>';
printTiminigs("timings");
echo '
</div>
</div>
</body>';
generateFooter();
echo '<script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>';
echo '<script src="index.js"></script>';
echo '</html>';
?>
