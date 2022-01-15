@extends('layouts/app')
@section('content')
<section class="ftco-section">
	<div class="container">
		@if(session()->has('message'))
			<div class="alert alert-success mb-5">
				{{ session()->get('message') }}
			</div>
		@endif
		@if(session('error'))
			<div class="alert alert-danger mb-5">
				{{ session()->get("error") }}
			</div>
		@endif
		<p><a href="/shop">Back to Shop</a></p>
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>    
			<strong>{{ $message }}</strong>
		</div>
		@endif
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="#" class="image-popup"><img src="{{ asset($product->product_picture) }}" class="img-fluid" alt="Jajan Snack Images"></a>
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
				</div>
				<p class="price">
					@if($product->discount > 0)
						<span>Rp {{ number_format($product->after_price, 0, ",", ".") }}</span>
					@else
						<span>Rp {{ number_format($product->price, 0, ",", ".") }}</span>
					@endif
				</p>
				<p>{{ $product->description }}</p>
				@if(Auth::user())
					<form action="/order/{{ $product->id }}/{{ Auth::user()->id }}" method="POST" id="order">
						@csrf
						<div class="row mt-4">
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
								<span class="input-group-btn mr-2">
									<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
										<i class="fas fa-minus"></i>
									</button>
								</span>
								<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="{{ $product->quantity }}">
								<span class="input-group-btn ml-2">
									<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
										<i class="fas fa-plus"></i>
									</button>
								</span>
							</div>
							<div class="col-md-6 d-flex mb-3">
								{{-- <p><a href="#" class="btn btn-danger">Add to Wishlist</a></p> --}}
								<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('wishlist')}}">
									@csrf
									 <input type="hidden" value="{{$product->id}}" name="product_id" id="product_id" readonly>
									 <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id" readonly>
									 <button type="submit" class="btn btn-danger">
										<a class="btn btn-danger">Add to Wishlist</a>
									 </button>
								</form>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<p style="color: #000;">{{ $product->quantity }} available</p>
							</div>
						</div>
						<p><a href="#" class="btn btn-danger py-3 px-5" id="button_submit">Add to Cart</a></p>
					</form>
				@else
					<div class="row mt-4">
						<div class="w-100"></div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<p style="color: #000;">{{ $product->quantity }} available</p>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</section>
@endsection