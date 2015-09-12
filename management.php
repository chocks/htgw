<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : HTGW Management page
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
<h1> HTGW Management </h1>
<p class="lead">Board Members</p>
</div>';
// Board Members table
echo '<table id="mgmtTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
            </tr>
        </thead>
 <tbody>
	<tr>
		<td><strong>Chairman of Board</strong></td>
		<td>Raghunath & Rekha Reddi</td>
  </tr>
  <tr>
    <td><strong>Board Member</strong></td>
    <td>Achutha & Beena Reddy</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>VC & Suguna Reddy</td>
      <td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Rishi Reddi</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Chivukula Subbarao & Usha Challa</td>
  </tr>
  <tr>
    <td><strong>Board Member</strong></td>
    <td>Subhash & Meeta Shah</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Pronab & Mithu Sensarma</td>
      <td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>TK & Avanija Reddy</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Ishwar & Sandhya Patel</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>TN Bakta</td>
      <td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Ashok Aurora</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Ragu Tirukonda</td>
  </tr>
  <tr>
      <td><strong>Board Member</strong></td>
      <td>Nilesh Sheth</td>
  </tr>
</tbody>
</table>';

//Executive Comittee table
echo '
<div class="page-header">
<p class="lead">Executive Committee</p>
</div>';
echo '<table id="execTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
            </tr>
        </thead>
 <tbody>
 <tr>
   <td><strong>Priest</strong></td>
   <td>Sriram Kadambi</td>
 </tr>
 <tr>
     <td><strong>Committee Member</strong></td>
     <td>Shailu Hebsur</td>
 </tr>
	<tr>
		<td><strong>President</strong></td>
		<td>Dhananjay Joshi</td>
  </tr>
  <tr>
    <td><strong>Vice President</strong></td>
    <td>Open</td>
  </tr>
  <tr>
      <td><strong>Treasurer</strong></td>
      <td>Shilpa Hebsur</td>
      <td>
  </tr>
  <tr>
      <td><strong>Secretary</strong></td>
      <td>Apoorv Ravindran</td>
  </tr>
  <tr>
    <td><strong>Committee Member</strong></td>
    <td>Prem Bajaj</td>
  </tr>
  <tr>
    <td><strong>Committee Member</strong></td>
    <td>Dhagash Shah</td>
  </tr>
  <tr>
    <td><strong>Committee Member</strong></td>
    <td>Nirantar Ojha</td>
  </tr>
</tbody>
</table>';

//Members table
echo '
<div class="page-header">
<p class="lead">Advisory Committee</p>
</div>';
echo '<table id="memTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
            </tr>
        </thead>
 <tbody>
  <tr>
    <td><strong>Members</strong></td>
    <td>Suparna Tirukonda</td>
  </tr>
  <tr>
      <td><strong>Members</strong></td>
      <td>Nayan Patel</td>
      <td>
  </tr>
  <tr>
      <td><strong>Members</strong></td>
      <td>Madhu Patel</td>
  </tr>
  <tr>
    <td><strong>Members</strong></td>
    <td>Raju Sheth</td>
  </tr>
  <tr>
    <td><strong>Members</strong></td>
    <td>Rashmi Patel</td>
  </tr>
  <tr>
      <td><strong>Members</strong></td>
      <td>Vasudha Kulkarni</td>
      <td>
  </tr>
</tbody>
</table>';

//Site mods
echo '
<div class="page-header">
<p class="lead">Website Co-Ordinators</p>
</div>';
echo '<table id="webTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
            </tr>
        </thead>
 <tbody>
	<tr>
		<td><strong>Web Developer</strong></td>
		<td>Chocks Eswaramurthy</td>
  </tr>
 </tbody>
</table>';

echo '</div>';
echo '</div>';
echo '</body>';
generateFooter();
echo '<script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>';
echo '<script src="management.js"></script>';
echo '</html>';
?>
