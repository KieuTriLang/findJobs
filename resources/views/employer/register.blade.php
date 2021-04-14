@extends('layouts.employer')

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
                <a href="{{ route('employer.login') }}">Or already have Findjobs account? Please sign in here:</a>
            </div>
            <form method="POST" action="{{ route('employer.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_type" value="2">
                {{-- account-info  --}}
                <div class="d-flex justify-content-start mb-2">
                    <p class="h4 font-weight-bold text-primary">Account Infomation</p>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email"
                            placeholder="Company email is first priority of approval">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="email-confirm" type="email" class="form-control" name="email_confirmation"
                            autocomplete="new-email" placeholder="Confirm email">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password" placeholder="Confirm password">
                    </div>
                </div>
                {{-- company-info  --}}
                <div class="d-flex justify-content-start">
                    <p class="h4 font-weight-bold text-primary">Company Infomation</p>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="company-name">Company Name</label>
                        <input type="text" name="company_name" placeholder="Your company name" id="company-name"
                            class="form-control @error('company_name') is-invalid @enderror">
                        @error('company_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="company-size">Company Size</label>
                        <select name="company_size" id="company-size" class="form-control">
                            @foreach ($companySizes as $companySize)
                                <option value="{{ $companySize->id }}">{{ $companySize->size }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="tax">Tax</label>
                        <input type="text" name="tax" placeholder="Tax" id="tax" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="website">Website</label>
                        <input type="text" name="website" placeholder="Website Location" id="website"
                            class="form-control @error ('website') is-invalid @enderror">
                        @error('website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="company-summary">Company Summary</label>
                        <textarea name="company_summary" rows="5" placeholder="Company Summary" id="company-summary"
                            class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-white d-block">upload logo</label>
                        <div class="d-flex flex-column justify-content-center align-items-center ">
                            <img src="https://www.findjobs.vn/htdocs/themes/employers/images/logo.jpg" alt=""
                                id="output">
                            <span class="btn btn-outline-success mt-2"
                                onclick="document.getElementById('company-logo').click()">
                                Upload Logo
                                <input onchange="preview(event)" type="file" name="company_logo" id="company-logo"
                                    style="color:transparent;display:none;">
                            </span>
                        </div>
                    </div>
                </div>
                {{-- contact Infomation --}}
                <div class="d-flex justify-content-start">
                    <p class="h4 font-weight-bold text-primary">Contact Information</p>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="contact-name" type="text"
                            class="form-control @error ('contact_name') is-invalid @enderror" name="contact_name"
                            autocomplete="new-password" placeholder="Contact Name">
                        @error('contact_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="position" type="text" class="form-control @error ('position') is-invalid @enderror"
                            name="position" autocomplete="new-password" placeholder="Position">
                        @error('position')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="company-address" type="text"
                            class="form-control @error ('company_address') is-invalid @enderror" name="company_address"
                            autocomplete="new-password" placeholder="Company Address">
                        @error('company_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="company-phone" type="text"
                            class="form-control @error ('company_phone') is-invalid @enderror" name="company_phone"
                            autocomplete="new-password" placeholder="Phone">
                        @error('company_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <select name="location" id="location" class="form-control">
                            <option value="">--Distric,City--</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->city_code }}">{{ $city->city_name }}</option>
                            @endforeach
                        </select>
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
@section('additional-Scripts')
<script type="text/javascript">
    var preview = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.width="100px";
        output.style.height="100px";
        output.style.objectFit="cover";
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection
