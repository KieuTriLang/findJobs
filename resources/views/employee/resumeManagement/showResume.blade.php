@extends('layouts/employee')
@section('content')
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-center bg-warning">
        <p class="h6 m-2 font-weight-bold">Resume Management ({{ $count }})</p>
        <a href="{{ route('resume.create') }}" class="text-dark font-weight-bold mr-2 mr-md-4"><i
                class="fas fa-plus-square mr-2"></i>Tạo <span class="d-none d-sm-inline">CV</span></a>
    </div>
    <div class="d-flex mt-4 row justify-content-around">
        @foreach ($resumes as $resume) <div class="col-10 col-md-5 border shadow d-flex align-items-center mb-3">
            <div class="col-2 my-3 p-0">
                <img src="https://jobsgo.vn/cv_template/assets/images/theme/default.png" alt="" width="100%"
                    height="100%" class="rounded">
            </div>
            <div class="col-7">
                <p class="h6 font-weight-bold">{{ $resume->cv_name }}</p>
                <a href="{{ route('resume.edit',"$resume->id") }}" class="text-decoration-none text-dark mr-3"><i
                        class="fas fa-edit mr-2"></i>Chỉnh sửa</a>
                <a href="{{ route('resume.destroy',"$resume->id") }}" class="text-decoration-none text-dark" onclick="event.preventDefault();
                                                    document.getElementById('delete-resume').submit();"><i
                        class="fas fa-trash mr-2"></i>Xóa CV</a>
                <form id="delete-resume" action="{{ route('resume.destroy',"$resume->id") }}" method="post" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
