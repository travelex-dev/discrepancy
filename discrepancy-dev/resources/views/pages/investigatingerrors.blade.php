@extends('layouts.master')

@section('content')
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
						<a href="#">
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

	<div id="device-breakpoints">
		<div class="device-xs visible-xs" data-breakpoint="xs"></div>
		<div class="device-sm visible-sm" data-breakpoint="sm"></div>
		<div class="device-md visible-md" data-breakpoint="md"></div>
		<div class="device-lg visible-lg" data-breakpoint="lg"></div>
	</div>
@stop