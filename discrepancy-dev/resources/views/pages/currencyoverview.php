<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Taxidia - Errors</title>
		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/wizard/wizard.css?1425466601" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin ">
		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="../../html/dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">TAXIDIA</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">	
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="../../assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Sebastiaan van Wijngaarden
									<small>Technology Manager</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="../../html/pages/profile.html">My profile</a></li>
								<li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
								<li><a href="../../html/pages/calendar.html">My appointments</a></li>
								<li><a href="bugreport">Bug Report</a></li>
							<li><a href="feedback">Feedback</a></li>
								<li class="divider"></li>
								<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
								<li><a href="login"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div><!--end #headerbar -->
		</header><!--end header-->
		<!-- END HEADER-->
		<!-- BEGIN BASE-->
		<div id="base">
			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->

			<!-- END OFFCANVAS LEFT -->
			<!-- BEGIN CONTENT-->
			<div id="content">
				<!-- BEGIN BLANK SECTION -->
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="../../html/.html">home</a></li>
							<li class="active">Currency Overview</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">			
						<div class="card">
							<div class="card-head style-primary">
										<header>Currency Overview</header>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<!-- BEGIN TABLE FOR CURRENCY OVERVIEW-->
									<table id="datatable1" class="table table-striped no-margin">
										<thead>                                                      <!-- Table header column names   -->
											<tr>
												<th>#</th>
												<th>Currency Name</th>
												<th>Currency Code</th>
												<th class="text-right">Exchange Rate</th>
												<th class="text-right">Updated At</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody> 													  <!-- Static values for datatable1 -->
											<tr>
												<td>1</td>
												<td>Euro</td>
												<td>EUR</td>
												<td class="text-right"><span class="text-medium text-danger">1.12664 <i class="md md-trending-down"></i></span></td>
												<td class="text-right">28/04/2016 08:52:12</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Pound Sterling</td>
												<td>GBP</td>
												<td class="text-right"><span class="text-medium text-success">109.588<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>3</td>
												<td>Nepalese Rupee</td>
												<td>NPR</td>
												<td class="text-right"><span class="text-medium text-success">1.45845<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>4</td>
												<td>Hong Kong Dollar</td>
												<td>HKD</td>
												<td class="text-right"><span class="text-medium text-danger">0.98246<i class="md md-trending-down"></i></span></td>
												<td class="text-right">28/04/2016 08:52:12</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>5</td>
												<td>Danish Krone</td>
												<td>DKK</td>
												<td class="text-right"><span class="text-medium text-success">1.29823<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>6</td>
												<td>Brazilian Real</td>
												<td>BRL</td>
												<td class="text-right"><span class="text-medium text-success">123.467<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>7</td>
												<td>US Dollar</td>
												<td>USD</td>
												<td class="text-right"><span class="text-medium text-success">0.72526<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>8</td>
												<td>Canadian Dollar</td>
												<td>CAD</td>
												<td class="text-right"><span class="text-medium text-success">1.45845<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>9</td>
												<td>Singapore Dollar</td>
												<td>SGD</td>
												<td class="text-right"><span class="text-medium text-success">0.76526<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>10</td>
												<td>Qatari Rial</td>
												<td>QAR</td>
												<td class="text-right"><span class="text-medium text-success">0.71526<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>11</td>
												<td>Yuan Renminbi</td>
												<td>CNY</td>
												<td class="text-right"><span class="text-medium text-success">0.79526<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
											<tr>
												<td>12</td>
												<td>Egyptian Pound</td>
												<td>EGP</td>
												<td class="text-right"><span class="text-medium text-success">1.89823<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr><tr>
												<td>13</td>
												<td>Zambian Kwacha</td>
												<td>ZMW</td>
												<td class="text-right"><span class="text-medium text-success">1.99823<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr><tr>
												<td>14</td>
												<td>Vietnamese Dong</td>
												<td>VND</td>
												<td class="text-right"><span class="text-medium text-success">1.59823<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr><tr>
												<td>15</td>
												<td>Arab Emirates Dirham</td>
												<td>AED</td>
												<td class="text-right"><span class="text-medium text-success">102.588<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr><tr>
												<td>16</td>
												<td>Turkish Lira</td>
												<td>TRY</td>
												<td class="text-right"><span class="text-medium text-success">112.588<i class="md md-trending-up"></i></span></td>
												<td class="text-right">28/04/2016 09:12:03</td>
												<td><button type="button" class="btn btn-xs btn-default">Edit</button></td>
												<td><button type="button" class="btn btn-xs btn-default">Del</button></td>
											</tr>
										</tbody>
									</table>
									<!-- END TABLE FOR CURRENCY OVERVIEW-->
								</div> <!--end .table-responsive -->
							</div><!--end .card-body -->
						</div><!--end .card -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body text-right">
										<button class="btn btn-default-bright btn-raised" data-toggle="modal" data-target="#formModal">Add Currency</button>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
						</div>
					</div><!--end .section-body -->
				</section><!--end section -->
			</div><!--end .content -->
			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">TAXIDIA</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">
					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">
						<!-- BEGIN DASHBOARD MENU OPTION -->
						<li>
							<a href="dashboard" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD MENU OPTION -->
						<!-- BEGIN OVERVIEW MENU OPTION -->
						<li>
							<a href="overview" >
								<div class="gui-icon"><i class="md md-dashboard"></i></div>
								<span class="title">Overview</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END OVERVIEW MENU OPTION -->
						<!-- BEGIN ADD ERROR MENU OPTION -->
						<li>
							<a href="adderror" >
								<div class="gui-icon"><i class="md md-note-add"></i></div>
								<span class="title">Raise Error</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END ADD ERROR MENU OPTION -->
						<!-- BEGIN CURRENCY OVERVIEW MENU OPTION -->
						<li>
							<a href="currencyoverview" >
								<div class="gui-icon"><i class="fa fa-money"></i></div>
								<span class="title">Currency Overview</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END CURRENCY OVERVIEW MENU OPTION -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-table"></i></div>
								<span class="title">Dealing with Discrepancies</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="listdocumenterrors"><span class="title">List Document Errors</span></a></li>
								<li><a href="errordetails"><span class="title">Error Details</span></a></li>
								<li><a href="investigatingerrors"><span class="title">Investigating Errors</span></a></li>
							</ul><!--end /submenu -->
						</li>
						<!-- BEGIN BUG REPORT MENU OPTION -->
						<li>
							<a href="bugreport" >
								<div class="gui-icon"><i class="md md-bug-report"></i></div>
								<span class="title">Report a Bug</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END BUG REPORT MENU OPTION -->
						<!-- BEGIN FEEDBACK MENU OPTION -->
						<li>
							<a href="feedback" >
								<div class="gui-icon"><i class="fa fa-archive"></i></div>
								<span class="title">Leave Feedback</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END FEEDBACK MENU OPTION -->
					</ul> <!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>Travelex Ltd.</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->
		</div><!--end #base-->
		<!-- END BASE -->
		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
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

