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
echo '<link rel="stylesheet" type="text/css" href="DataTables-1.10.2/media/css/jquery.dataTables.min.css">';
echo '
<div id="wrap">
<div class="container clear-top">
<div class="page-header">
<h1>Regular Temple Timings</h1>
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
