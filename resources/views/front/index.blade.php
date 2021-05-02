@extends('front.master')

@section('content')
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			@foreach($data as $banner)
			<li class="text-left">
				<img src="upload/{{$banner->image}}" alt="" style="width: 100px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>{{$banner->title}}</strong></h1>
							<p class="m-b-40">{{$banner->description}}</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
							
						</div>
					</div>
				</div>
			</li>
			@endforeach
			
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				@foreach($data as $welcome)
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1><span>{{$welcome->title}}</span></h1>
						
						<p>{{$welcome->description}} </p>
						
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="upload/{{$welcome->image}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>

	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						{{$welcome->thought}}
					</p>
					<span class="lead">{{$welcome->thought_by}}</span>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Drinks</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lunch</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dinner</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								@foreach($d as $drink)
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="/upload/{{$drink->image}}" class="img-fluid" alt="Image" style="width: 275px;height: 150px;">
										<div class="why-text">
											<h4>{{$drink->name}}</h4>
											<p>{{$drink->description}}</p>
											<h5>{{$drink->rate}}</h5>
										</div>
									</div>
								</div>
								@endforeach
								
								
								
								
								@foreach($e as $lunch)	
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="/upload/{{$lunch->image}}" class="img-fluid" alt="Image" style="width: 275px;height: 150px;" >
										<div class="why-text">
											<h4>{{$lunch->name}}</h4>
											<p>{{$lunch->description}}</p>
											<h5>{{$lunch->rate}}</h5>
										</div>
									</div>
								</div>
							@endforeach
								
														
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-08.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $22.79</h5>
										</div>
									</div>
								</div>
							@foreach($f as $dinner)	
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">

										<img src="/upload/{{$dinner->image}}" class="img-fluid" alt="Image" style="width: 275px;height: 150px;">
										<div class="why-text">
											<h4>{{$dinner->name}}</h4>
											<p>{{$dinner->description}}</p>
											<h5>{{$dinner->rate}}</h5>
										</div>
									</div>
								</div>
							@endforeach	
								
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 1</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $7.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-02.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $9.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
							@foreach($d as $drink)
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="/upload/{{$drink->image}}" class="img-fluid" alt="Image" style="width: 100px;height: 200px;" >
										<div class="why-text">
											<h4>{{$drink->name}}</h4>
											<p>{{$drink->description}}</p>
											<h5>{{$drink->rate}}</h5>
										</div>
									</div>
								</div>								
							@endforeach
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
							@foreach($e as $lunch)
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="/upload/{{$lunch->image}}" class="img-fluid" alt="Image" style="width: 100px;height: 200px;" >
										<div class="why-text">
											<h4>{{$lunch->name}}</h4>
											<p>{{$lunch->description}}</p>
											<h5>{{$lunch->rate}}</h5>
										</div>
									</div>
								</div>
								
							@endforeach
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								@foreach($f as $dinner)
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="/upload/{{$dinner->image}}" class="img-fluid" alt="Image" style="width: 100px;height: 200px;" >
										<div class="why-text">
											<h4>{{$dinner->name}}</h4>
											<p>{{$dinner->discription}}</p>
											<h5>{{$dinner->rate}}</h5>
										</div>
									</div>
								</div>
								@endforeach
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-08.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $22.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-09.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $24.79</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					@foreach($c as $gallery)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="/upload/{{$gallery->image}}" alt="Gallery Images" style="width: 400px;height: 200px;">
						</a>
					</div>
				    @endforeach
				</div>
			</div>
		</div>
	</div>
	
	<!-- End Gallery -->
	
	
	
	<!-- Start Contact info -->
	<!-- <div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+91 7987646210 
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							ojasmishra701@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Gwalior
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Contact info -->
@endsection