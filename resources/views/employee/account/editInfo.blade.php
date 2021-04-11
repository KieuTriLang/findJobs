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
    <form action="{{ route('employee.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-10 mx-auto shadow d-flex row flex-column flex-md-row">
            <div class="d-flex flex-row flex-md-column col-12 col-md-4">
                <div class="d-flex flex-column text-center">
                    <img src="{{ ($info->avatar_profile!=null) ? asset("avatar_profile/ee$info->avatar_profile"):asset('avatar_profile/profile-avatar.jpg') }}" alt="" class="mx-auto mt-3" id="avatar">
                    <span class="btn btn-outline-success mt-2 col-8 offset-2"
                        onclick="document.getElementById('avatar_profile').click()">
                        Tải ảnh lên
                        <input onchange="preview(event)" type="file" name="avatar_profile" id="avatar_profile"
                            style="color:transparent;display:none;">
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="d-flex flex-column mt-3">
                    <p class="mt-3"><span class="font-weight-bold">Họ tên:</span></p>
                    <input type="text" name="name" id="" class="form-control" value="{{ $info->name }}">
                    <p class="mt-3"><span class="font-weight-bold">Ngày sinh:</span></p>
                    <input type="date" name="birthday" id="" class="form-control" value="{{ $info->birthday }}">
                    <p class="mt-3"><span class="font-weight-bold">Vị trí/Chức vụ:</span></p>
                    <input type="text" name="position" id="" class="form-control" value="{{ $info->position }}">
                    <p class="mt-3"><span class="font-weight-bold">Giới thiệu bản thân:</span></p>
                    <textarea name="intro_self" id="" class="form-control" value="{!! nl2br($info->intro_self) !!}"
                        oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
                    <p class="h4 font-weight-bold text-primary mt-5 mb-3">Thông tin cơ bản</p>
                    <p class="mt-3"><span class="font-weight-bold">Số điện thoại:</span></p>
                    <input type="text" name="phone_num" id="" class="form-control" value="{{ $info->phone_num }}">
                    <p class="mt-3"><span class="font-weight-bold">Chỗ ở hiện tại:</span></p>
                    <input type="text" name="current_address" id="" class="form-control" value="{{ $info->current_address }}">
                    <p class="mt-3"><span class="font-weight-bold">Mức lương hiện tại:</span></p>
                    <input type="text" name="current_salary" id="" class="form-control" value="{{ $info->current_salary }}">
                    <p class="mt-3"><span class="font-weight-bold">Mức lương mong muốn:</span></p>
                    <input type="text" name="desired_salary" id="" class="form-control" value="{{ $info->desired_salary }}">
                    <p class="mt-3"><span class="font-weight-bold">Tình trạng tìm việc:</span></p>
                    <input type="text" name="status_findJob" id="" class="form-control" value="{{ $info->status_findJob }}">
                </div>
                <div class="d-flex justify-content-end mt-2 mb-3">
                    <a href="{{ route('employee.profile') }}" class="btn btn-outline-danger mr-3">Hủy</a>
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
