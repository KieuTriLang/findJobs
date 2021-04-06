@extends('layouts/employee')
@section('content')
<div class="container-fluid mt-3">
    <form action="" method="post">
        @csrf
        <div class="d-flex justify-content-between align-items-center bg-primary">
            <input type="text" name="titleResume" id="titleResume" class="col-3 text-light border-0 h3 pt-2"
                style="background-color:transparent;" value="Title CV">
            <button class="text-light font-weight-bold mr-2 mr-md-4 border-0" style="background-color:transparent;"
                type="submit"><i class="far fa-save mr-2"></i>Save</button>
        </div>
        <div class="d-flex row col-11 mx-auto align-items-center shadow bg-dark text-light mt-4 p-0">

            <div class="col-3 p-0 d-flex flex-column">
                <span class="" onclick="document.getElementById('avatar').click()">
                    <img src="https://jobsgo.vn/uploads/avatar/202104/1170038_20210402133110.jpg" alt="" width="100%"
                        height="100%" id="output">
                    <input onchange="preview(event)" type="file" name="avatar" id="avatar"
                        style="color:transparent;display:none;">
                </span>
            </div>

            <div class="col-6 d-flex flex-column">
                <input type="text" name="ee_name" id="name" class="col-8 text-light border-0 h3 pt-2"
                    style="background-color:transparent;" placeholder="Họ và tên">
                <input type="text" name="" id="" class="col-8 text-light border-0 h5 pt-2"
                    style="background-color:transparent;" placeholder="vị trí mong muốn">
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="far fa-envelope mr-2"></i></label>
                    <input type="text" name="" id="" class="col-8 text-light border-0"
                        style="background-color:transparent;" placeholder="email">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-phone mr-2"></i></label>
                    <input type="text" name="" id="" class="col-8 text-light border-0"
                        style="background-color:transparent;" placeholder="Số điện thoại">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-birthday-cake mr-2"></i></label>
                    <input type="date" name="" id="" class="col-8 text-light border-0"
                        style="background-color:transparent;" placeholder="01/01/2000">
                </div>
                <div class="d-flex align-items-center">
                    <label for="" class="m-0"><i class="fas fa-map-marker-alt mr-2"></i></label>
                    <input type="text" name="" id="" class="col-8 text-light border-0"
                        style="background-color:transparent;" placeholder="Tỉnh/Thành Phố">
                </div>
            </div>

            <div class="col-3 d-flex flex-column">
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-linkedin-in mr-2 h4"></i></label>
                    <input type="text" name="" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="linkedin.com/in/username">
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-facebook-f mr-2 h4"></i></label>
                    <input type="text" name="" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="facebook.com/username">
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    <label for="" class="m-0"><i class="fab fa-skype mr-2 h4"></i></label>
                    <input type="text" name="" id="" class="col-10 text-light border-0"
                        style="background-color:transparent;" placeholder="live:skype_username">
                </div>
            </div>
            <div class="col-12 bg-white text-dark pt-1">
                <div class="col-12 p-0">
                    <label for="job_target" class="h4 font-weight-bolder pt-5 m-0"><i class="fas fa-user mr-2"></i>MỤC
                        TIÊU NGHỀ NGHIỆP</label>
                    <hr class=" bg-dark">
                    <textarea name="job_target" id="" class="col-12 border-0"
                        placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                </div>
                <div class="d-flex row justify-content-around">
                    <div class="d-flex flex-column col-12 col-md-8">
                        <div class="mt-5">
                            <label for="work_experience" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-briefcase mr-2"></i>KINH NGHIỆM LÀM VIỆC</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="work_experience" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="education" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-graduation-cap mr-2"></i>HỌC VẤN</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="education" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="activity" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-hiking mr-2"></i>HOẠT ĐỘNG</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="activity" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="award" class="h4 font-weight-bolder m-0"><i class="fas fa-crown mr-2"></i>GIẢI
                                THƯỞNG</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="award" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>
                        <div class="mt-5 mb-5">
                            <label for="references" class="h4 font-weight-bolder m-0"><i
                                    class="far fa-user-circle mr-2"></i>NGƯỜI THAM CHIẾU</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="references" id="" class="col-12 border-0"
                                placeholder="Giới thiệu tổng quát bản thân, mục tiêu phấn đấu..."></textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-column col-12 col-md-3">
                        <div class="mt-5">
                            <label for="skill" class="h4 font-weight-bolder m-0"><i class="fas fa-tools mr-2"></i></i>KỸ
                                NĂNG</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="skill" id="" class="col-12 border-0" disabled></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="soft_skill" class="h4 font-weight-bolder m-0"><i
                                    class="fab fa-battle-net mr-2"></i>KỸ NĂNG MỀM</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="soft_skill" id="" class="col-12 border-0" disabled></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="certificate" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-award mr-2"></i></i>CHỨNG CHỈ</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="certificate" id="" class="col-12 border-0" disabled></textarea>
                        </div>
                        <div class="mt-5">
                            <label for="language" class="h4 font-weight-bolder m-0"><i
                                    class="fas fa-language mr-2"></i></i>NGÔN NGỮ</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="language" id="" class="col-12 border-0" disabled
                                disabled> hello</textarea>
                        </div>
                        <div class="mt-5">
                            <label for="hobby" class="h4 font-weight-bolder m-0"><i class="fas fa-gamepad mr-2"></i>SỞ
                                THÍCH</label>
                            <hr class="bg-dark">
                            <textarea type="text" name="hobby" id="" class="col-12 border-0" disabled></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('additional-Scripts')
<script type="text/javascript">
    var preview = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.width="100px";
        output.style.height="100px";
        output.style.objectFit="cover";
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection
