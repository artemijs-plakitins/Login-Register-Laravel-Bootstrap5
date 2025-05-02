@extends('layout')

@section('title', 'Success')
@section('content')
    <div class = "container">
        <div class="card rounded-0 mt-3 shadow" style="width: 500px; margin: 0 auto;">
            <div class="card-body">
                <form class="ms-auto me-auto mt-3" style="width: 400px">
                    <div class="mb-3">
                        <p class="text-uppercase fs-2">Success!</p>
                        {{ auth()->user()->name }}
                    </div>
                    <p><a class="btn btn-success" href="{{ route('logout') }}">Log Out</a></p>
                </form>
            </div>
        </div>
    </div>    
@endsection