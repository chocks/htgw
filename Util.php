<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : This is the set of common Utilities
 */



/* Function generates header */
function printTiminigs($type = "timings") {
  switch ($type) {
    case 'regular_events':
      echo '
        <table id="eventsTable" class="display" cellspacing="0" width="100%">
  	     <thead>
            <tr>
                <th>Event</th>
                <th>Start DateTime</th>
                <th>End DateTime</th>
              </tr>
          </thead>
  	      <tbody>
            <tr>
              <td>Rudra-Abhishekam</td>
              <td>Every Monday</td>
              <td>6:00 PM</td>
            </tr>
            <tr>
              <td>Laxmi Sahasranama-Archana</td>
              <td>Every Tuesday</td>
              <td>6:30 PM</td>
            </tr>
  	        <tr>
              <td>Balaji Sahasranama-Archana</td>
              <td>Every Saturday</td>
              <td>5:30 PM</td>
            </tr>
  			    <tr>
              <td>Hanuman Chaalisa</td>
              <td>Every Saturday</td>
              <td>6:45 PM</td>
            </tr>
  	        <tr>
              <td>Vishnu Sahasranama-Archana </td>
              <td>Every Sunday</td>
              <td>6:30 PM</td>
            </tr>
  	      </tbody>
  	    </table>
    ';
    break;
    case "timings":
      echo '
        <table id="templeTimings" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Day(s)</th>
                  <th>Morning</th>
                  <th>Evening</th>
              </tr>
          </thead>
  	      <tbody>
              <tr>
                  <td>Monday - Wednesday</td>
                  <td>9:30 AM - 11:30 AM</td>
                  <td>5:30 PM - 7:30 PM</td>
              </tr>
  					  <tr>
                  <td style="background-color:crimson">Thursday</td>
                  <td style="background-color:crimson">CLOSED</td>
                  <td style="background-color:crimson">CLOSED</td>
              </tr>
  					  <tr>
                  <td>Friday</td>
                  <td>9:30 AM - 11:30 AM</td>
                  <td>5:30 PM - 7:30 PM</td>
              </tr>
  					  <tr>
                  <td>Saturday - Sunday</td>
                  <td>10:00 AM - 1:00 PM</td>
                  <td>5:00 PM - 8:00 PM</td>
              </tr>
  	      </tbody>
  	    </table>
      ';
      break;
      default:
      echo 'Unknown call';
    }
}
?>
