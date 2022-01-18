@extends('layouts/app_login')
@section('content')
<div class="container">
    <a href="/M3ADM1N">Back</a>
    <h1>Add Product</h1>
    
    <div class="sub-contain" style="display: flex; margin: 1rem 0;">
        <form action="/M3ADM1N/store" method="post" style="padding: 0 1rem;" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" id="product_name" >
            </div>
            <div class="form-group">
                <label for="name">Product Description:</label>
                <textarea class="form-control" id="product_desc" name="product_desc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Product Price:</label>
                <input type="text" name="product_price" id="product_price">
            </div>
            <div class="form-group">
                <label for="name">Product Quantity:</label>
                <input type="text" name="product_qty" id="product_qty">
            </div>
            <div class="form-group">
                <label for="name">Product Discount:</label>
                <input type="text" name="product_disc" id="product_disc">
            </div>
            <div class="form-group">
                <label for="name">Product Category:</label>
                <input type="text" name="product_cat" id="product_cat">
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="product_check" name="product_check" checked>
                <label class="form-check-label" for="product_check">Active</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 1rem 0;">Add Product</button>
        </form>
    </div>
    
    

</div>

@endsection
{{-- @extends('layouts.app') --}}

{{-- @section('content')
    
@endsection --}}