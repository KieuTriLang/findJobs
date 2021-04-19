@extends('layouts.employee')
<head>
    <title>FindJobs - Đăng ký</title>
</head>
@section('content')
<div class="container">
    <div class="row">
        @if (session('message'))
        <div class="col-12 alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="col-10 offset-1 col-md-8 offset-md-2 shadow mt-5">
            <div class="d-flex justify-content-center">
                <p class="h3 pt-4">Register a new account</p>
            </div>
            <div class="col-8 offset-2 pt-1 bg-warning mb-3"></div>
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ route('employee.login') }}">Or already have Findjobs account? Please sign in here:</a>
            </div>
            <form method="POST" action="{{ route('employee.register') }}">
                @csrf
                <input type="hidden" name="user_type" value="1">
                <div class="form-group row">
                    <label for="name" class="col-md-3 offset-md-2 col-form-label">{{ __('Your Name') }}</label>

                    <div class="col-md-5">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-3 offset-md-2 col-form-label">{{ __('E-Mail') }}</label>

                    <div class="col-md-5">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-3 offset-md-2 col-form-label">{{ __('Password') }}</label>

                    <div class="col-md-5">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-3 offset-md-2 col-form-label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-5">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-5 offset-md-5">
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="fas fa-paper-plane mr-2"></i>
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <div class="form-group text-center m-4">
                    <p class="text-secondary">By choosing to Register, I have read and agreed to FindJobs's Privacy
                        Policy and Terms of use</p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
