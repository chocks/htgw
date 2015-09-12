/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Management page javascript
 */
$(document).ready(function() {
		$("#mgmtTable").dataTable({
      "searching": false,
			"info"      : false,
      "order": [[ 0, "desc" ]]
		})

    $("#execTable").dataTable({
      "searching": false,
      "info"      : false,
      "paging"   : false
    })
    $("#memTable").dataTable({
      "searching": false,
      "info"      : false,
      "paging"   : false
    })
    $("#webTable").dataTable({
      "searching": false,
      "info"      : false,
      "paging"   : false
    })
	});
