<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Contact us page
 */


include 'header.php';
include 'footer.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
generateHeader("Hindu Temple of Greater Wichita");
echo '<link rel="stylesheet" type="text/css" href="DataTables-1.10.2/media/css/jquery.dataTables.min.css">';
echo '<body>';
echo '<br />
<br />
<div id="wrap">';
echo '<div class="container clear-top">';
echo '<div class="page-header">
<h1> Contact Us </h1>
<p class="lead">Hindu Temple of Greater Wichita <br/ >
<a href="directions.php">320 N Zelta St, Wichita, KS 67206</a> <br />
<span class="glyphicon glyphicon-phone-alt"></span>(316) 684-1556 (Temple)
</p>
</div>';
echo '<table id="contactTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
 <tbody>
	<tr>
		<td><strong>Temple Priest</strong></td>
		<td>Sriraman Kadambi</td>
		<td><span class="glyphicon glyphicon-phone-alt"></span>(316) 684-1556 (Temple), <br />
		    <span class="glyphicon glyphicon-phone-alt"></span> (316) 689-0350 (Home), <br />
		    <span class="glyphicon glyphicon-phone"></span> (919) 518-5785 (Cell)</td>
		<td>
		   <span class="glyphicon glyphicon-envelope"></span>
		   <a href="mailto:sriramankadambi@yahoo.com"> Sriraman Kadambi</a>
    </td>
  </tr>
  <tr>
    <td><strong>President</strong></td>
    <td>Dhananjay Joshi</td>
    <td>
        <span class="glyphicon glyphicon-phone"></span> (405) 762-0515</td>
    <td>
        <span class="glyphicon glyphicon-envelope"></span>
        <a href="mailto:dhanajoshi_dj@yahoo.com">Dhananjay Joshi</a>
    </td>
  </tr>
  <tr>
      <td><strong>Treasurer</strong></td>
      <td>Shilpa Hebsur</td>
      <td>
          <span class="glyphicon glyphicon-phone"></span> (316) 295-6088
      </td>
 		  <td>
		      <span class="glyphicon glyphicon-envelope"></span>
		      <a href="mailto:shilpahebsur@gmail.com"> Shilpa Hebsur </a>
		  </td>
  </tr>
  <tr>
      <td><strong>Secratary 1</strong></td>
      <td>Apoorv Ravindran</td>
      <td>
          <span class="glyphicon glyphicon-phone"></span> (316) 516-7394
      </td>
 		  <td>
		      <span class="glyphicon glyphicon-envelope"></span>
		      <a href="mailto:apoorv.ravindran@gmail.com"> Apoorv Ravindran </a>
		  </td>
  </tr>
  <tr>
      <td><strong>Web Developer</strong></td>
      <td>Chocks Eswaramurthy</td>
      <td>
          <span class="glyphicon glyphicon-phone"></span> (316) 259-4464
      </td>
 		  <td>
		      <span class="glyphicon glyphicon-envelope"></span>
		      <a href="mailto:chocks@outlook.com"> Chocks Eswaramurthy </a>
		  </td>
  </tr>
</tbody>
</table>';
echo '</div>';
echo '</div>';
echo '</body>';
generateFooter();
echo '<script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>';
echo '<script src="contact.js"></script>';
echo '</html>';
?>
