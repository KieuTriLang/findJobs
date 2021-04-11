@extends('layouts/employee')
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
                <img src="{{ ($info->avatar_profile!=null) ? asset("avatar_profile/ee$info->avatar_profile"):asset('avatar_profile/profile-avatar.jpg') }}" alt="" class="mx-auto mt-3" id="avatar">
                <p class="h4 font-weight-bolder mt-3">{{ $info->name }}</p>
                <p class="h4">{{ $info->position }}</p>
            </div>
            <div class="d-flex flex-column mt-2 col-md-12 col-8 p-0">
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('resume.index') }}" class="text-dark ml-2">CV đã tạo</a>
                    <span class="mr-2">{{ $countCV }}</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="text-dark ml-2">Công việc đã ứng tuyển</a>
                    <span class="mr-2">3</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="text-dark ml-2">Công việc đã lưu</a>
                    <span class="mr-2">3</span>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="d-flex justify-content-end mt-2">
                <a href="{{ route('employee.profile.edit') }}">Chỉnh sửa thông tin</a>
            </div>
            <div class="d-flex flex-column mt-3">
                <p><span class="font-weight-bold">Họ tên:</span> {{ $info->name }}</p>
                <p><span class="font-weight-bold">Ngày sinh:</span> {{ $info->birthday }}</p>
                <p><span class="font-weight-bold">Vị trí/Chức vụ:</span> {{ $info->position }}</p>
                <p><span class="font-weight-bold">Giới thiệu bản thân:</span><br> {!! nl2br($info->intro_self) !!}</p>
                <p class="h4 font-weight-bold text-primary mt-5 mb-3">Thông tin cơ bản</p>
                <p><span class="font-weight-bold">Số điện thoại:</span> {{ $info->phone_num }}</p>
                <p><span class="font-weight-bold">Chỗ ở hiện tại:</span> {{ $info->current_address }}</p>
                <p><span class="font-weight-bold">Mức lương hiện tại:</span> {{ $info->current_salary }}</p>
                <p><span class="font-weight-bold">Mức lương mong muốn:</span> {{ $info->desired_salary }}</p>
                <p><span class="font-weight-bold">Tình trạng tìm việc:</span> {{ $info->status_findJob }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
