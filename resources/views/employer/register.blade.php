@extends('layouts.employer')
<head>
    <title>FindJobs - Employer - Đăng ký</title>
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
                            <option value="">--Select--</option>
                            <option value="Less Than 10" selected="selected"></option>
                            <option value="10 - 24">10 - 24</option>
                            <option value="25 - 99">25 - 99</option>
                            <option value="100 - 499">100 - 499</option>
                            <option value="500 - 999">500 - 999</option>
                            <option value="1000 -4999">1000 -4999</option>
                            <option value="5000 - 9999">5000 - 9999</option>
                            <option value="10000 - 19999">10000 - 19999</option>
                            <option value="20000 - 49999">20000 - 49999</option>
                            <option value="More than 50000">More than 50000</option>
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
                            <option value="VN-44">An Giang</option>
                            <option value="VN-43">Bà Rịa–Vũng Tàu</option>
                            <option value="VN-54">Bắc Giang</option>
                            <option value="VN-53">Bắc Kạn</option>
                            <option value="VN-55">Bạc Liêu</option>
                            <option value="VN-56">Bắc Ninh</option>
                            <option value="VN-50">Bến Tre</option>
                            <option value="VN-31">Bình Định</option>
                            <option value="VN-57">Bình Dương</option>
                            <option value="VN-58">Bình Phước</option>
                            <option value="VN-40">Bình Thuận</option>
                            <option value="VN-59">Cà Mau</option>
                            <option value="VN-CT">Cần Thơ</option>
                            <option value="VN-04">Cao Bằng</option>
                            <option value="VN-DN">Đà Nẵng</option>
                            <option value="VN-33">Đắk Lắk</option>
                            <option value="VN-72">Đắk Nông</option>
                            <option value="VN-71">Điện Biên</option>
                            <option value="VN-39">Đồng Nai</option>
                            <option value="VN-45">Đồng Tháp</option>
                            <option value="VN-30">Gia Lai</option>
                            <option value="VN-03">Hà Giang</option>
                            <option value="VN-63">Hà Nam</option>
                            <option value="VN-HN">Hà Nội</option>
                            <option value="VN-23">Hà Tĩnh</option>
                            <option value="VN-61">Hải Dương</option>
                            <option value="VN-HP">Hải Phòng</option>
                            <option value="VN-73">Hậu Giang</option>
                            <option value="VN-SG" selected="selected">Hồ Chí Minh</option>
                            <option value="VN-14">Hòa Bình</option>
                            <option value="VN-66">Hưng Yên</option>
                            <option value="VN-34">Khánh Hòa</option>
                            <option value="VN-47">Kiên Giang</option>
                            <option value="VN-28">Kon Tum</option>
                            <option value="VN-01">Lai Châu</option>
                            <option value="VN-35">Lâm Đồng</option>
                            <option value="VN-09">Lạng Sơn</option>
                            <option value="VN-02">Lào Cai</option>
                            <option value="VN-41">Long An</option>
                            <option value="VN-67">Nam Định</option>
                            <option value="VN-22">Nghệ An</option>
                            <option value="VN-18">Ninh Bình</option>
                            <option value="VN-36">Ninh Thuận</option>
                            <option value="VN-68">Phú Thọ</option>
                            <option value="VN-32">Phú Yên</option>
                            <option value="VN-24">Quảng Bình</option>
                            <option value="VN-27">Quảng Nam</option>
                            <option value="VN-29">Quảng Ngãi</option>
                            <option value="VN-13">Quảng Ninh</option>
                            <option value="VN-25">Quảng Trị</option>
                            <option value="VN-52">Sóc Trăng</option>
                            <option value="VN-05">Sơn La</option>
                            <option value="VN-37">Tây Ninh</option>
                            <option value="VN-20">Thái Bình</option>
                            <option value="VN-69">Thái Nguyên</option>
                            <option value="VN-21">Thanh Hóa</option>
                            <option value="VN-26">Thừa Thiên–Huế</option>
                            <option value="VN-46">Tiền Giang</option>
                            <option value="VN-51">Trà Vinh</option>
                            <option value="VN-07">Tuyên Quang</option>
                            <option value="VN-49">Vĩnh Long</option>
                            <option value="VN-70">Vĩnh Phúc</option>
                            <option value="VN-06">Yên Bái</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="country_id" id="country_id" class="form-control" data-bv-field="country_id">
                            <option value="">-- Country ---</option>
                            <option value="13">America</option>
                            <option value="18">Angola</option>
                            <option value="3">Australia</option>
                            <option value="22">Bangladesh</option>
                            <option value="14">Cambodia</option>
                            <option value="4">Canada</option>
                            <option value="5">China</option>
                            <option value="6">France</option>
                            <option value="7">Germany</option>
                            <option value="25">Hong Kong</option>
                            <option value="2">Japan</option>
                            <option value="8">Korea (South)</option>
                            <option value="19">Lao</option>
                            <option value="9">Malaysia</option>
                            <option value="21">Myanmar</option>
                            <option value="23">Oversea</option>
                            <option value="15">Philippines</option>
                            <option value="17">Quatar</option>
                            <option value="24">Republic of Congo</option>
                            <option value="10">Singapore</option>
                            <option value="20">Taiwan</option>
                            <option value="11">Thailand</option>
                            <option value="16">Ukraine</option>
                            <option value="12">United Kingdom</option>
                            <option value="1" selected="selected">Vietnam</option>
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
