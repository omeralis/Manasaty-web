@extends('layouts.app')

@section('content')
<style>
    .card{
        margin:5rem auto;
        width: 30rem;
    }
    .card-body {
        padding: 2rem;
    }
    .btn-modal {
        width: 100%;
    }
    .card-header.text-center {
        font-weight: bold;
        font-size: 1.5rem;
        color: #bb8f2c;
    }
    @media (max-width: 991px) {
        .card {
            width: auto;
        }
    }
</style>
<div class="card">
        <div class="card-header text-center">
            {{ __('Login') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <!-- <label for="email"
                        class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label> -->

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- <label for="password"
                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                    <div class="col-md-12">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
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
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-modal">
                            {{ __('Login') }}
                        </button>
                        <!--
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif -->
                    </div>
                </div>
            </form>
        </div>
</div>
       
@endsection
