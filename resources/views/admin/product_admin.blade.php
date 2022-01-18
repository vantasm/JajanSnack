@if (Auth::guest() || Auth::user()->isadmin == 0)
<style>
    body {
    background: #dedede;
}
    .page-wrap {
        min-height: 100vh;
    }
</style>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="/home" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>

@else
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
                    <button class="btn btn-primary" style="margin-right:1rem;">Edit</button>
                </form>
                <form action="delete">
                    <button class="btn btn-danger">Delete</button>
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
@endif

