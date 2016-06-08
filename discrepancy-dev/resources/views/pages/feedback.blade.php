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
		</div><!--end #base-->
		<!-- END BASE -->
	
@stop
