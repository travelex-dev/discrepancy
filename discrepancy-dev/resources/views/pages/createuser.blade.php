@extends('layouts.default')

@section('content')


<!-- Display Validation Errors -->
        @include('errors.list')
        
		<!-- BEGIN MAIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm">	
				<div class="card-head style-primary">
					<header>Create an account</header>                              						<!-- Page heading -->
				</div>	
				<div class="card-body">	
					<!-- BEGIN CREATE USER SECTION -->					
					{!! Form::open(array('class'=>'form floating-label','role'=>'form','method'=>'POST','url'=>'pages/createuser')) !!}		
						<div class="row">
							<div class="col-sm-6">
									<div class="form-group">
										{!! Form::text('firstName',null,['class'=>'form-control']) !!}		<!-- First name textbox -->
										{!! Form::label('firstName','Firstname') !!}
									</div>
							</div>
							<div class="col-sm-6">
									<div class="form-group">
										{!! Form::text('lastName',null,['class'=>'form-control']) !!}		<!-- Last name textbox -->
										{!! Form::label('lastName','Lastname') !!}
									</div>
							</div>
						</div>
									<div class="form-group">
										{!! Form::text('username',null,['class'=>'form-control']) !!}		<!-- User name textbox -->
										{!! Form::label('username','Username') !!}
									</div>
									<div class="form-group">
										{!! Form::text('email',null,['class'=>'form-control']) !!}			<!-- Email textbox -->
										{!! Form::label('email','Email') !!}
									</div>
									<div class="form-group">	
										{!! Form::input('password','password',null,['class'=>'form-control']) !!}<!-- Password textbox -->
										{!! Form::label('password','Password') !!}
									</div>
									
								<div class="checkbox checkbox-styled">   
									<div class="form-group">
			                    		<div class="checkbox">
			                         		<label>
			                            	{!! Form::checkbox('weeklyupdates','') !!} Send me weekly updates<!-- Checkbox weekly updates -->
			                          		</label>
			                        </div>
			                        </div>
			            		</div>
			                	<div class="card-actionbar">
										<div class="card-actionbar-row">		
											<div class="form-group">    
                       						{!! Form::submit('Create account',['class'=>'btn btn-primary btn-raised']) !!}                      
               								</div>
               							</div>
								</div>
										
					{!! Form::close() !!}
					<!-- END CREATE USER SECTION -->
				</div><!--end .card-body -->
			</div><!--end .card -->
		</section>
		<!-- END MAIN SECTION -->

@stop