@extends('layouts/app')
@section('content')
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/img1.jpg" class="image-popup"><img src="images/sweet_default_background.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $product->name }}</h3>
    				<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">{{ $product->rating }}</a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
						</p>
						{{-- <p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
						</p> --}}
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
						</p>
					</div>
    				<p class="price">
						@if($product->discount > 0)
							<span>{{ $product->after_price }}</span>
						@else
							<span>{{ $product->price }}</span>
						@endif
					</p>
    				<p>{{ $product->description }}</p>
						<div class="row mt-4">
							{{-- <div class="col-md-6">
								<div class="form-group d-flex">
									<div class="select-wrap">
										<div class="icon"><i class="fas fa-chevron-down"></i></div>
										<select name="" id="" class="form-control">
											<option value="">Small</option>
											<option value="">Medium</option>
											<option value="">Large</option>
											<option value="">Extra Large</option>
										</select>
									</div>
								</div>
							</div> --}}
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
								<span class="input-group-btn mr-2">
									<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
										<i class="fas fa-minus"></i>
									</button>
								</span>
								<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
								<span class="input-group-btn ml-2">
									<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
										<i class="fas fa-plus"></i>
									</button>
								</span>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<p style="color: #000;">{{ $product->quantity }}</p>
							</div>
						</div>
          			<p><a href="cart.html" class="btn btn-danger py-3 px-5">Add to Cart</a></p>
    			</div>
    		</div>
    	</div>
    </section>
@endsection
