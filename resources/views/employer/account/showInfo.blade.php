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
    <div class="col-10 mx-auto shadow d-flex row flex-column flex-md-row">
        <div class="d-flex flex-row flex-md-column col-12 col-md-4 border-right">
            <div class="d-flex flex-column text-center border-bottom">
                <img src="{{ asset("company_logo/$info->company_logo") }}" alt="" class="mx-auto mt-3" id="avatar">
                <p class="h4 font-weight-bolder mt-3">{{ $info->company_name }}</p>
            </div>
            <div class="d-flex flex-column col-md-12 col-sm-6 mt-2 p-0">
                <div class="d-flex  justify-content-between mt-2">
                    <a href="{{ route('resume.index') }}" class="text-dark ml-2">Công việc đã tạo</a>
                    <span class="mr-2">{{ $countPJob }}</span>
                </div>
                <div class="d-flex  justify-content-between mt-2">
                    <a href="#" class="text-dark ml-2">Công việc đã ứng tuyển</a>
                    <span class="mr-2">0</span>
                </div>
                <div class="d-flex  justify-content-between mt-2">
                    <a href="#" class="text-dark ml-2">Công việc đã lưu</a>
                    <span class="mr-2">0</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="d-flex justify-content-end mt-2">
                <a href="{{ route('employer.profile.edit') }}">Chỉnh sửa thông tin</a>
            </div>
            <div class="d-flex flex-column mt-3">
                <p class="h4 font-weight-bold text-primary mt-5 mb-3">Thông tin nhà tuyển dụng</p>
                <p><span class="font-weight-bold">Tên công ty:</span> {{ $info->company_name }}</p>
                <p><span class="font-weight-bold">Quy mô công ty:</span> {{ $info->company_size }} thành viên</p>
                <p><span class="font-weight-bold">Tax:</span> {{ $info->tax }}</p>
                <p><span class="font-weight-bold">Website:</span> {{ $info->website }}</p>
                <p><span class="font-weight-bold">Giới thiệu công ty:</span><br> {!! nl2br($info->company_summary) !!}</p>
                <p><span class="font-weight-bold">Địa chỉ công ty:</span> {{ $info->company_address }}</p>
                <p><span class="font-weight-bold">Thành Phố:</span> {{ $info->location }}</p>
                <p class="h4 font-weight-bold text-primary mt-5 mb-3">Thông tin người liên hệ</p>
                <p><span class="font-weight-bold">Tên người liên hệ:</span> {{ $info->contact_name }}</p>
                <p><span class="font-weight-bold">Vị trí:</span> {{ $info->position }}</p>
                <p><span class="font-weight-bold">Số điện thoại:</span> {{ $info->company_phone }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
