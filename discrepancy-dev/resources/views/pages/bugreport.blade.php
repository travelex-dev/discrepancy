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

				<!-- Display Validation Errors -->
        		@include('errors.list')

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
								{!! Form::open(array('class'=>'form floating-label','role'=>'form','method'=>'POST','url'=>'pages/bugreport')) !!}		
									<div class="form-group">
										{!! Form::text('bugTitle',null,['class'=>'form-control']) !!}<!-- Problem title textbox-->
										{!! Form::label('bugTitle','Problem Title') !!}
									</div>
									<div class="form-group">
										 <!-- Text Area -->			           
							            {!! Form::textarea('bugDescription', $value = null, ['class' => 'form-control','rows' => 3]) !!}<!-- Summary information textbox -->
							            {!! Form::label('bugDescription', 'Summary Information') !!}
									</div>
									<div class="card-actionbar">
										<div class="card-actionbar-row">								 
											<div class="form-group">    
		                       					{!! Form::submit('SUBMIT',['class'=>'btn btn-primary btn-raised']) !!}      <!-- Submit button-->
		               						</div>
		               						{!! Form::close() !!}   								<!-- END BUG REPORT SECTION -->
										</div>
									</div> 
							</div><!--end .card-body -->
						</div> <!--end .card -->
					</div><!--end .section-body-->
				</section> <!--end section-->
			</div><!--end #content-->
		</div><!--end #base-->
		<!-- END BASE -->

@stop
