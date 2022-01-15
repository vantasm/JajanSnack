@extends("layouts/app")
@section("content")
    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset('images/sweet_default_background.jpg') }})">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Cart</h1>
                </div>
            </div>
        </div>   
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				@if(session()->has('message'))
					<div class="alert alert-success mb-5">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="row">
					<div class="col-md-12 ftco-animate">
						<div class="cart-list">
							<table class="table">
								<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
									@if($counter > 0)
										<?php
											$before_price = 0;
											$after_price = 0;
										?>
										@foreach($detail_order as $detail)
											<?php
												$product = App\Models\Product::where("id", $detail->product_id)->first();
												$before_price = $before_price * $detail->quantity + $product->price;
												$after_price = $after_price + $detail->total_price;
											?>
											<tr class="text-center">
												<td class="product-remove">
													<form action="/cart/{{ $detail->product_id }}" method="POST" id="form_remove_from_cart">
														@csrf
														{{ method_field('DELETE') }}
														<a href="#" id="button_remove_from_cart"><i class="fas fa-times"></i></a>
													</form>
												</td>
												
												<td class="image-prod">
													<div class="img" style="background-image:url({{ asset($product->product_picture) }});"></div>
												</td>
												
												<td class="product-name">
													<h3>{{ $product->name }}</h3>
													<p>{{ $product->description }}</p>
												</td>
												
												@if($product->discount > 0)
													<td class="price">Rp {{ number_format($product->after_price, 0, ",", ".") }}</td>
												@else
													<td class="price">Rp {{ number_format($product->price, 0, ",", ".") }}</td>
												@endif
												
												<td class="quantity">
													<div class="input-group mb-3">
														<input type="text" name="quantity" class="quantity form-control input-number" value="{{ $detail->quantity }}" min="1" max="100">
													</div>
												</td>
												
												@if($product->discount > 0)
													<td class="total">Rp {{ number_format($product->after_price * $detail->quantity, 0, ",", ".") }}</td>
												@else
													<td class="total">Rp {{ number_format($product->price * $detail->quantity, 0, ",", ".") }}</td>
												@endif
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
				@if($counter > 0)
					<div class="row justify-content-end">
						<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3">
								<h3>Coupon Code</h3>
								<p>Enter your coupon code if you have one</p>
								<form action="#" class="info">
									<div class="form-group">
										<label for="">Coupon code</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
								</form>
							</div>
							<p><a href="#" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
						</div>
						<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3">
								<h3>Estimate shipping and tax</h3>
								<p>Enter your destination to get a shipping estimate</p>
								<form action="#" class="info">
									<div class="form-group">
										<label for="">Country</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
									<div class="form-group">
										<label for="country">State/Province</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
									<div class="form-group">
										<label for="country">Zip/Postal Code</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
								</form>
							</div>
							<p><a href="#" class="btn btn-primary py-3 px-4">Estimate</a></p>
						</div>
						<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3">
								<h3>Cart Totals</h3>
								<p class="d-flex">
									<span>Subtotal</span>
									<span>Rp {{ number_format($before_price, 0, ",", ".") }}</span>
								</p>
								<p class="d-flex">
									<span>Delivery</span>
									<span>Rp 0</span>
								</p>
								<p class="d-flex">
									<span>Discount</span>
									<span>Rp {{ number_format($before_price - $after_price, 0, ",", ".") }}</span>
								</p>
								<hr>
								<p class="d-flex total-price">
									<span>Total</span>
									<span>Rp {{ number_format($order->total_price, 0, ",", ".") }}</span>
								</p>
							</div>
							<form action="/checkout/{{ $order->id }}/{{ Auth::user()->id }}" method="POST" id="form_checkout">
								@csrf
								<p><a href="#" class="btn btn-primary py-3 px-4" id="button_checkout">Proceed to Checkout</a></p>
							</form>
						</div>
					</div>
				@endif
			</div>
	</section>
@endsection