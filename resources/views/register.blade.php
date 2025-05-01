@extends('layout')

@section('title', 'Register')
@section('content')
    <div class = "container">
        <div class="card rounded-0 mt-3 shadow" style="width: 500px; margin: 0 auto;">
            <div class="card-body">
                <form action="{{ route('register.post') }}" method="POST" class="ms-auto me-auto mt-1" style="width: 400px">
                    @csrf
                    <div class="mb-3">
                        <p class="text-uppercase">Personal information</p>
                        <label for="InputFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="FirstName">
                    </div>
                    <div class="mb-3">
                        <label for="InputlastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="LastName">
                    </div>
                    <div class="mb-3">
                        <p class="text-uppercase">Sign-in information</p>
                        <label for="InputEmailRegister" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputPasswordRegister" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="InputPasswordConfirmationRegister" class="form-label">Conform password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name = "subscribed"checked>
                        <label class="form-check-label" for="checkChecked">
                          Subscribe
                        </label>
                    </div>
                        <button type="submit" class="btn btn-success">Create an Account</button>
                </form>
            </div>
        </div>
    </div>    
@endsection