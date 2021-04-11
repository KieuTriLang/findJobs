@extends('layouts/employer')
@section('additional-Style')
<link rel="stylesheet" href="{{ asset('css/detailJ.css') }}">
@endsection
@section('content')
<div class="col-11 mx-auto mt-4 border p-0 rounded">
    <div class="bg-dark text-white d-flex flex-column align-items-center">
        <img src="https://jobsgo.vn/media/img/employer/11659-100x100.jpg" alt="" class="rounded mt-3" width="100px"
            height="100px" />
        <p class="h6 font-weight-bold mt-3">Chào mừng bạn đến với</p>
        <p class="h5 font-weight-bold mt-1">Công Ty TNHH Bảo Hiểm Nhân Thọ AIA (Team AIA Exchange) </p>
    </div>
    <div class="d-flex row">
        <div class="col-12 col-md-8 p-0 border">
            <div class="pt-4 pl-2">
                <p class="h3 font-weight-bolder">Chuyên Viên Quan Hệ Khách Hàng ( Thu Nhập Cố Định 15 TR + Thưởng Lên
                    Tới 30
                    TR)</p>
                <p class="h6"><i class="fas fa-dollar-sign mr-2"></i>Mức lương 15 - 25 triệu VNĐ</p>
                <button onclick="togglePopup()" class="btn btn-outline-primary"><i
                        class="fas fa-paper-plane mr-2"></i>Ứng tuyển ngay</button>
                <p class="h6 font-weight-bolder mt-4">Mô tả công việc</p>
            </div>
        </div>
        <div class="col-12 col-md-4 border-bottom">
            <div class="h5 font-weight-bold pt-4">CÔNG TY TNHH BẢO HIỂM NHÂN THỌ AIA (TEAM AIA EXCHANGE)</div>
            <div class="h6"><i class="fas fa-map-marker-alt mr-2"></i>CGV Vincom Center Đồng Khởi, Lê Thánh Tôn, Bến
                Nghé, Quận 1, Thành phố Hồ Chí Minh</div>
            <div class="h6"><i class="fas fa-globe-americas mr-2"></i>http://www.aia.com.vn/vi/index.html</div>
            <div class="h6"><i class="fas fa-users mr-2"></i>20-50 nhân viên</div>
            <div class="h6">AIA Việt Nam là thành viên của Tập đoàn AIA, nhà cung cấp những sản phẩm bảo hiểm nhân thọ
                giúp mang lại các giải pháp bảo vệ tài chính và sự an tâm về tương lai cho khách hàng.</div>
        </div>
        <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <h3>Chọn CV</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aspernatur laborum rem sed laudantium
                    excepturi veritatis voluptatum architecto, dolore quaerat totam officiis nisi animi accusantium
                    alias inventore nulla atque debitis.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-Scripts')
    <script src="{{ asset('js/detailJ.js') }}"></script>
@endsection
