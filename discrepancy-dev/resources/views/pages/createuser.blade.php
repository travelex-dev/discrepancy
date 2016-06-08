@extends('app')

@section('content')

		<!-- BEGIN MAIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm">	
				<div class="card-head style-primary">
					<header>Create an account</header>                              						  <!-- Page heading -->
				</div>	
				<div class="card-body">	
					<!-- BEGIN CREATE USER SECTION -->					
					<form class="form floating-label" action="../../html/pages/login.html" accept-charset="utf-8" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="Firstname1" name="Firstname1"><!-- First name textbox -->
									<label for="Firstname1">Firstname</label>       
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="Lastname1">					  <!-- Last name textbox -->
									<label for="Lastname1">Lastname</label>
								</div>
							</div>
						</div>
						<div class="form-group">
									<input type="text" class="form-control" id="Username1">                   <!-- User name textbox -->
									<label for="Username1">Username</label>
						</div>
						<div class="form-group">
									<input type="password" class="form-control" id="Password1">               <!-- Password textbox -->
									<label for="Password1">Password</label>
						</div>
						<div class="checkbox checkbox-styled">                                      
									<label>
										<input type="checkbox" value="">
										<span>Send me weekly updates</span>
									</label>
						</div>
						<div class="card-actionbar">
							<div class="card-actionbar-row">
								<button type="submit" class="btn btn-primary btn-raised">Create account</button> <!-- Submit button -->
							</div>
						</div>					
					</form>					
					<!-- END CREATE USER SECTION -->
				</div><!--end .card-body -->
			</div><!--end .card -->
		</section>
		<!-- END MAIN SECTION -->

@stop