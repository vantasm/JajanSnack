@extends("layouts/app")

@section("content")
    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('images/sweet_default_background.jpg')">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span>Products</span></p>
                    <h1 class="mb-0 bread">Jajan Snack</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-1 d-flex justify-content-center align-items-center mb-2">
								<i class="fas fa-truck" style="font-size: 32px; color:white"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Free Shipping</h3>
							<span>On order over Rp 50.000</span>
						</div>
					</div>      
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<i class="fas fa-box" style="font-size: 32px; color: white"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Brand New</h3>
							<span>Fresh from the oven</span>
						</div>
					</div>    
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<i class="fas fa-award" style="font-size: 32px; color:white"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Original</h3>
							<span>Quality Products</span>
						</div>
					</div>      
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<i class="fas fa-user-clock" style="font-size: 32px; color:white"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Support</h3>
							<span>100% Replied Chat</span>
						</div>
					</div>      
				</div>
			</div>

            <div class="row justify-content-center mt-5">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category" name="category">
    					<li><a href="#" class="active" id="all">All</a></li>
    					<li><a href="#" id="biscuits">Biscuits</a></li>
    					<li><a href="#" id="chips">Chips</a></li>
    					<li><a href="#" id="chocolate">Chocolate</a></li>
    					<li><a href="#" id="candy">Candy</a></li>
    				</ul>
    			</div>
    		</div>
            <div class="row">
				@foreach ($products as $product)
					@include("layouts/include/display_snack")
				@endforeach
            </div>
        </div>
    </section>
@endsection