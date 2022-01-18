@extends("layouts/app")
<style>
.modal-container_cart{
    background-color: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    opacity: 0;
    pointer-events: none;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
}

.modal-container_cart.show{
    pointer-events: auto;
    opacity: 1;
}
.modal-container_cart_1{
    background-color: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    opacity: 0;
    pointer-events: none;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
}

.modal-container_cart_1.show{
    pointer-events: auto;
    opacity: 1;
}

.modal-container_cart_success{
    background-color: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    opacity: 0;
    pointer-events: none;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
}

.modal-container_cart_success.show{
    pointer-events: auto;
    opacity: 1;
}

.modal_cart{
    background-color: #fff;
    padding: 30px 50px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    width: 600px;
    max-width: 100%;
    text-align: center;
}

.modal h1{
    margin: 0;
}

.modal p{
    font-size: 14px;
    opacity: 0.7;
}
#close_cart{
    border: 0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    color: #fff;
    font-size: 14px;
    padding: 10px 25px;
	float: left;
}
#close_cart_1{
    border: 0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    color: #fff;
    font-size: 14px;
    padding: 10px 25px;
	float: left;
}
.list-group-item:hover{
	background-color: rgb(3, 160, 250);
	color: white;
}
</style>
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
	<h1 class="" style="margin-left: 80px;font-weight: bold">Cart</h1>
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
												$before_price = $before_price + $product->price * $detail->quantity;
												$after_price = $after_price + $product->after_price * $detail->quantity;
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
							<p><a href="#" class="btn btn-primary py-3 px-4">Estimate</a></p>
						</div>
						<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3" id="cart">
								<h3>Shipping Address Detail</h3>
								<form action="#" class="info">
									<input type="hidden" name="user" id="user_id" value="{{Auth::user()->id}}">
									<p>Name: <span id='name_addr'>{{Auth::user()->name}}</span></p>
									<p>Phone: <span id='phone_addr'>(+62)82213105577</span></p>
									<p id='addr'>{{Auth::user()->address}}</p>
								</form>
							</div>
							<p><a href="#" class="btn btn-primary py-3 px-4"  data-toggle="modal" data-target="#exampleModal" id="openModal">Change Address</a></p>
							
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
			<div class="modal-container_cart" id="modal_container_cart" style="z-index: 100;">
				<div class="modal_cart" style="height:100vh;overflow-y: auto;">
					<button id="close_cart"><span aria-hidden="true">&times;</span></button>
					<h1>Your Address</h1>
					<ul class="list-group" id="getAddress">
					
					</ul>
					  <p><a href="#" class="btn btn-primary py-3 px-4" id="postAddress" data-toggle="modal" data-target="#exampleModal">Add Address</a></p>
				</div>
			</div>
			<div class="modal-container_cart_1" id="modal_container_cart_1" style="z-index: 100;overflow-y: auto; padding-top:0rem;">
				<div class="modal_cart">
					<button id="close_cart_1"><span aria-hidden="true">&times;</span></button>
					<h1>JajanSnack</h1>
					<form id="address_form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="name">Reciever Name:</label>
							<input type="text" name="name" id="recv_name" placeholder="John Doe">
						</div>
						<div class="form-group">
							<label for="phone">Reciever Phone:</label>
							<input type="text" name="phone" id="recv_phone" placeholder="(+62)8xxxxxxxxx">
						</div>
						<div class="form-group">
							<label for="address">Reciever Address:</label>
							<input type="text" name="address" id="recv_address" placeholder="Jl. Sukamaju Blok A No.3">
						</div>
						<a href="#" class="btn btn-primary py-3 px-4" id="submit_Addr">Add New Address</a>
				</form>
				</div>
			</div>
			<div class="modal-container_cart_success" id="modal_container_cart_success" style="z-index: 100;overflow-y: auto; padding-top:0rem;">
				<div class="modal_cart">
					<img src="images/logo/success.png" alt="" style="width: 10rem;">
					<h3>Sucessfully Added New Address!</h1>
					<a href="#" class="btn btn-primary py-3 px-4" id="success_ok">OK!</a>
				</div>
			</div>
	</section>
	<script>
		// List Address
		const open = document.getElementById("openModal");
		const modal_container = document.getElementById("modal_container_cart");
		const close = document.getElementById("close_cart");
		const on_scs = document.getElementById('success_ok');
		const id = document.getElementById("user_id").value;
		let i = 1;

		open.addEventListener('click', ()=> {
			modal_container.classList.add('show');
		})

		close.addEventListener('click', () => {
			modal_container.classList.remove('show');
			let parent = document.getElementById("getAddress");
			parent.textContent = "";
			i=1;
		})
		on_scs.addEventListener('click', ()=>{
			document.getElementById('modal_container_cart_success').remove('show');
		})
		//Address Form
		const post_open = document.getElementById("postAddress");
		const modal_container_1 = document.getElementById("modal_container_cart_1");
		const close_1 = document.getElementById("close_cart_1");

		post_open.addEventListener('click', ()=> {
			modal_container_1.classList.add('show');
			modal_container.classList.remove('show');
			let parent = document.getElementById("getAddress");
			parent.textContent = "";
			i=1;
		})

		close_1.addEventListener('click', () => {
			modal_container_1.classList.remove('show');
		})


		function chooseAddr(i){
			const user = document.getElementById('name_addr_'+i).textContent;
			const phone = document.getElementById('phone_addr_'+i).textContent;
			const address = document.getElementById('addr_'+i).textContent;

			document.getElementById('name_addr').textContent = user;
			document.getElementById('phone_addr').textContent = phone;
			document.getElementById('addr').textContent = address;

			modal_container.classList.remove('show');
			let parent = document.getElementById("getAddress");
			parent.textContent = "";
			i=1;
		}

		$(document).ready(function(){
            $('#openModal').click(function(){
                $.ajax({
                    type: "GET",
                    url: "/address/" + id,
                    dataType: 'json',
                    success: function(data){
							if (data) {
								try {
									data.forEach(element => {
									$('#getAddress').append("<li class='list-group-item my-2'><p>Name: <span id='name_addr_"+i+"'>"+element["reciever_name"]+"</span></p>\
									<p>Phone: <span id='phone_addr_"+i+"'>"+element["reciever_phone"]+"</span></p>\
									<p id='addr_"+i+"'>"+element["address"]+"</p>\
									<a href='#cart' onclick='chooseAddr("+i+")' id='prevent'><span class='fa fa-angle-right' style='float: right;cursor: pointer;'></span></a></li>");
									i++;});
								} catch (err) {
									$('#getAddress').append("<li class='list-group-item my-2'><p>Name: <span id='name_addr_"+i+"'>"+data["reciever_name"]+"</span></p>\
									<p>Phone: <span id='phone_addr_"+i+"'>"+data["reciever_phone"]+"</span></p>\
									<p id='addr_"+i+"'>"+data["address"]+"</p>\
									<a href='#cart' onclick='chooseAddr("+i+")' id='prevent'><span class='fa fa-angle-right' style='float: right;cursor: pointer;'></span></a></li>");
									
								}
							} else {
								$('#getAddress').append("<p>There is no address record, please Input one!</p>");
							}
						
                    },
                });
            });
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#submit_Addr').click(function(){
				// e.preventDefault();
   
				var name = $("#recv_name").val();
				var phone = $("#recv_phone").val();
				var address = $("#recv_address").val();
				var success = $('#modal_container_cart_success');

				$.ajax({
					type: "POST",
					url: "/address/post",
					data: {id:id,name:name, phone:phone, address:address},
					dataType: "json",
					success: function(response){
						success.addClass('show');
						modal_container_1.classList.remove('show');
						// alert("success");
						$('#address_form').trigger("reset");
					}
				});
			});
        });

	</script>
@endsection
