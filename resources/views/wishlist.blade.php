@extends("layouts/app")

@section("content")
    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('images/sweet_default_background.jpg')">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p>
                    <h1 class="mb-0 bread">Wishlist</h1>
                </div>
            </div>
        </div>   
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {{-- loop start --}}
                @include("layouts/include/display_snack")
                {{-- end loop --}}
            </div>
            <div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </section>
@endsection