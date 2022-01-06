@extends("layouts/app")
@section("content")
    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('images/sweet_default_background.jpg')">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p>
                    <h1 class="mb-0 bread">Cart</h1>
                </div>
            </div>
        </div>   
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {{-- loop start --}}
                @include("layouts/include/display_snack_delete")
                {{-- end loop --}}
            </div>
            <div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
                        <a href="#" class="btn btn-primary">Bayar</a>
					</div>
				</div>
			</div>
        </div>
    </section>
@endsection