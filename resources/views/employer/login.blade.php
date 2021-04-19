@extends('layouts.employer')
<head>
    <title>FindJobs - Employer - Đăng nhập</title>
</head>
@section('content')
<div class="container-fluid row pb-5">
    <div class="col-11 col-md-5 offset-1  mt-5">
        <p class="h4 font-weight-bold text-primary">Sign up to enjoy all the features</p>
        <div class="pt-1 bg-primary mb-3 col-md-12 col-9"></div>
        <p class="h6 mb-4 font-weight-bold">Enjoy FindJobs, you can:</p>
        <ul>
            <li>Quickly and easily advertise your job ads</li>
            <li>Search resume with power search tool</li>
            <li>Get qualified resumes instantly</li>
            <li>Get new resume automatically by Resume Alert tool</li>
        </ul>
        <p class="h6 my-4 font-weight-bold">Start with us today!</p>
        @if (Route::has('employer.register'))
            <a class="btn btn-outline-success" href="{{ route("employer.register") }}">Sign Up</a>
        @endif
    </div>
    <div class="col-11 col-md-6 offset-1 offset-md-0 mt-5">
        <p class="h4 font-weight-bold text-danger">Sign In</p>
        <div class="pt-1 bg-danger mb-3 w-75"></div>
        <p class="h6 mt-3">Already have FindJobs account? Please sign in here:</p>
        <form method="POST" action="{{ route('employer.login') }}">
            @csrf
            <input type="hidden" name="user_type" value="2">
            <div class="form-group row mt-3">
                <label for="password" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Sign In') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
