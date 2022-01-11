@extends('layouts/app')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('images/sweet_default_background.jpg')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">Welcome</span></p>
                {{-- Nama user --}}
                <h1 class="mb-0 bread">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Profile</h2>
            </div>
        </div>
    </div>

    
    <table class="table">
        <tr class="text-center">
            <td>Name</td>
            <td><input type="text" placeholder="{{ Auth::user()->name }}"></td>
        </tr>
        <tr class="text-center">
            <td>Email</td>
            <td><input type="text" placeholder="{{ Auth::user()->email }}"></td>
        </tr>
        <tr class="text-center">
            <td>Address</td>
            <td><input type="text" placeholder="{{ Auth::user()->address }}"></td>
        </tr>
        <tr class="text-center">
            <td>Password</td>
            <td><a href="#"><button class="btn btn-danger py-2 px-4">Change Password</button></a></td>
        </tr>   
        <tr class="text-center">
            <td>Confirm Change</td>
            <td><form action="" method="post" enctype="multipart/form-data"><input type="button" class="btn btn-danger py-2 px-4 " style="justify-content: center" value="Confirm Change"></form></td>
        </tr>   
    </table>


</section>
    

@endsection