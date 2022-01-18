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
        @if(session()->has('message'))
            <div class="alert alert-success mb-5">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Profile</h2>
            </div>
        </div>
    </div>

    <table class="table">
        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id" readonly>
            <tr class="text-center">
                <td>Name</td>
                <td><input name="name" type="text" placeholder="{{ Auth::user()->name }}"></td>
            </tr>
            <tr class="text-center">
                <td>Email</td>
                <td><input name="email" type="text" placeholder="{{ Auth::user()->email }}"></td>
            </tr>
            <tr class="text-center">
                <td>Address</td>
                <td><input name="address" type="text" placeholder="{{ Auth::user()->address }}"></td>
            </tr>
            <tr class="text-center">
                <td>Change Password</td>
                <td><input name="password" type="password" placeholder="Password"></td>
            </tr> 
            <tr class="text-center">
                <td>Confirm Change</td>
                <td><button class="btn btn-danger py-2 px-4" type="submit">Confirm Change</button></td>
            </tr>   
        </form>
        <form action="/delete_account" method="POST">
            <tr class="text-center">
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id" readonly>
                <td>Delete Account</td>
                <td><button class="btn btn-danger py-2 px-4" type="submit">Confirm Delete Account</button></td>
            </tr>
        </form>
    </table>
</section>
    

@endsection