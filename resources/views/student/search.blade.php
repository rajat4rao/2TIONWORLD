@extends('layouts.app')

@section('content')

<body class="navbar-md-md-top" style="padding-top: 51px;">

	<!-- Multiple fixed navbars wrapper -->
	<div class="fixed-top">

		<!-- Main navbar -->
		<div class="navbar navbar-expand-md navbar-dark">
			<div class="navbar-brand" style="padding: 8px 0px;">
				<a href="index.html" class="d-inline-block">
					<h3 style="font-weight: 800;font-size: 20px;margin: 0px;color: #fff;">2tionworld</h3>
				</a>
			</div>

			

			<div class="collapse navbar-collapse" id="navbar-mobile">
				<ul class="navbar-nav">


					
				</ul>

				<span class="badge bg-success ml-md-3 mr-md-auto">Find your favourate tutor</span>

				<ul class="navbar-nav">
					

					<li class="nav-item ">
						<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
							
							<span class=" ml-2">Blogs</span>
						</a>
						
						
					</li>
					<li class="nav-item ">
						<a href="login.html" class="navbar-nav-link dropdown-toggle caret-0" >
							
							<span class=" ml-2">Student</span>
						</a>
						
						
					</li>
					<li class="nav-item ">
						<a href="login.html" class="navbar-nav-link dropdown-toggle caret-0" >
							
							<span class=" ml-2">Tutor</span>
						</a>
						
						
					</li>

					<li class="nav-item dropdown dropdown-user">
						<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
							<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
							<span>Logged in User</span>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="dashboard.html" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- /main navbar -->


	
		<!-- /alternative navbar -->

	</div>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Search field -->
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Find tutors for free</h5>

						<form action="#">
							<div class="input-group mb-3">
								<div class="form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control form-control-lg alpha-grey" value="Graphic Designers" placeholder="Search">
									<div class="form-control-feedback form-control-feedback-lg">
										<i class="icon-search4 text-muted"></i>
									</div>
								</div>

								<div class="input-group-append">
									<button type="submit" class="btn btn-primary btn-lg">Search</button>
								</div>
							</div>

						</form>
					</div>
				</div>
				<!-- /search field -->



				<!-- Vertical cards view -->
				<div class="pt-2 mb-3">
					<h6 class="mb-0 font-weight-semibold">
						searched results
					</h6>
					<span class="text-muted d-block">Graphic Designers</span>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										
										<a href="dashboard.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>
								
								
								
								
				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    <a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="WhatsApp"><i class="fab fa-whatsapp" style="color: #000;font-weight: 600;font-size: 17px;"></i></a>
			                    </div>
					    	</div>
				    	</div>
					</div>
					
					
				</div>

				
			</div>
			<!-- /content area -->


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
@endsection