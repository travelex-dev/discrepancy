<!DOCTYPE html>
<html lang="en"><head>
<title>Taxidia - Errors</title>
<!-- BEGIN META -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="your,keywords">
<meta name="description" content="Short explanation about this website">
<!-- END META -->

<!-- BEGIN STYLESHEETS -->
<link href="http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965">
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin.css?1425466319">
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194">
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/material-design-iconic-font.min.css?1421434286">
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/wizard/wizard.css?1425466601">

<!-- END STYLESHEETS -->
<style type="text/css"></style><style type="text/css"></style></head>
<body class="menubar-hoverable header-fixed menubar-pin ">
	<!-- BEGIN HEADER-->
	<header id="header">
		<div class="headerbar">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="headerbar-left">
				<ul class="header-nav header-nav-options">
					<li class="header-nav-brand">
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
							<img src="../../assets/img/avatar1.jpg?1403934956" alt="">
							<span class="profile-info">
								Sebastiaan van Wijngaarden
								<small>Technology Manager</small>
							</span>
						</a>
						<ul class="dropdown-menu animation-dock">
							<li class="dropdown-header">Config</li>	<!--drop down menu when clicking the user-->
							<li><a href="../../html/pages/profile.html">My profile</a></li>
							<li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
							<li><a href="../../html/pages/calendar.html">My appointments</a></li>
							<li><a href="../../html/pages/bugreport.html">Bug Report</a></li>
							<li><a href="../../html/pages/feedback.html">Feedback</a></li>
							<li class="divider"></li>
							<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
							<li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
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
						<li><a href="../../html/.html">Home</a></li>
						<li class="active">Error Details</li>
					</ol>
				</div><!--end .section-header -->
				<div class="section-body">							<!-- start of the section body-->
					<div class="card">
						<div class="card-head style-primary">
							<header>Error Details</header>			<!-- header of page-->
						</div>
						<div class="card-body">								
							<div id="rootwizard1" class="form-wizard form-wizard-horizontal">
								<form class="form floating-label">
									<div class="form-wizard-nav">
										<div class="progress" style="width: 75%;"><div class="progress-bar progress-bar-primary" style="width: 0%;"></div></div>
										<ul class="nav nav-justified nav-pills"> <!--column headers-->
											<li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false"><span class="step">1</span> <span class="title">Order Info</span></a></li>
											<li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false"><span class="step">2</span> <span class="title">Order Details</span></a></li>
											<li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false"><span class="step">3</span> <span class="title">Order Movements</span></a></li>
											<li class="active"><a href="#tab4" data-toggle="tab" aria-expanded="true"><span class="step">4</span> <span class="title">Subtasks</span></a></li>
										</ul>
									</div><!--end .form-wizard-nav -->
									<div class="tab-content clearfix">
										<div class="tab-pane" id="tab1">
											<div class="col-lg-12">
												<div class="table-responsive">
													<div id="datatable1_wrapper" class="dataTables_wrapper no-footer">
													</div>
													<table id="datatable1" class="table table-striped table-hover dataTable no-footer" role="grid"> <!-- start of the table headers-->
														<thead>
															<tr role="row">
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 227px;">RAP ID</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 336px;">Order ID</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 308px;">Type</th>
																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Weight</th>
																<th class="sort-alpha sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">Completed At</th>
															</tr>
														</thead>
														<tbody>
															<tr class="gradeX odd" role="row"> <!--start of table rows-->
																<td>40532452</td>
																<td>103267520</td>
																<td>Combined</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeC even" role="row">
																<td>40532452</td>
																<td>56324520</td>
																<td>Combined</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>40532452</td>
																<td>6724520</td>
																<td>Combined</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>40324214</td>
																<td>15656564520</td>
																<td>Combined</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>50324914</td>
																<td>1032676440</td>
																<td>Combined</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>40324914</td>
																<td>344520</td>
																<td>Note PacketBundle</td>
																<td>350 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>56645342323</td>
																<td>10324520</td>
																<td>Note PacketBundle</td>
																<td>350 g</td>
																<td>2016-05-11 14:07:36+015</td>
															</tr>
															<tr class="gradeA even selected" role="row">
																<td>34304934</td>
																<td>45455</td>
																<td>Note PacketBundle</td>
																<td>350 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>459324914</td>
																<td>103343434</td>
																<td>Note PacketBundle</td>
																<td>350 g</td>
																<td>2016-05-11 14:07:36+01</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>34343344</td>
																<td>43354534</td>
																<td>Bundle</td>
																<td>9001 g</td>
																<td>2016-05-11 14:07:36+01</td>		<!--end of table rows for this tab-->
															</tr>
														</tbody>										<!--end of table body-->
													</table>
												</div>														<!--end .table-responsive -->
											</div>
										</div>																<!--end #tab1 -->
										<div class="tab-pane" id="tab2">							<!-- tab 2 start-->
											<div class="col-lg-12">
												<div class="table-responsive">

													<table class="table table-striped table-hover dataTable no-footer" role="grid">
														<thead>
															<tr role="row"><!--tab 2 headers-->
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 227px;">Denomination</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 336px;">QTY</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 308px;">ATM/COLUMN</th>
																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Cassette/Vision</th>
															</tr>
														</thead>
														<tbody>
															<tr> <!--the two sub headings-->
																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 204px; text-align:center;">Order ID: 102778</th>
																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 204px; text-align:center;">Packet ID: 2545534</th>
															</tr>
															<tr class="gradeX odd" role="row"> <!--rows for the columns-->
																<td>AED-50</td>
																<td>34</td>
																<td>4</td>
																<td>Cas.ID: 3</td>
															</tr>
															<tr class="gradeC even" role="row">
																<td>CAD-50</td>
																<td>34</td>
																<td>4</td>
																<td>Cas.ID: 93</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>HRK-100</td>
																<td>67</td>
																<td>27</td>
																<td>Cas.ID: 54</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>DKK-100</td>
																<td>3</td>
																<td>23</td>
																<td>Cas.ID: 67</td>
															</tr>

															<tr>
																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 204px; text-align:center;">Order ID: 102788</th>

																<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 204px; text-align:center;">Bundle ID: 3435534</th>

															</tr><tr class="gradeA odd" role="row">
															<td>AED-50</td>
															<td>100</td>
															<td>3</td>
															<td>Vision: series2 facing front</td>
														</tr>
														<tr class="gradeA even" role="row">
															<td>AED-20</td>
															<td>100</td>
															<td>3</td>
															<td>Vision: series2 facing front</td>
														</tr>
														<tr class="gradeA odd" role="row">
															<td>HRK-10</td>
															<td>100</td>
															<td>3</td>
															<td>Vision: series2 facing front</td>
														</tr>
														<tr class="gradeA even selected" role="row">
															<td>HRK-5</td>
															<td>100</td>
															<td>3</td>
															<td>Vision: series2 facing front</td>
														</tr>
														<tr class="gradeA odd" role="row">
															<td>HRK-10</td>
															<td>100</td>
															<td>7</td>
															<td>Vision: series2 facing front</td>
														</tr>
														<tr class="gradeA even" role="row">
															<td>HRK-10</td>
															<td>100</td>
															<td>7</td>
															<td>Vision: series2 facing front</td> <!-- end of rows for the columns-->
														</tr>

													</tbody>

												</table>
											</div>														<!--end .table-responsive -->
										</div>

									</div>														<!--end #tab2 -->
									<div class="tab-pane" id="tab3">
										<div class="col-lg-12">
											<div class="table-responsive">


												<table class="table table-striped table-hover dataTable no-footer" role="grid">
													<thead>
														<tr role="row">
															<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 227px;">ATM delivered</th>

															<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 336px;">Target Location</th>

															<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 308px;">Mailroom drop</th>

															<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Tote Started</th>

														</tr></thead>
														<tbody>

															<tr class="gradeX odd" role="row">
																<td>Atm delivered: 2016-05-11 13:42:25+01</td>
																<td>ATM=12</td>
																<td>-</td>
																<td>-</td>
															</tr>
															<tr class="gradeC even" role="row">
																<td>Atm delivered: 2016-05-11 13:42:57+01</td>
																<td>ATM=25</td>
																<td>-</td>
																<td>"Tote started(25): 2016-05-11 13:42:57+01"</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>Atm delivered: 2016-05-11 13:42:37+01</td>
																<td>ATM=12</td>
																<td>"Tote to Tote Bay(25): 2016-05-11 13:43:06+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>Atm delivered: 2016-05-11 13:42:27+01</td>
																<td>ATM=12</td>
																<td>"Tote Bay drop(25): 2016-05-11 13:47:28+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>Atm delivered: 2016-05-11 13:32:39+01</td>
																<td>ATM=4</td>
																<td>"Tote Bay drop(25): 2016-05-11 13:47:57+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>Atm delivered: 2016-05-11 13:32:25+01</td>
																<td>ATM=2</td>
																<td>"Tote Bay drop(25): 2016-05-11 13:48:53+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>Atm delivered: 2016-05-11 13:42:15+01</td>
																<td>ATM=17</td>
																<td>"Tote started(11): 2016-05-11 18:10:08+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA even selected" role="row">
																<td>Atm delivered: 2016-05-11 13:43:25+01</td>
																<td>ATM=12</td>
																<td>"Tote to Tote Bay(11): 2016-05-11 18:10:30+01"</td>
																<td>-</td>
															</tr>
															<tr class="gradeA odd" role="row">
																<td>Atm delivered: 2016-05-11 13:42:35+01</td>
																<td>ATM=8</td>
																<td>-</td>
																<td>-</td>
															</tr>
															<tr class="gradeA even" role="row">
																<td>Atm delivered: 2016-05-11 13:42:05+01</td>
																<td>ATM=6</td>
																<td>"Tote to Outer Lane(11): 2016-05-11 18:12:43+01"</td>
																<td>-</td>
															</tr>

														</tbody>
													</table>
												</div>																<!--end .table-responsive -->
											</div>

										</div>																		<!--end #tab3 -->
										<div class="tab-pane active" id="tab4">
											<div class="col-lg-12">
												<div class="table-responsive">

													<table class="table table-striped table-hover dataTable no-footer" role="grid">
														<thead>														<!--table headers-->
															<tr role="row">
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 227px;">Sub Task</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 336px;">Assigned To</th>
																<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 308px;">Assigned At</th>

															</tr>
														</thead>

														<tbody>

															<tr class="gradeX odd" role="row">
																<td>Process Tote Task</td>
																<td>Rory Lomas</td>
																<td>2016-05-11 14:06:34+01</td>
															</tr>
															<tr class="gradeC even" role="row">
																<td>Process Tote Task</td>
																<td>Rarwen Bingham</td>
																<td>2016-05-11 18:15:31+01</td>
															</tr>
														</tbody>

													</table>
												</div><!--end .table-responsive -->
											</div>

										</div><!--end #tab4 -->
									</div><!--end .tab-content -->

								</form>
							</div>
						</div><!--end .card-body -->

						<div class="card-actionbar">
						</div>
					</div><!--end .card --><!-- END CREATE USER SECTION -->			
				</div><!--end .section-body -->
			</section>
		</div>
		<!-- BEGIN MENUBAR-->
		<div id="menubar" class="menubar-inverse  animate">
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
			<div class="nano has-scrollbar" style="height: 741px;"><div class="nano-content" tabindex="0" style="right: -15px;"><div class="menubar-scroll-panel" style="padding-bottom: 33px;">
				<!-- BEGIN MAIN MENU -->
				<ul id="main-menu" class="gui-controls">
					<!-- BEGIN DASHBOARD -->
					<li>
						<a href="overview">
							<div class="gui-icon"><i class="md md-home"></i></div>
							<span class="title">Dashboard</span>
						</a>
					</li><!--end /menu-li -->
					<!-- END DASHBOARD -->
					<li class="gui-folder active expanded">
						<a>
							<div class="gui-icon"><i class="fa fa-table"></i></div>
							<span class="title">Discrepancies</span>
						</a>
						<!--start submenu -->
						<ul>
							<li><a href="../../html/pages/dashboard.html"><span class="title">Dashboard</span></a></li>
							<li class="active expanded"><a href="../../html/pages/overview.html" class="active"><span class="title">overview</span></a></li>
							<li><a href="../../html/pages/currencyoverview.html"><span class="title">Currency Overview</span></a></li>
						</ul><!--end /submenu -->
					</li>
				</ul>
				<div class="menubar-foot-panel">
					<small class="no-linebreak hidden-folded">
						<span class="opacity-75">Copyright © 2016</span> <strong>Travelex Ltd.</strong>
					</small>
				</div>
			</div></div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 726px; transform: translate(0px, 0px);"></div></div></div><!--end .menubar-scroll-panel-->
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
	<div id="device-breakpoints">
		<div class="device-xs visible-xs" data-breakpoint="xs"></div>
		<div class="device-sm visible-sm" data-breakpoint="sm"></div>
		<div class="device-md visible-md" data-breakpoint="md"></div>
		<div class="device-lg visible-lg" data-breakpoint="lg"></div>
	</div>

	<div id="device-breakpoints"><div class="device-xs visible-xs" data-breakpoint="xs"></div>
	<div class="device-sm visible-sm" data-breakpoint="sm"></div>
	<div class="device-md visible-md" data-breakpoint="md"></div>
	<div class="device-lg visible-lg" data-breakpoint="lg"></div>
</div>
</body>
</html>