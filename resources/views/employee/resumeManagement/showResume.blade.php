@extends('layouts/employee')
@section('content')
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-center bg-warning">
        <p class="h6 m-2 font-weight-bold" >Resume Management (1)</p>
        <a href="{{ route('createResume') }}" class="text-dark font-weight-bold mr-2 mr-md-4"><i class="fas fa-plus-square mr-2"></i>Create <span
                class="d-none d-sm-inline">Resume</span></a>
    </div>
    <div class="d-flex mt-4 row justify-content-around">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-10 col-md-5 border shadow d-flex align-items-center mb-3">
            <div class="col-2 my-3 p-0">
                <img src="https://jobsgo.vn/cv_template/assets/images/theme/default.png" alt="" width="100%" height="100%" class="rounded">
            </div>
            <div class="col-7">
                <p class="h6 font-weight-bold">Default CV</p>
                <p class="h6">Basics CV </p>
                <a href="#" class="text-decoration-none text-dark"><i class="fas fa-edit mr-2"></i>Edit Resume</a>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
