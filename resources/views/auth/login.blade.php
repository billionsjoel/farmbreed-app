<style>
    .login-section {
        margin-top: 9rem;
        font-family: 'Asap', sans-serif;
        font-weight: 200;
    }

    .form-bg {
        background-color: #f80 !important;
        color: white !important;
        border: 2px solid #f80;
    }

    .card {
        border: 2px solid #f80 !important;
    }

    .login_btn {
        background-color: #f80 !important;
        color: white !important;
        width: 100% !important;
    }

    .forgot {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #757575 !important;
        margin: 2rem 0 -2rem 0 !important;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container login-section pb-4">
        @include('../../layouts/components/nav')
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header black form-bg">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn login_btn">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                                <div class="col-md-12 forgot">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link primary-color" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('../../layouts/components/footer')
@endsection
