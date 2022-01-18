<div class="col-md-6 col-lg-3 ftco-animate {{ $product->category }} start_product">
    <div class="product">
        <a href="{{ route('product', $product->id) }}" class="img-prod"><img class="img-fluid" src="{{ $product->product_picture }}" alt="Colorlib Template">
            @if ($product->discount > 0)
                <span class="status">{{ $product->discount }}%</span>
            @endif
            <div class="overlay"></div>
        </a>
        <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="{{ route('product', $product->id) }}">{{ $product->name }}</a></h3>
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
            @if (Auth::guest())
            <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                    <a href="/login" class="add-to-cart d-flex justify-content-center align-items-center text-center mr-2" data-toggle="tooltip" title="Add to Cart">
                        <span><i class="fas fa-cart-plus"></i></span>
                    </a>
                    <a href="/login" class="heart d-flex justify-content-center align-items-center " data-toggle="tooltip" title="Add to Wishlist">
                        <span><i class="fas fa-heart"></i></span>
                    </a>
                </div>
            </div>
            @else
            <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center mr-2" data-toggle="tooltip" title="Add to Cart">
                        <span><i class="fas fa-cart-plus"></i></span>
                    </a>
                    <a href="/wishlist/{{Auth::user()->id}}/{{$product->id}}" class="heart d-flex justify-content-center align-items-center " data-toggle="tooltip" title="Add to Wishlist">
                        <span><i class="fas fa-heart"></i></span>
                    </a>
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('wishlist')}}">
                        @csrf
                         <input type="hidden" value="{{$product->id}}" name="product_id" id="product_id" readonly>
                         <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id" readonly>
                         <button type="submit" class="btn btn-primary">
                            <span><i class="fas fa-heart"></i></span>
                         </button>
                    </form>
                </div>
            </div>
            @endif
                
            
        </div>
    </div>
</div>