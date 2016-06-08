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
		</div><!--end #base-->
		<!-- END BASE -->


@stop