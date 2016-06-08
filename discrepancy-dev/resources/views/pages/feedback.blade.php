@extends('app')

@section('content')
	
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
			</div><!--end .headerbar -->
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
							<li class="active">Feedback</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">
						<div class="card">
							<div class="card-head style-primary">
								<header>Please give feedback</header>                                     <!-- Form heading -->
							</div>
							<div class="card-body">				
							<!-- BEGIN FEEDBACK SECTION -->				
								<form class="form floating-label" action="../../html/pages/dashboard.html" accept-charset="utf-8" method="post">
									<div class="form-group">
										<input type="text" class="form-control" id="Title">               <!-- Title textbox -->
										<label for="Title">Title</label>
									</div>
									<div class="form-group">
										<textarea name="Description" id="Description" class="form-control" rows="3" placeholder=""></textarea>                                           
										<label for="Description">Description</label>                      <!-- Description textbox -->
									</div>
								</form>
							</div><!--end .card-body -->
							<div class="card-actionbar">
								<div class="card-actionbar-row">
									<button class="btn btn-primary btn-raised" type="submit">SEND</button> <!-- Submit button-->
								</div>
							</div>
						</div><!--end .card --><!-- END FEEDBACK SECTION -->			
					</div><!--end .section-body -->
				</section>
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
						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="#" >
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
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>Travelex Ltd.</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->
		</div><!--end #base-->
		<!-- END BASE -->
	
@stop
