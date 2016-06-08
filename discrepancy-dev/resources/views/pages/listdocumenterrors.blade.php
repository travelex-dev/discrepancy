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
							<li class="active">List documented errors</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">
						<div class="card">
							<div class="card-head style-primary">
								<header>List documented errors</header>
							</div>
							<div class="card-body">								<!--card boady start-->
								<div class="col-lg-12">
									<div class="table-responsive">
										

										<table id="datatable1" class="table table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable1_info">
											<thead>
												<tr role="row"> <!--table headers-->
													<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 227px;">Error ID</th>
													<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 336px;">Raised At</th>
													<th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 308px;">Discrepancy</th>
													<th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">GBP Value</th>
													<th class="sort-alpha sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">State</th>
													<th class="sort-alpha sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">Root Cause</th>
													<th class="sort-alpha sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">Specific Cause</th>
													<th class="sort-alpha sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">Remove</th>
												</tr>
											</thead>
											<tbody>
												<tr class="gradeX odd" role="row"> <!-- start of table rows-->
													<td><a href="#">0000 (link)</a></td>
													<td>07/04/2016</td>
													<td>SC0143A04</td>
													<td>4</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeC even" role="row">
													<td><a href="#">0000</a></td>
													<td>22/05/2015</td>
													<td>SC0143A04</td>
													<td>5</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA odd" role="row">
													<td><a href="#">0000</a></td>
													<td>01/01/2016</td>
													<td>SC0143A04</td>
													<td>5.5</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA even" role="row">
													<td><a href="#">0000</a></td>
													<td>01/01/2016</td>
													<td>SC02FFAB</td>
													<td>6</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA odd" role="row">
													<td><a href="#">0000</a></td>
													<td>01/01/2016</td>
													<td>SCD0F88A</td>
													<td>7</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA even" role="row">
													<td><a href="#">0000</a></td>
													<td>27/05/2016</td>
													<td>SC0143A04</td>
													<td>6</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA odd" role="row">
													<td><a href="#">0000</a></td>
													<td>27/05/2016</td>
													<td>SC77FGHB4</td>
													<td>1.7</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA even selected" role="row">
													<td><a href="#">0000</a></td>
													<td>27/05/2016</td>
													<td>Cookies :3</td>
													<td>1.8</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA odd" role="row">
													<td><a href="#">0000</a></td>
													<td>27/05/2016</td>
													<td>I'm bored typing this data in</td>
													<td>1.8</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td>
												</tr>
												<tr class="gradeA even" role="row">
													<td><a href="#">0000</a></td>
													<td>27/05/2016</td>
													<td>someone save me</td>
													<td>1.9</td>
													<td>New</td>
													<td>Machine Error</td>
													<td>Cashier: 240</td>
													<td><input type="checkbox"> </td> <!--end of table rows-->
												</tr>
											</tbody>
										</table>
										<div>
										<div style="text-align:right;">
											<button type="button" class="btn ink-reaction btn-raised btn-primary" style="text-align: right;">Remove Selected Errors</button>
										</div>
										</div>
									</div>																<!--end .table-responsive -->
								</div>
							</div>																		<!--end .card-body -->
						</div>																			<!--end .card --><!-- END CREATE USER SECTION -->			
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
				</div></div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 726px; transform: translate(0px, 0px);"></div></div></div><!--end .menubar-scroll-panel-->
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

		<div id="device-breakpoints">
			<div class="device-xs visible-xs" data-breakpoint="xs"></div>
			<div class="device-sm visible-sm" data-breakpoint="sm"></div>
			<div class="device-md visible-md" data-breakpoint="md"></div>
			<div class="device-lg visible-lg" data-breakpoint="lg"></div>
		</div>
@stop