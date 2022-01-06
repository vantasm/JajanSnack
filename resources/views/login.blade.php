@extends('layouts/app_login')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-sm-3">
        <main class="form-signin">
          <form>
            <h1 class="h3 mb-3 fw-normal" style="text-align: center">Sign In</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin: 2em 0" >Sign in</button>
          </form>
        </main>
        <small class="d-block text-center">Not registered yet? <a href="/register">Register Now</a></small>
    </div>
</div>

@endsection