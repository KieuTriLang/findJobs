@extends('layouts/employee')
@section('additional-Style')
<link rel="stylesheet" href="{{ asset('css/createRJ.css') }}">
@endsection
@section('content')
<div class="container-fluid mt-3">
    <form action="{{ route('resume.update',"$resume->id") }}" method="post">
        @method('PUT')
        @csrf
        <div class="d-flex justify-content-between align-items-center bg-primary">
            <input type="text" name="cv_name" id="titleResume" class="col-3 text-light border-0 h3 pt-2"
                style="background-color:transparent;" value="{{ $resume->cv_name }}">
            <button class="text-light font-weight-bold mr-2 mr-md-4 border-0" style="background-color:transparent;"
                type="submit"><i class="far fa-save mr-2"></i>Save</button>
        </div>
        <div class="d-flex row col-11 mx-auto align-items-center shadow bg-dark text-light mt-4 p-0">

            <div class="col-3 p-0">
                <img src="https://jobsgo.vn/uploads/avatar/202104/1170038_20210402133110.jpg" alt="" class="w-100 h-100"
                    id="output" onclick="document.getElementById('avatar').click()">
                <input onchange="preview(event)" type="file" name="avatar" id="avatar"
                    style="color:transparent;display:none;">
            </div>

            <div class="col-6 d-flex flex-column">
                <input type="text" name="name" id="name" class="col-12 text-light border-0 h3 pt-2"
                    style="background-color:transparent;" placeholder="Họ và tên" value="{{ $resume->name }}">
                <input type="text" name="career_name" id="" class="col-12 text-light border-0 h5 pt-2"
                    style="background-color:transparent;" placeholder="vị trí mong muốn" value="{{ $resume->career_name }}">
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="far fa-envelope mr-2"></i></label>
                    <input type="text" name="email" id="" class="col-12 text-light border-0"
                        style="background-color:transparent;" placeholder="Email" value="{{ $resume->email }}">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-phone mr-2"></i></label>
                    <input type="text" name="phone_num" id="" class="col-12 text-light border-0"
                        style="background-color:transparent;" placeholder="Số điện thoại" value="{{ $resume->phone_num }}">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-birthday-cake mr-2"></i></label>
                    <input type="date" name="birthday" id="birthday" class="col-12 text-light border-0"
                        style="background-color:transparent;" placeholder="dd/mm/yyyy" value="{{ $resume->birthday }}">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-map-marker-alt mr-2"></i></label>
                    <input type="text" name="address" id="" class="col-12 text-light border-0"
                        style="background-color:transparent;" placeholder="Tỉnh/Thành Phố" value="{{ $resume->address }}">
                </div>
            </div>

            <div class="col-12 col-md-3 d-flex flex-md-column flex-row justify-content-around my-3 my-md-0">
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-linkedin-in mr-2 h4"></i></label>
                    <input type="text" name="linkedIn" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="linkedin.com/in/username" value="{{ $resume->linkedIn }}">
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-facebook-f mr-2 h4"></i></label>
                    <input type="text" name="facebook" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="facebook.com/username" value="{{ $resume->facebook }}">
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-skype mr-2 h4"></i></label>
                    <input type="text" name="skype" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="live:skype_username" value="{{ $resume->skype }}">
                </div>
            </div>
            <div class="col-12 bg-white text-dark pt-1">
                <div class="col-12 p-0">
                    <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-user mr-2"></i>MỤC
                        TIÊU NGHỀ NGHIỆP</label>
                    <hr class=" bg-dark">
                    <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="career_target" id="" class="col-12 border-0"
                        placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu...">{{ $resume->career_target }}</textarea>
                </div>
                <div class="d-flex row justify-content-around">
                    <div class="d-flex flex-column col-12 col-md-8">
                        <div class="mt-5">
                            <label for="work_experience" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-briefcase mr-2"></i>KINH NGHIỆM LÀM VIỆC</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="work_exp" id="" class="col-12 border-0"
                                placeholder="Ghi rõ vị trí, thời gian,nơi công tác, ... ">{{ $resume->work_exp }}</textarea>
                        </div>
                        <div class="mt-5">
                            <label for="education" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-graduation-cap mr-2"></i>HỌC VẤN</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="education" id="" class="col-12 border-0"
                                placeholder="Ghi rõ các cấp bậc học đã hoàn thành ...">{{ $resume->education }}</textarea>
                        </div>
                        <div class="mt-5">
                            <label for="activity" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-hiking mr-2"></i>HOẠT ĐỘNG</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="activities" id="" class="col-12 border-0"
                                placeholder="Ghi rõ các hoạt động,sự kiện đã tham gia ...">{{ $resume->activities }}</textarea>
                        </div>
                        <div class="mt-5">
                            <label for="award" class="h4 font-weight-bolder m-0"><i class="fas fa-crown mr-2"></i>GIẢI
                                THƯỞNG</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="awards" id="" class="col-12 border-0"
                                placeholder="Giới thiệu một số thành tựu, giải thưởng đã đạt được ...">{{ $resume->awards }}</textarea>
                        </div>
                        <div class="mt-5 mb-5">
                            <label for="references" class="h4 font-weight-bolder m-0"><i
                                    class="far fa-user-circle mr-2"></i>NGƯỜI THAM CHIẾU</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="reference" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát về người tham chiếu ...">{{ $resume->reference }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-column col-12 col-md-3">
                        <div class="mt-5">
                            <label for="hardskill" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-tools mr-2"></i></i>KỸ
                                NĂNG</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="hardskills" id="hardSkill" class="col-12 border-0">{{ $resume->hardskills }}</textarea>
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


                        <div class="mt-5">
                            <label for="softskills" class="h4 font-weight-bolder m-0"><i
                                    class="fab fa-battle-net mr-2"></i>KỸ NĂNG MỀM</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="softskills" id="softSkill" class="col-12 border-0">{{ $resume->softskills }}</textarea>
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


                        <div class="mt-5">
                            <label for="certificate" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-award mr-2"></i></i>CHỨNG CHỈ</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' type="text" name="certificate" id="certificate" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>


                        <div class="mt-5">
                            <label for="language" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-language mr-2"></i></i>NGÔN NGỮ</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="language" id="language" class="col-12 border-0">{{ $resume->language }}</textarea>
                            <div class="col-12 p-0 border text-center " data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-plus"></i>
                                <ul class="list-unstyled dropdown-menu dropdown-menu-right col-12 skillList">
                                    @foreach ($languages as $language)
                                    <li class="dropdown-item" onclick='skill(this,"language")'>
                                        {{ $language->language_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5 mb-5">
                            <label for="hobby" class="h4 font-weight-bolder m-0"><i class="fas fa-gamepad mr-2"></i>SỞ
                                THÍCH</label>
                            <hr class="bg-dark">
                            <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="hobby" id="hobby" class="col-12 border-0">{{ $resume->hobby }}</textarea>
                            <div class="col-12 p-0 border text-center " data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-plus"></i>
                                <ul class="list-unstyled dropdown-menu dropdown-menu-right col-12 skillList">
                                    @foreach ($hobbies as $hobby)
                                    <li class="dropdown-item" onclick='skill(this,"hobby")'>
                                        {{ $hobby->hobby_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('additional-Script')
<script src="{{ asset("js/createRJ.js") }}"></script>
@endsection
