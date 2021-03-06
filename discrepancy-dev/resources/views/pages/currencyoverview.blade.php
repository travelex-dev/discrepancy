
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
		</div><!--end #base-->
		<!-- END BASE -->
		
@stop

