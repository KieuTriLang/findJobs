@extends('layouts/employer')
@section('additional-Style')
<style>
    #avatar {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="container-fluid mt-4">
    @if (session('message'))
    <div class="col-10 mx-auto alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class=" col-10 mx-auto alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="d-flex justify-content-start">
        <a href="{{ route('employer.profile') }}">
            << Quay lại</a> </div> <form action="{{ route('employer.profile.update') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="col-10 mx-auto shadow d-flex row flex-column flex-md-row">
                    <div class="d-flex flex-row flex-md-column col-12 col-md-4">
                        <div class="d-flex flex-column text-center">
                            <img src="{{ asset("company_logo/$info->company_logo") }}" alt="" class="mx-auto mt-3"
                                id="avatar">
                            <span class="btn btn-outline-success mt-2 col-8 offset-2"
                                onclick="document.getElementById('company_logo').click()">
                                Tải ảnh lên
                                <input onchange="preview(event)" type="file" name="company_logo" id="company_logo"
                                    style="color:transparent;display:none;">
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="d-flex flex-column mt-3">
                            <p class="h4 font-weight-bold text-primary mb-3">Thông tin nhà tuyển dụng</p>

                            <p class="mt-3"><span class="font-weight-bold">Tên công ty:</span></p>
                            <input type="text" name="company_name" id="" class="form-control" value="{{ $info->company_name }}">

                            <p class="mt-3"><span class="font-weight-bold">Quy mô công ty:</span></p>
                            <select name="company_size" id="company-size" class="form-control">
                                @foreach ($companySizes as $companySize)
                                    <option value="{{ $companySize->id }}" {{ ($info->company_size==$companySize->id)?'selected':'' }}>{{ $companySize->size }}</option>
                                @endforeach
                            </select>

                            <p class="mt-3"><span class="font-weight-bold">Tax:</span></p>
                            <input type="text" name="tax" id="" class="form-control" value="{{ $info->tax }}">

                            <p class="mt-3"><span class="font-weight-bold">Website:</span></p>
                            <input type="text" name="website" id="" class="form-control" value="{{ $info->website }}">

                            <p class="mt-3"><span class="font-weight-bold">Giới thiệu công ty:</span></p>
                            <textarea name="company_summary" id="" class="form-control"
                                oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$info->company_summary}}</textarea>

                            <p class="mt-3"><span class="font-weight-bold">Địa chỉ công ty:</span></p>
                            <input type="text" name="company_address" id="" class="form-control" value="{{ $info->company_address }}">
                            <p class="mt-3"><span class="font-weight-bold">Thành phố:</span></p>
                            <select name="location" id="" class="form-control">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->city_code }}" {{ ($info->location==$city->city_code)?'selected':'' }}>{{ $city->city_name }}</option>
                                @endforeach
                            </select>

                            <p class="h4 font-weight-bold text-primary mt-5 mb-3">Thông tin người liên hệ</p>
                            <p class="mt-3"><span class="font-weight-bold">Tên người liên hệ:</span></p>
                            <input type="text" name="contact_name" id="" class="form-control" value="{{ $info->contact_name }}">
                            <p class="mt-3"><span class="font-weight-bold">Vị trí:</span></p>
                            <input type="text" name="position" id="" class="form-control" value="{{ $info->position }}">
                            <p class="mt-3"><span class="font-weight-bold">Số điện thoại:</span></p>
                            <input type="text" name="company_phone" id="" class="form-control" value="{{ $info->company_phone }}">
                        </div>
                        <div class="d-flex justify-content-end mt-2 mb-3">
                            <a href="{{ route('employer.profile') }}" class="btn btn-outline-danger mr-3">Hủy</a>
                            <button type="submit" class="btn btn-outline-primary">Lưu thông tin</button>
                        </div>
                    </div>
                </div>
                </form>
    </div>
    @endsection
    @section('additional-Script')
    <script type="text/javascript">
        var preview = function(event) {
        var output = document.getElementById('avatar');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>
    @endsection
