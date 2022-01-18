<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">JajanSnack</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/shop">Shop</a>
                        <a class="dropdown-item" href="/wishlist">Wishlist</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    @if (Auth::guest())
                        <a href="/login" class="nav-link">Login</a>
                    @else
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            aria-current="page">Logout</a>
                            @if (Auth::user()->isadmin)
                                <a class="dropdown-item" href="/M3ADM1N">Admin</a>
                            @endif
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </li>
                @if (Auth::user())
                    <li class="nav-item cta cta-colored">
                        <?php
                            $order = App\Models\Transaction::where("user_id", Auth::user()->id)->where("status", "cart")->first();
                            if (empty($order))
                            {
                                $detail_order = 0;
                            }
                            else
                            {
                                $detail_order = App\Models\DetailTransaction::where("transaction_id", $order->id)->count();
                            }
                        ?>
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('cart')}}">
                            @csrf
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id" readonly>
                             
                            {{-- <a href="#" class="nav-link"><span><i class="fas fa-shopping-cart"></i></span>[{{ $detail_order }}]</a> --}}
                            <button style="margin-top:1rem;"><span><i class="fas fa-shopping-cart"></i></span>[{{ $detail_order }}]</button>
                        </form>
                        {{-- <a href="/cart/{{ Auth::user()->id }}" class="nav-link"><span><i class="fas fa-shopping-cart"></i></span>[{{ $detail_order }}]</a> --}}
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>