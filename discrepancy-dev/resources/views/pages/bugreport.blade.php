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
							<li class="active">Bug Report</li>
						</ol>
					</div><!--end .section-header -->				
					<div class="section-body">
						<div class="card">
							<div class="card-head style-primary">
								<header>Please give details</header>   								    <!-- Page heading -->
							</div>
							<div class="card-body">	
																									    <!-- BEGIN BUG REPORT SECTION -->		
								<form class="form floating-label" action="../../html/pages/dashboard.html" accept-charset="utf-8" method="post">
										<div class="form-group">
											<input type="text" class="form-control" id="ProblemTitle">  <!-- Problem title textbox-->
											<label for="ProblemTitle">Problem Title</label>
										</div>
										<div class="form-group">
											<textarea name="SummaryInformation" id="SummaryInformation" class="form-control" rows="3" placeholder=""></textarea>
											<label for="SummaryInformation">Summary Information</label>  <!-- Summary information textbox -->
										</div>								
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button class="btn btn-primary btn-raised" type="submit">SUBMIT</button> <!-- Submit button-->
											</div>
										</div>		
								</form>	<!-- END BUG REPORT SECTION -->					
							</div><!--end .card-body -->
						</div> <!--end .card -->
					</div><!--end .section-body-->
				</section> <!--end section-->
			</div><!--end #content-->
		</div><!--end #base-->
		<!-- END BASE -->

@stop
