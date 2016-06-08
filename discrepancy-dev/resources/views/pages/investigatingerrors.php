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
<style type="text/css"></style></head>
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
							<li class="dropdown-header">Config</li>
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
						<li><a href="#">List documented errors</a></li>
						<li class="active">Investigating errors</li>
					</ol>
				</div><!--end .section-header -->
			
				<div class="section-body">
					<div class="card">
						<div class="card-head style-primary">
							<header>Investigate the issue</header>
						</div>
						<div class="card-body">								
							<form class="form" role="form"> <!--start of investigation errors form-->
								<div class="form-group floating-label">
									<select id="origin" name="origin" class="form-control">
										<option value="">&nbsp;</option>
										<option value="origin1">Barclays</option>
										<option value="origin2">HSBC</option>
										<option value="origin3">Thompsons</option>
										<option value="origin4">Bank of America</option>
										<option value="origin5">etc etc etc</option>
									</select>
									<label for="origin">Origin</label>
								</div>
								<div class="form-group floating-label">
									<select id="type" name="type" class="form-control">
										<option value="">&nbsp;</option>
										<option value="type1">Taxidia error</option>
										<option value="type2">Operator error</option>
									</select>
									<label for="type">Type of error</label>
								</div>
								<div class="form-group floating-label">
									<select id="rootcause" name="rootcause" class="form-control">
										<option value="">&nbsp;</option>
										<option value="rootcause1">Cashier</option>
										<option value="rootcause2">ATM</option>
										<option value="rootcause3">Column</option>
										<option value="rootcause4">Cassette</option>
										<option value="rootcause5">Vision</option>
									</select>
									<label for="rootcause">Root cause of error</label>
								</div>
								<div class="form-group floating-label">
									<input type="text" class="form-control" id="specificcause">
									<label for="specificcause">Specific cause</label>
								</div>
								<div class="form-group floating-label">
									<textarea name="comment" id="comment" class="form-control" rows="3" placeholder=""></textarea>
									<label for="comment">Comments</label>
								</div>
								<button type="button" class="btn ink-reaction btn-raised btn-primary" style="float: right;">Update Selected Error</button>
							</form>					<!--end of investigation errors form-->
						</div><!--end .card-body -->
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
			<div class="nano has-scrollbar" style="height: 635px;"><div class="nano-content" tabindex="0" style="right: -15px;"><div class="menubar-scroll-panel" style="padding-bottom: 33px;">
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
			</div></div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 620px; transform: translate(0px, 0px);"></div></div></div><!--end .menubar-scroll-panel-->
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
</body>
</html>