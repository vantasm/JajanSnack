@extends('layouts/app_login')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <main class="form-signin">
            <form>
                <h1 class="h3 mb-3 fw-normal" style="text-align: center">Register</h1>
                <div class="form-floating">
                    <label for="floatingInput">E-Mail</label>
                <input type="email" class="form-control mb-2" id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Nama Lengkap</label>
                <input type="text" class="form-control mb-2" id="floatingInput" placeholder="Arjuna Accha">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Alamat</label>
                <input type="text" class="form-control" id="floatingPassword" placeholder="Jalan Berdua Mulu Kapan Jadian">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Confirm Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin: 2em 0" >Register</button>
            </form>
            </main>
        </div>
    </div>
@endsection