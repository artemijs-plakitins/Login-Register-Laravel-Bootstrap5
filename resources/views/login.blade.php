@extends('layout')

@section('title', 'Login')
@section('content')
    <div class = "container">
        <div class="card rounded-0 mt-3 shadow" style="width: 500px; margin: 0 auto;">
            <div class="card-body">
                <form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 400px">
                    @csrf
                    <div class="mb-3">
                        <p class="text-uppercase fs-2">Login</p>
                        <p>If you have an account, sign in with you email address.</p>
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <p><a class="link-opacity-100" href="{{ route('register') }}">Create an Account</a></p>
                    </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
        </div>
    </div>    
@endsection