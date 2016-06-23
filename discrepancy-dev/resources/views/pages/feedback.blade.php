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
								{!! Form::open(array('class'=>'form floating-label','role'=>'form','method'=>'POST','url'=>'pages/feedback')) !!}		
									<div class="form-group">
										{!! Form::text('title',null,['class'=>'form-control']) !!}
										{!! Form::label('title','Title') !!}
									</div>
									<div class="form-group">
										 <!-- Text Area -->			           
							            {!! Form::textarea('textarea', $value = null, ['class' => 'form-control','rows' => 3]) !!}
							            {!! Form::label('description', 'Description', ['class' => ' control-label']) !!}
									</div>
								{!! Form::close() !!}
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
