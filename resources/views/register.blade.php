@extends('layouts.user')

@section('title', 'Register')
 
@section('content') 
<div class="container pt-5">
    <h1 class="text-center text-white text-uppercase mt-5">Sign Up</h1>
    <div class="row justify-content-center">
        <div class="col-4 mt-5">
            <form method="POST" action="/register" >
                @csrf
                <div class="form-floating mb-3 text-dark">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Username" required value="{{ old('name') }}">
                    <label for="Username">Username</label>
                    @error('name')
                    <div class="invalid-feeback text-white-50">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3 text-dark">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" required value="{{ old('email') }}">
                    <label for="Email">Email</label>
                    @error('email')
                    <div class="invalid-feeback text-white-50">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3 text-dark">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="Password">Password</label>
                    @error('password')
                    <div class="invalid-feeback text-white-50">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-check text-light">
                    <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>
                <div class="d-grid mx-auto mt-3">
                    <button type="submit" name="login" class="btn btn-light text-uppercase my-2">Sign Up</button>
                </div>
            </form>
            <p class="text-center text-dark text-decoration-none">Already have an account?
                <a href="/login" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection