@extends('layouts/app_login')
@section('content')
<div class="container">
    <a href="/M3ADM1N">Back</a>
    <h1>Edit Product</h1>
    
    <div class="sub-contain" style="display: flex; margin: 1rem 0;">
        <form action="/M3ADM1N/update" method="post" style="padding: 0 1rem;" >
            @csrf
            <input type="hidden" value="{{$detail->id}}" name="product_id">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" id="product_name" value="{{$detail->name}}">
            </div>
            <div class="form-group">
                <label for="name">Product Description:</label>
                <textarea class="form-control" id="product_desc" name="product_desc" rows="3">{{$detail->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="name">Product Price:</label>
                <input type="text" name="product_price" id="product_price" value="{{$detail->price}}">
            </div>
            <div class="form-group">
                <label for="name">Product Quantity:</label>
                <input type="text" name="product_qty" id="product_qty" value="{{$detail->quantity}}">
            </div>
            <div class="form-group">
                <label for="name">Product Discount:</label>
                <input type="text" name="product_disc" id="product_disc" value="{{$detail->discount}}">
            </div>
            <div class="form-group">
                <label for="name">Product Category:</label>
                <input type="text" name="product_cat" id="product_cat" value="{{$detail->category}}">
            </div>
            <div class="form-check">
                @if (!$detail->status)
                <input type="checkbox" class="form-check-input" id="product_check" name="product_check" checked>
                @else
                <input type="checkbox" class="form-check-input" id="product_check" name="product_check">
                @endif
                <label class="form-check-label" for="product_check">Active</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 1rem 0;">Edit Product</button>
        </form>
        <img src="/{{$detail->product_picture}}" alt="none" style="max-width: 50%;margin-left:10rem;">
    </div>
    
    

</div>

@endsection
{{-- @extends('layouts.app') --}}

{{-- @section('content')
    
@endsection --}}