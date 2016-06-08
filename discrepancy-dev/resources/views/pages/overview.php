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
			</div>
		</header>
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
							<li class="active">Taxidia Errors</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">
					</div><!--end .section-body -->
				</section>

				<div class="card">
					<div class="card-body">
						<table class="table table-hover no-margin">
							<thead>
								<tr>
									<th>#</th>
									<th>Reference</th>
									<th>Order Id</th>
									<th>State</th>
									<th>Type</th>
									<th class="text-center">Matched</th>
									<th>Description</th>
									<th>Owner</th>
									<th class="text-right">Processed</th>
									<th class="text-right">Created</th>
									<th class="text-right">GBP Value</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>4029129 CR</td>
									<td>1239110</td>
									<td><span class="badge">Outstanding</span></td>
									<td><span class="badge style-danger">Short</span></td>
									<td class="text-center"></td>
									<td class="text-medium">1 x EUR-50 short</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 12:34:44</td>
									<td class="text-right">28/04/2016 08:52:12</td>
									<td class="text-right"><span class="text-medium text-danger">$42.46 <i class="md md-trending-down"></i></span></td>
								</tr>

								<tr>
									<td>2</td>
									<td>4029231 CR</td>
									<td>1232364</td>
									<td><span class="badge style-primary-dark">Matched to Difference</span></td>
									<td><span class="badge style-success">Over</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x EUR-20 over</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 15:56:12</td>
									<td class="text-right">28/04/2016 09:12:03</td>
									<td class="text-right"><span class="text-medium text-success">$18.72 <i class="md md-trending-up"></i></span></td>
								</tr>

								<tr>
									<td>3</td>
									<td>4029121 CR</td>
									<td>1232345</td>
									<td><span class="badge style-primary">Taxidia Error</span></td>
									<td><span class="badge style-success">Over</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x USD-20 over</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 15:56:12</td>
									<td class="text-right">28/04/2016 09:12:03</td>
									<td class="text-right"><span class="text-medium text-success">$8.72 <i class="md md-trending-up"></i></span></td>
								</tr>

								<tr>
									<td>4</td>
									<td>4029129 CR</td>
									<td>1239110</td>
									<td><span class="badge style-primary-bright">Operator Error</span></td>
									<td><span class="badge style-danger">Short</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x EUR-50 short</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 12:34:44</td>
									<td class="text-right">28/04/2016 08:52:12</td>
									<td class="text-right"><span class="text-medium text-danger">$42.46 <i class="md md-trending-down"></i></span></td>
								</tr>

								<tr>
									<td>5</td>
									<td>4029231 CR</td>
									<td>1232364</td>
									<td><span class="badge style-primary-bright">Operator Error</span></td>
									<td><span class="badge style-success">Over</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x EUR-20 over</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 15:56:12</td>
									<td class="text-right">28/04/2016 09:12:03</td>
									<td class="text-right"><span class="text-medium text-success">$18.72 <i class="md md-trending-up"></i></span></td>
								</tr>

								<tr>
									<td>6</td>
									<td>4029121 CR</td>
									<td>1232345</td>
									<td><span class="badge style-primary-bright">Operator Error</span></td>
									<td><span class="badge style-success">Over</span> <span class="badge style-danger">Short</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x EUR-20 over, 1 x EUR-50 short
									<br>1 x EUR-20 over, 1 x EUR-50 short 
									<br>1 x EUR-20 over, 1 x EUR-50 short 
									<br>1 x EUR-20 over, 1 x EUR-50 short 
									<br>1 x EUR-20 over, 1 x EUR-50 short 
									<br>1 x EUR-20 over, 1 x EUR-50 short 
									</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 15:56:12</td>
									<td class="text-right">28/04/2016 09:12:03</td>
									<td class="text-right"><span class="text-medium text-success">$8.72 <i class="md md-trending-up"></i></span></td>
								</tr>
								<tr>
									<td>7</td>
									<td>4029231 CR</td>
									<td>1232364</td>
									<td><span class="badge style-primary-bright">Operator Error</span></td>
									<td><span class="badge style-success">Over</span></td>
									<td class="text-center">
										<label class="checkbox-inline checkbox-styled checkbox-success">
											<input type="checkbox" checked>
										</label>
									</td>
									<td class="text-medium">1 x EUR-20 over</td>
									<td>121 - Lynn Soane</td>
									<td class="text-right">25/04/2016 15:56:12</td>
									<td class="text-right">28/04/2016 09:12:03</td>
									<td class="text-right"><span class="text-medium text-success">$18.72 <i class="md md-trending-up"></i></span></td>
								</tr>

								<tr class="style-default-light">
									<td colspan="9">
									</td>
									<td class="text-right"><strong class="text-lg">Total</strong></td>
									<td class="text-right"><strong class="text-lg">$66.00</strong></td>
								</tr>


							</tbody>
						</table>
					</div><!--end .card-body -->
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body text-right">
								<button class="btn btn-default-bright btn-raised" data-toggle="modal" data-target="#formModal">Add Error</button>
							</div><!--end .card-body -->
						</div><!--end .card -->
					</div><!--end .col -->
				</div>
			</div>

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
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>