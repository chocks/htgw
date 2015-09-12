/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Main page javascript src
 */
 
$(document).ready(function() {
		$("#eventsTable").dataTable({
			"ordering"  : false,
			"autoWidth": false,
			"searching" : false,
			"paging"    : false,
			"info"      : false
		})
	});

$(document).ready(function() {
		$("#templeTimings").dataTable({
			"paging"    : false,
			"ordering"  : false,
			"searching" : false,
			"autoWidth": false,
			"info"      : false
		})
	});
