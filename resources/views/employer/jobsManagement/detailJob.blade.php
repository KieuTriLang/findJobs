@extends('layouts/employer')
@section('additional-Style')
{{-- <link rel="stylesheet" href="{{ asset('css/detailJ.css') }}"> --}}
<style>
    .popup .overlay {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
        display: none;
    }

    .popup .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: #fff;
        width: 80%;
        max-width: 900px;
        min-height: 900px;
        z-index: 2;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
    }

    .popup .close-btn {
        cursor: pointer;
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        background: #222;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
    }

    .popup.active .overlay {
        display: block;
    }

    .popup.active .content {
        transition: all 300ms ease-in-out;
        transform: translate(-50%, -50%) scale(1);
    }

    .cv:hover {
        cursor: pointer;

    }

    .list-resume {
        max-height: 350px;
        overflow-y: auto;
    }

    .line-height {
        line-height: 28px;
    }
</style>
@endsection
@section('content')
<div class="col-11 mx-auto mt-4 p-0 rounded">
    <div class="bg-dark text-white d-flex flex-column align-items-center">
        <img src="{{ asset("company_logo/$jobs->company_logo") }}" alt="" class="rounded mt-3" width="100px"
            height="100px" />
        <p class="h6 font-weight-bold mt-3">Chào mừng bạn đến với</p>
        <p class="h5 font-weight-bold mt-1">{{ $jobs->company_name }}</p>
    </div>
    <div class="d-flex row">
        <div class="col-12 col-md-8 p-0">
            <div class="pt-4 ml-4">
                <p class="h3 font-weight-bolder">{{ $jobs->hire_position }}</p>
                <p class="h6"><i class="fas fa-dollar-sign mr-2"></i>{{ $jobs->salary }}</p>
                <p class="h6 font-weight-bolder mt-4">Mô tả công việc</p>
                <p class="h6 line-height">{!! nl2br($jobs->description) !!}</p>
                <p class="h6 font-weight-bolder mt-4">Yêu cầu công việc</p>
                <p class="h6 line-height">{!! nl2br($jobs->hardskills) !!}</p>
                <p class="h6 line-height">{!! nl2br($jobs->softskills) !!}</p>
                <p class="h6 font-weight-bolder mt-4">Quyền lợi</p>
                <p class="h6 line-height">{!! nl2br($jobs->benefit) !!}</p>
                <p class="h6 font-weight-bolder mt-4">Địa điểm làm việc</p>
                <p class="h6 line-height">{!! nl2br($jobs->location) !!}</p>

            </div>
        </div>
        <div class="col-12 col-md-4 border-left list-resume">
            <p class="h4 mt-4 font-weight-bold">{{ count($resumes) }} ứng viên đã gửi CV cho bạn</p>
            @foreach ($resumes as $resume)
            <div class="d-flex rounded shadow align-items-center mt-3 cv"
                onclick='togglePopup("popup-{{ $resume->id }}")'>
                <img src="{{ asset("avatar_resume/thumbnail$resume->avatar_resume") }}" alt="">
                <div class="d-flex flex-column ml-3">
                    <p class="h5 font-weight-bold">{{ $resume->cv_name }}</p>
                    <p class="h6">Gửi bởi {{ $resume->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
        @foreach ($resumes as $resume)
        <div class="popup" id="popup-{{ $resume->id }}">
            <div class="overlay" onclick="togglePopup('popup-{{ $resume->id }}')"></div>
            <div class="content mt-5">
                <div class="close-btn" onclick="togglePopup('popup-{{ $resume->id }}')">&times;</div>
                <h3>{{ $resume->cv_name }}</h3>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="d-flex">
                            <img src="{{ asset("avatar_resume/medium$resume->avatar_resume") }}" alt="" width="150px"
                            height="150px">
                            <div class="d-flex flex-column text-left">
                                <p class="h6 ml-2 mb-2">Họ tên: {{ $resume->name }}</p>
                                <p class="h6 ml-2 mb-2">Vị trí mong muốn: {{ $resume->career_name }}</p>
                                <p class="h6 ml-2 mb-2">Email: {{ $resume->email }}</p>
                                <p class="h6 ml-2 mb-2">Số điện thoại: {{ $resume->phone_num }}</p>
                                <p class="h6 ml-2 mb-2">Ngày sinh: {{ $resume->birthday }}</p>
                                <p class="h6 ml-2 mb-2">Địa chỉ: {{ $resume->address }}</p>
                            </div>
                        </div>
                        <div class="d-flex flex-md-column text-left mx-auto justify-content-around justify-content-md-start mt-4">
                            <p class="h6 ml-2 mb-2">LinkedIn: {{ $resume->linkedIn }}</p>
                            <p class="h6 ml-2 mb-2">Facebook: {{ $resume->facebook }}</p>
                            <p class="h6 ml-2 mb-2">Skype: {{ $resume->skype }}</p>
                        </div>
                    </div>
                    <p class="h5 font-weight-bold text-left mt-3">Mục tiêu nghề nghiệp</p>
                    <p class="h6 text-left">{!! nl2br($resume->career_target) !!}</p>
                    <p class="h5 font-weight-bold text-left">Kinh nghiệm làm việc</p>
                    <p class="h6 text-left">{!! nl2br($resume->work_exp) !!}</p>
                    <p class="h5 font-weight-bold text-left">Học vấn</p>
                    <p class="h6 text-left">{!! nl2br($resume->education) !!}</p>
                    <p class="h5 font-weight-bold text-left">Hoạt động</p>
                    <p class="h6 text-left">{!! nl2br($resume->activities) !!}</p>
                    <p class="h5 font-weight-bold text-left">Giải thưởng</p>
                    <p class="h6 text-left">{!! nl2br($resume->awards) !!}</p>
                    <p class="h5 font-weight-bold text-left">Người tham chiếu</p>
                    <p class="h6 text-left">{!! nl2br($resume->reference) !!}</p>
                    <p class="h5 font-weight-bold text-left">Kỹ năng</p>
                    <p class="h6 text-left">{!! nl2br($resume->hardskills) !!}</p>
                    <p class="h5 font-weight-bold text-left">Kỹ năng mềm</p>
                    <p class="h6 text-left">{!! nl2br($resume->softskills) !!}</p>
                    <p class="h5 font-weight-bold text-left">Chứng chỉ</p>
                    <p class="h6 text-left">{!! nl2br($resume->certificate) !!}</p>
                    <p class="h5 font-weight-bold text-left">Ngôn ngữ</p>
                    <p class="h6 text-left">{!! nl2br($resume->language) !!}</p>
                    <p class="h5 font-weight-bold text-left">Sở thích</p>
                    <p class="h6 text-left">{!! nl2br($resume->hobby) !!}</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-success mr-2">Chấp nhận</button>
                        <button class="btn btn-outline-danger mr-2">Loại</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
@section('additional-Scripts')
<script src="{{ asset('js/detailJ.js') }}"></script>
@endsection
