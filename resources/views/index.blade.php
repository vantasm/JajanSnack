@extends("layouts/app")

@section("content")
	<div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('images/sweet_default_background.jpg')">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p>
					<h1 class="mb-0 bread">Jajan Snack</h1>
				</div>
			</div>
		</div>
	</div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Best Products</h2>
					<p>Selected randomly based on the review on the products</p>
				</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                {{-- loop start 8x --}}
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/snack_default_picture.png" alt="Colorlib Template">
    						<span class="status">DISC NUM</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">PRODUCT NAME</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">PRICE</span><span class="price-sale">AFTER SALE</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="fas fa-cart-plus"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="fas fa-shopping-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="fas fa-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
                    </div>
                </div>
                {{-- end loop --}}
            </div>
        </div>
    </section>
@endsection