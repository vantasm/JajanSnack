<div class="col-md-6 col-lg-3 ftco-animate">
<div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="{{ $product->product_picture }}" alt="Colorlib Template">
        @if ($product->discount > 0)
            <span class="status">{{ $product->discount }}%</span>
        @endif
        <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
        <h3><a href="#">{{ $product->name }}</a></h3>
        <div class="d-flex">
            <div class="pricing">
                <p class="price">
                @if ($product->discount > 0)
                    <span class="mr-2 price-dc">Rp {{ number_format($product->price, 0, ",", ".") }}</span>
                    <span class="price-sale">Rp {{ number_format($product->after_price, 0, ",", ".") }}</span>
                @else
                    <span>{{ $product->price }}</span>
                @endif
                </p>
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