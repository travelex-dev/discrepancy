@extends('layouts.default')

@section('content')

<!-- Display Validation Errors -->
        @include('errors.list')

<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">TAXIDIA</span>
							<br/><br/>
								{!! Form::open(array('class'=>'form floating-label','role'=>'form','method'=>'POST','url'=>'pages/login')) !!}		
									<div class="form-group">
										{!! Form::text('username',null,['class'=>'form-control']) !!}
										{!! Form::label('username','Username') !!}
									</div>
									<div class="form-group">	
										{!! Form::input('password','password',null,['class'=>'form-control']) !!}
										{!! Form::label('password','Password') !!}
										<div class="form-group help-block">
										{!! link_to('', $title = 'Forgot Your Password?', $attributes = array(), $secure = null); !!}
									</div>
									</div>
									
									<div class="row">
									     <div class="col-xs-6 text-left">
											<div class="checkbox checkbox-inline checkbox-styled">
												<div class="form-group">
			                    						<div class="checkbox">
			                         						 <label>
			                             						{!! Form::checkbox('remember','') !!} Remember Me
			                          						</label>
			                        					</div>
			                					</div>
			                				</div>
										</div><!--end .col -->
										<div class="col-xs-6 text-right">
											<div class="form-group">    
                       							 {!! Form::submit('Login',['class'=>'btn btn-primary btn-raised', 'style'=>'margin-right: 15px;']) !!}                      
               								 </div>
										</div><!--end .col -->
									</div><!--end .row -->
								{!! Form::close() !!}
						</div><!--end .col -->
						<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									No account yet?
								</h3>
									{!! Form::open(array('class'=>'form floating-label','role'=>'form','method'=>'GET','url'=>'createuser')) !!}
								  		{!! Form::submit('Sign up here', ['class'=>'btn btn-block btn-raised btn-primary']) !!}
									{!! Form::close() !!}			  				  
						</div><!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
			</div><!--end .card -->
		</section>
				<!-- END LOGIN SECTION -->



@stop
						