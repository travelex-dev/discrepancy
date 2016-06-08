<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TAXIDIA - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/bootstrap.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/materialadmin.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/font-awesome.min.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/material-design-iconic-font.min.css') }}" />

		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/rickshaw/rickshaw.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/morris/morris.core.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/wizard/wizard.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/DataTables/jquery.dataTables.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css') }}" />
		<style type="text/css"></style><style type="text/css"></style>
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->

		
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">

			@yield('content')

		<!-- BEGIN JAVASCRIPT -->
		<script src="assets/js/libs/jquery/jquery-1.11.2.js"></script>
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/spin.js/spin.min.js"></script>
		<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="assets/js/libs/moment/moment.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="assets/js/libs/flot/curvedLines.js"></script>
		<script src="assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="assets/js/libs/d3/d3.min.js"></script>
		<script src="assets/js/libs/d3/d3.v3.js"></script>
		<script src="assets/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppOffcanvas.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="assets/js/core/source/AppNavSearch.js"></script>
		<script src="assets/js/core/source/AppVendor.js"></script>
		<script src="assets/js/core/demo/Demo.js"></script>
		<script src="assets/js/core/demo/DemoDashboard.js"></script>
		<script src="assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script type="text/javascript">	
		    //Include the jquery table functionality for the table like search, page numbers, no of rows to be displayed
			//and previous and next button to toggle between pages.
			$(document).ready(function() {
			    $('#datatable1').DataTable();
			} );

			//Remove the sort column icon from the last two columns on the table
			$('#datatable1').dataTable( {
			      "aoColumnDefs": [
			          { 'bSortable': false, 'aTargets': [ -1, -2 ] }
			       ]
			});
		</script>

		<!-- END JAVASCRIPT -->

	</body>
</html>