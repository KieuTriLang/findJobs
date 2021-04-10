@extends('layouts/employer')
@section('additional-Style')
<link rel="stylesheet" href="{{ asset('css/createRJ.css') }}">
@endsection
@section('content')
<div class="container-fluid mt-3">
    <form action="{{ route('job.update',"$postJobs->id") }}" method="post">
        @csrf
        @method('PUT')
        <div class="d-flex row col-11 mx-auto align-items-center shadow bg-dark text-light mt-4 p-0">
            <div class="col-9 d-flex flex-column">
                <div class="col-12 mt-3">
                    <i class="h4 fas fa-user"></i>
                    <input type="text" name="hire_position" id="hire_position"
                        class="col-10 text-light border-0 h5 pt-2 @error ('hire_position') is-invalid @enderror"
                        style="background-color:transparent;" placeholder="Vị trí tuyển dụng" value="{{ $postJobs->hire_position }}">
                    @error('hire_position')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <i class="h4 fas fa-building"></i>
                    <input type="text" name="company_name" id="company_name"
                        class="col-10 text-light border-0 h5 pt-2 @error ('company_name') is-invalid @enderror"
                        style="background-color:transparent;" placeholder="Tên công ty/ chi nhánh cần tuyển dụng" value="{{ $postJobs->company_name }}">
                    @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <div class="col-12 bg-white text-dark pt-1">
                <div class="col-12 p-0">
                    <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>MÔ TẢ
                        CÔNG VIỆC</label>
                    <hr class=" bg-dark">
                    <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                        name="description" id="description"
                        class="col-12 border-0 @error ('description') is-invalid @enderror"
                        placeholder="Mô tả chi tiết công việc...">{{ $postJobs->description }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="d-flex row justify-content-around">
                    <div class="col-12 col-md-6">
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Yêu cầu kỹ
                            năng</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="hardskills" id="hardSkill" class="col-12 border-0">{{ $postJobs->hardskills }}</textarea>
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
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Yều cầu kĩ
                            năng mềm</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="softskills" id="softSkill" class="col-12 border-0">{{ $postJobs->softskills }}</textarea>
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
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Yều cầu
                            khác</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="another_des" id="" class="col-12 border-0"
                            placeholder="Nếu công ty bạn cần thêm yêu cầu khác hãy điền vào đây ...">{{ $postJobs->another_des }}</textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Mức
                            Lương</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="salary" id="salary" class="col-12 border-0 @error ('salary') is-invalid @enderror"
                            placeholder="Mức lương ...">{{ $postJobs->salary }}</textarea>
                        @error('salary')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Vị trí công
                            ty/chi nhánh</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="location" id="salary" class="col-12 border-0 @error ('location') is-invalid @enderror"
                            placeholder="Vị trí công ty/chi nhánh ...">{{ $postJobs->location }}</textarea>
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-edit mr-2"></i>Quyền lợi được hưởng</label>
                        <hr class=" bg-dark">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                            name="benefit" id="" class="col-12 border-0 @error ('benefit') is-invalid @enderror"
                            placeholder="Quyền lợi mà được hưởng khi ứng tuyển vào công ty ...">{{ $postJobs->benefit }}</textarea>
                    </div>
                    @error('benefit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
