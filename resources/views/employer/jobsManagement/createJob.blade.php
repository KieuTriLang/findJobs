@extends('layouts/employer')
@section('additional-Style')
<link rel="stylesheet" href="{{ asset('css/createRJ.css') }}">
@endsection
@section('content')
<div class="container-fluid mt-3">
    <form action="{{ route('job.store') }}" method="post">
        @csrf
        <div class="d-flex row col-11 mx-auto align-items-center shadow bg-dark text-light mt-4 p-0">
            <div class="col-3 p-0">
                <img src="https://jobsgo.vn/uploads/avatar/202104/1170038_20210402133110.jpg" alt="" class="w-100 h-100"
                    id="output" onclick="document.getElementById('avatar').click()">
                <input onchange="preview(event)" type="file" name="hire_logo" id="avatar"
                    style="color:transparent;display:none;">
            </div>

            <div class="col-9 d-flex flex-column">
                <input type="text" name="hire_poistion" id="hire_position" class="col-12 text-light border-0 h5 pt-2"
                    style="background-color:transparent;" placeholder="Vị trí tuyển dụng">
                <input type="text" name="company_name" id="company_name" class="col-12 text-light border-0 h5 pt-2"
                    style="background-color:transparent;" placeholder="Tên công ty/ chi nhánh cần tuyển dụng">

            </div>
            <div class="col-12 bg-white text-dark pt-1">
                <div class="col-12 p-0">
                    <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>MÔ TẢ
                        CÔNG VIỆC</label>
                    <hr class=" bg-dark">
                    <textarea name="description" id="description" class="col-12 border-0"
                        placeholder="Mô tả chi tiết công việc..."></textarea>
                </div>
                <div class="d-flex row justify-content-around">
                    <div class="col-12 col-md-6">
                        <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i
                                class="fas fa-edit mr-2"></i>Yêu cầu kỹ năng</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="hardskills" id="hardSkill" class="col-12 border-0"></textarea>
                        <div class="col-12 p-0 border text-center " data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-plus"></i>
                            <ul class="list-unstyled dropdown-menu dropdown-menu-right col-12 skillList">
                                @foreach ($hardskills as $hardskill)
                                <li class="dropdown-item" onclick='skill(this,"hardSkill")'>
                                    {{ $hardskill->hardskill_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i
                                class="fas fa-edit mr-2"></i>Yều cầu kĩ năng mềm</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="softskills" id="softSkill" class="col-12 border-0"></textarea>
                        <div class="col-12 p-0 border text-center " data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-plus"></i>
                            <ul class="list-unstyled dropdown-menu dropdown-menu-right col-12 skillList">
                                @foreach ($softskills as $softskill)
                                <li class="dropdown-item" onclick='skill(this,"softSkill")'>
                                    {{ $softskill->softskill_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i
                                class="fas fa-edit mr-2"></i>Yều cầu khác</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name=""
                            id="" class="col-12 border-0"
                            placeholder="Nếu công ty bạn cần thêm yêu cầu khác hãy điền vào đây ..."></textarea>

                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end bg-light p-5">
                <button class="btn btn-success col-2"><i class="far fa-save mr-2"></i>Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('additional-Scripts')
<script src="{{ asset("js/createRJ.js") }}"></script>

@endsection
