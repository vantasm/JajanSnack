@extends("layouts/app")
@section("content")

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Shipping Status</h2>
                <p>Product will be shipped soon after the payment</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 mb-3 ml-5 ftco-animate">
                <img src="images/snacks/oreo_mcd.jpg" class="img-fluid" alt="Jajan Snack Images">
            </div>
        
            <div class="col-lg-6 product-details pl-md-5  ftco-animate">
                <h2>Cheeseburger McD x Oreo</h2>    
                {{-- list status : Completed, Shipped , Payment Confirmation, Failed--}}
                <h4>Status: Shipped</h4>
                {{-- description --}}
                <p>McDonald's cheeseburger in Oreo</p>
                {{-- Transacation date --}}
                <p>Transacation date: 30/12/2021</p>
                {{-- quantity --}}
                <p>Quantity: 5</p>
                {{-- total price --}}
                <p>Rp 150.000</p>
            </div>
            
            <div class="col-lg-5 mb-3 ml-5 ftco-animate">
                <img src="images/snacks/kitkat_peach_mint.jpeg" class="img-fluid" alt="Jajan Snack Images">
            </div>
        
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h2>Kitkat Peach Mint</h2>      
                {{-- list status : Completed, Shipped , Payment Confirmation--}}         
                <h4>Status: Payment Confirmation</h4>
                {{-- description --}}
                <p>Kitkat mixed with peach and mint flavor</p>
                {{-- Transacation date --}}
                <p>Transacation date: 2/1/2022</p>
                {{-- quantity --}}
                <p>Quantity: 3</p>
                {{-- total price --}}
                <p>Rp 45.000</p>
            </div>
        </div>

    </div>
</section>

    

@endsection