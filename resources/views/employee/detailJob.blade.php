@extends('layouts/employee')
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
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: #fff;
        width: 80%;
        max-width: 500px;
        max-height: 430px;
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

    .list-resume {
        max-height: 350px;
        overflow-y: auto;
    }

    .cv:hover {
        cursor: pointer;

    }
    .line-height{
        line-height: 28px;
    }
</style>
@endsection
@section('content')
<div class="col-11 mx-auto mt-4 p-0 rounded">
    <div class="bg-dark text-white d-flex flex-column align-items-center">
        <img src="{{ asset("company_logo/$employers->company_logo") }}" alt="" class="rounded mt-3" width="100px"
            height="100px" />
        <p class="h6 font-weight-bold mt-3">Chào mừng bạn đến với</p>
        <p class="h5 font-weight-bold mt-1">{{ $employers->company_name }}</p>
    </div>
    <div class="d-flex row">
        <div class="col-12 col-md-8 p-0">
            <div class="pt-4 ml-4">
                <p class="h3 font-weight-bolder">Chuyên Viên Quan Hệ Khách Hàng ( Thu Nhập Cố Định 15 TR + Thưởng Lên
                    Tới 30
                    TR)</p>
                <p class="h6"><i class="fas fa-dollar-sign mr-2"></i>Mức lương 15 - 25 triệu VNĐ</p>
                @if (Session::has('success') || count($applied) > 0)
                <button class="btn btn-outline-danger" onclick="event.preventDefault();
                document.getElementById('unapplyJob').submit();">
                    <i class="fas fa-times mr-2"></i>
                    Hủy ứng tuyển</button>
                <form id="unapplyJob" action="{{ route('employee.unApply',["$jobs->id","$user_id"]) }}"
                    method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
                @else
                <button onclick="togglePopup()" class="btn btn-outline-primary"><i
                        class="fas fa-paper-plane mr-2"></i>Ứng tuyển ngay</button>
                @endif
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
        <div class="col-12 col-md-4 border-left">
            <div class="h5 font-weight-bold pt-4">{{ $employers->company_name }}</div>
            <div class="h6"><i class="fas fa-map-marker-alt mr-2"></i>{{ $employers->company_address }}</div>
            <div class="h6"><i class="fas fa-globe-americas mr-2"></i>{{ $employers->website }}</div>
            <div class="h6"><i class="fas fa-users mr-2"></i>{{ $employers->company_size }} nhân viên</div>
            <div class="h6 line-height">{{ $employers->company_summary}}.</div>
        </div>
        <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <h3>Chọn CV</h3>
                <div class="d-flex flex-column mt-2 col-11 mx-auto list-resume">
                    @if (count($resumes)==0)
                    <p class="h5 font-weight-bold">Bạn chưa có CV</p>
                    <a href="{{ route('resume.create') }}">Tạo ngay >></a>
                    @else
                    @foreach ($resumes as $resume)
                    <div class="d-flex rounded shadow align-items-center mt-3 cv" onclick="event.preventDefault();
                    document.getElementById('applyJob{{ $resume->id }}').submit();">
                        <img src="{{ asset("avatar_resume/thumbnail$resume->avatar_resume") }}" alt="">
                        <p class="h5 font-weight-bold ml-3">{{ $resume->cv_name }}</p>
                    </div>
                    <form id="applyJob{{ $resume->id }}"
                        action="{{ route('employee.applyJob',["$jobs->id","$resume->id"]) }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-Script')
<script src="{{ asset('js/detailJ.js') }}"></script>
@endsection
