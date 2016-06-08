<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Taxidia - Raising Errors</title>
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/select2/select2.css?1424887856" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/multi-select/multi-select.css?1424887857" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1424887860" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/typeahead/typeahead.css?1424887863" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/dropzone/dropzone-theme.css?1424887864" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/wizard/wizard.css?1425466601" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">
		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="dashboard">
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
				<!-- BEGIN BLANK SECTION, WHERE JUST ABOUT EVERYTHING UNIQUE TO A PAGE GOES -->
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="../../html/.html">home</a></li>
							<li class="active">Taxidia Errors</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-head style-primary">
										<header>Raise Error</header>
									</div>
									<div class="card-body ">
										<div id="rootwizard2" class="form-wizard form-wizard-horizontal"> <!-- The Wizard starts here-->
											<form class="form floating-label">
												<div class="form-wizard-nav"> <!-- Hopefully this speaks for itself -->
													<div class="progress">
														<div class="progress-bar progress-bar-primary"></div>
													</div>
													<ul class="nav nav-justified"><!-- Headers/Titles for each of the wizard pages -->
														<li class="active"><a href="#tab1" data-toggle="tab"><span class="step">1</span> <span class="title">ADD REFERENCES</span></a></li>
														<li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span class="title">ADD DISCREPANCIES</span></a></li>
														<li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span class="title">LINK ORDER</span></a></li>
														<li><a href="#tab4" data-toggle="tab"><span class="step">4</span> <span class="title">CONFIRM</span></a></li>
													</ul>
												</div><!--end .form-wizard-nav -->
												<!-- START OF TABBED CONTENT HERE -->
												<div class="tab-content clearfix">
													<!-- START OF TAB 1 - ADD REFERENCES TAB -->
													<div class="tab-pane active" id="tab1">
														<br/><br/>
														<div class="form-group">
															<input type="number" class="form-control" id="GcsReference" name="GcsReference">
															<label for="GcsReference">GCS Reference</label>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" id="ScReference" name="ScReference">
															<label for="ScReference">SC Reference</label>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="Number" name="RapOrderId" id="RapOrderId" class="form-control">
																	<label for="RapOrderId" class="control-label">Rap OrderId</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="Number" name="RapPartId" id="RapPartId" class="form-control">
																	<label for="RapPartId" class="control-label">RapPartId</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<div class="input-group date" id="demo-date">
																		<div class="input-group-content">
																			<input type="text" class="form-control">
																			<label>Date Raised</label>
																		</div>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
													</div><!--end #tab1 -->
													<!-- START OF TAB 2 - ADD DISCREPANCIES TAB -->
													<div class="tab-pane" id="tab2">
														<table class="table table-hover no-margin">
															<thead>
																<tr>
																	<th>Short/Over?</th>
																	<th>Quantity</th>
																	<th>Value Item</th>
																	<th>Sterling Exchange Rate</th>
																	<th>Cost of Discrepancy</th>
																	<th>Remove?</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-center">
																		<select id="SO1" name="ShortOver1" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="Short">Short</option>
																			<option value="Over">Over</option>
																		</select>
																	</td>
																	<td>25</td>
																	<td>EUR-10</td>
																	<td>0.77170</td>
																	<td>£192.93</td>
																	<td>
																		<label class="checkbox-inline checkbox-styled checkbox-success">
																			<input type="checkbox">
																		</label>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">
																		<select id="SO2" name="ShortOver2" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="Short">Short</option>
																			<option value="Over">Over</option>
																		</select>
																	</td>
																	<td>12</td>
																	<td>EUR-20</td>
																	<td>0.77170</td>
																	<td>£185.21</td>
																	<td>
																		<label class="checkbox-inline checkbox-styled checkbox-success">
																			<input type="checkbox">
																		</label>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">
																		<select id="SO3" name="ShortOver3" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="Short">Short</option>
																			<option value="Over">Over</option>
																		</select>
																	</td>
																	<td>100</td>
																	<td>USD-10</td>
																	<td>0.68435</td>
																	<td>£684.35</td>
																	<td>
																		<label class="checkbox-inline checkbox-styled checkbox-success">
																			<input type="checkbox">
																		</label>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">
																		<select id="SO4" name="ShortOver4" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="Short">Short</option>
																			<option value="Over">Over</option>
																		</select>
																	</td>
																	<td><input type="number" class="form-control" id="quant4" name="quant4"></td>
																	<td class="text-center">
																		<select class="form-control select2-list" data-placeholder="Select a currency">
																			<option value="">Select...</option>
																			<optgroup label="Euros">
																				<option value="74">EUR-5</option>
																				<option value="75">EUR-10</option>
																				<option value="76">EUR-20</option>
																				<option value="77">EUR-50</option>
																				<option value="78">EUR-100</option>
																				<option value="79">EUR-200</option>
																			</optgroup>
																		</select>

																	</td>
																	<td class="text-center"></td>
																	<td class="text-center"></td>
																	<td>
																		<label class="checkbox-inline checkbox-styled checkbox-success">
																			<input type="checkbox">
																		</label>
																	</td>
																</tr>
																<tr class="style-default-light">
																	<td colspan="3"><button class="btn btn-primary btn-raised" type="submit">Add Discrepancy</button></td>
																	<td><strong class="text-lg">Total</strong></td>
																	<td><strong class="text-lg">£66.00</strong></td>
																	<td><button class="btn btn-primary btn-raised" type="submit">Removed Selected Discrepancies</button></td>
																</tr>
															</tbody>
														</table>
													</div><!--end #tab2 -->
													<!-- START OF TAB 3 - LINK ERRORS TAB -->
													<div class="tab-pane" id="tab3">
														<div class="row">
														</div><!--end .row -->
														<div class="row">
															<div class="col-lg-12">
																<div class="table-responsive">
																	<table id="datatable1" class="table table-striped table-hover">
																		<thead>
																			<tr>
																				<th>Error ID</th>
																				<th>Error Status</th>
																				<th>Raised At</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>288401</td>
																				<td>Rejected</td>
																				<td>07:48:31</td>
																			</tr>
																			<tr>
																				<td>289041</td>
																				<td>In Progress</td>
																				<td>09:33:18</td>
																			</tr>
																			<tr>
																				<td>296549</td>
																				<td>Completed</td>
																				<td>16:15:48</td>
																			</tr>
																			<tr>
																				<td>287352</td>
																				<td>In Progress</td>
																				<td>12:34:56</td>
																			</tr>
																			<tr>
																				<td>295678</td>
																				<td>Rejected</td>
																				<td>11:11:11</td>
																			</tr>
																			<tr>
																				<td>301010</td>
																				<td>Completed</td>
																				<td>18:59:48</td>
																			</tr>
																		</tbody>
																	</table>
																</div><!--end .table-responsive -->
															</div><!--end .col -->
														</div><!--end .row -->
														<!-- END DATATABLE 1 -->
														<button class="btn btn-primary btn-raised" type="submit" style='text-align: center;'>Link Selected Errors</button>
													</div><!--end #tab3 -->
													<!-- START OF TAB 4 - FINAL SUBMISSION TAB -->
													<div class="tab-pane" id="tab4">
														<br/><br/>
														<table class="table table-hover no-margin">
															<thead>
																<tr>
																	<th>GCS Reference</th>
																	<th>SC Reference</th>
																	<th>Rap Order ID</th>
																	<th>Rap Part ID</th>
																	<th>Discrepancy</th>
																	<th>Cost</th>
																	<th>Status</th>
																	<th>Raised At</th>
																	<th>Linked?</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>20151234</td>
																	<td>SC1983538</td>
																	<td>40293648</td>
																	<td>986443</td>
																	<td>5 * EUR-10 SHORT</td>
																	<td>- £38.41</td>
																	<td>Rejected</td>
																	<td>19/05/2016 10:10:33</td>
																	<td>N</td>
																</tr>
																<tr>
																	<td>20151234</td>
																	<td>SC1994638</td>
																	<td>40293385</td>
																	<td>998124</td>
																	<td>12 * EUR-20 OVER</td>
																	<td>+ £184.33</td>
																	<td>In Progress</td>
																	<td>19/05/2016 11:21:42</td>
																	<td>N</td>
																</tr>
																<tr>
																	<td>20151234</td>
																	<td>SC1986789</td>
																	<td>40292946</td>
																	<td>1010743</td>
																	<td>2 * EUR-50 SHORT</td>
																	<td>- £76.80</td>
																	<td>Completed</td>
																	<td>19/05/2016 09:35:15</td>
																	<td>Y</td>
																</tr>
															</tbody>
														</table>
														<br><br>
														<button class="btn btn-primary btn-raised" type="submit" style='float: right'>SUBMIT ERROR</button>
													</div><!--end #tab4 -->
												</div><!--end .tab-content -->
											</form>
										</div><!--end #rootwizard -->
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="dashboard">
							<span class="text-lg text-bold text-primary ">TAXIDIA</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">
					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">
						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="overview" >
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
								<li><a href="adderror"><span class="title">Raise Error</span></a></li>
								<li><a href="currencyoverview"><span class="title">Currency Overview</span></a></li>
								<li><a href="errordetails"><span class="title">Error Details</span></a></li>
								<li><a href="listdocumenterrors"><span class="title">List Document Errors</span></a></li>
								<li><a href="investigatingerrors"><span class="title">Investigating Errors</span></a></li>
								<li><a href="bugreport"><span class="title">Report a Bug</span></a></li>
								<li><a href="feedback"><span class="title">Leave Feedback</span></a></li>
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
		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/libs/wizard/jquery.bootstrap.wizard.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/core/demo/DemoFormWizard.js"></script>
		<script src="../../assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
		<script src="../../assets/js/libs/select2/select2.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="../../assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html>
