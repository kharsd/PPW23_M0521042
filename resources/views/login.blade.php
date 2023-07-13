@extends('layouts.user')

@section('title', 'Login')
 
@section('content') 
<div class="container pt-5">
    @if(session()->has('loginError'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif
    <h1 class="text-center text-white text-uppercase mt-5">Login</h1>
    <div class="row justify-content-center">

        <div class="col-4 mt-5">
            <form method="POST" action="/login" >
                @csrf
                <div class="form-floating mb-3 text-dark">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                    <label for="Username">Email</label>
                    @error('email')
                    <div class="invalid-feeback text-white-50">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3 text-dark">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="Password">Password</label>
                </div>
                <div class="form-check text-light">
                    <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>
                <div class="d-grid mx-auto mt-3">
                    <button type="submit" name="login" class="btn btn-light text-uppercase my-2">login</button>
                </div>
            </form>
            <p class="text-center text-dark">Don't have an account? 
                <a href="/register" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SignUp</a>
            </p>
        </div>
    </div>
</div>
@endsection