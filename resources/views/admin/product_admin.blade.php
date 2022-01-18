@extends('layouts/app_login')
<style>
    img{
        width: 10rem;
    }
    .action_admin{
        display: flex;
        flex-direction: row;
        align-content: center;
        align-items: center;
        justify-content: center;
    }
</style>
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table">
    <div class="container">
        <a href="/M3ADM1N/create" class="btn btn-primary my-4 px-4 my-2">Add Product +</a>
    </div>
    <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Product</th>
    <th scope="col">Name</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @if (count($products) > 0)
    @foreach ($products as $product)
    <tr>
        <th scope="row"><?php echo $i; $i++?></th>
        <td><img src="/{{$product->product_picture}}" alt=""></td>
        <td>{{$product->name}}</td>
        <td>
            <div class="action_admin">
                <form action="/M3ADM1N/edit" method="post">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    <button class="btn btn-primary px-4" style="margin-right:1rem;">Edit</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    @else
        <td></td>
        <td></td>
        <td>Add Your Product First</td>
        <td></td>
    @endif



    </tbody>
</table>
@endsection

