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
		</div><!--end #base-->
		<!-- END BASE -->
@stop
