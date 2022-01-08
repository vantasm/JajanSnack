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
                @foreach ($products as $product)
                    @include("layouts/include/display_snack")
                @endforeach
                {{-- end loop --}}
            </div>
        </div>
    </section>
@endsection