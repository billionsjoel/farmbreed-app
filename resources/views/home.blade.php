@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between">
        <div class="user-details">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <div class="me-4">Welcome <a href="{{ url('/home') }}"
                                class="text-decoration-none">{{ auth()->user()->name }}</a></div>
                        <div class="me-4"><a href="{{ url('') }}"
                                class="text-decoration-none">{{ auth()->user()->email }}</a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn bg-primary-color text-white bg-hover btn-sm login-btn">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn register-btn btn-sm">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="logout">
            <a href="{{ url('logout') }}">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/') }}">Back Home</a>
    </div>
@endsection
