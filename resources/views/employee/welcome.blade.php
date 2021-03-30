@extends('layouts.employee')
@section('content')
<div id="carousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1564403256236-8f6929897a47?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODB8fGpvYnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                alt="Los Angeles" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8am9ifGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                alt="Chicago" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8am9ifGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                alt="New York" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-caption mb-5">
            <div class="d-flex justify-content-center">
                <form action="" method="POST"
                    class="form-row w-75 d-flex justify-content-center bg-success py-2 rounded">
                    <input type="text" name="keywordFind" id="keywordFind" class="form-control col-5 col-md-6 mr-md-2"
                        placeholder="Input Job Title, Companies or any Keywords">
                    <select name="location" id="location" class="form-control col-4 mr-2">
                        <option value="VN-44">An Giang</option>
                        <option value="VN-43">Bà Rịa–Vũng Tàu</option>
                        <option value="VN-54">Bắc Giang</option>
                        <option value="VN-53">Bắc Kạn</option>
                        <option value="VN-55">Bạc Liêu</option>
                        <option value="VN-56">Bắc Ninh</option>
                        <option value="VN-50">Bến Tre</option>
                        <option value="VN-31">Bình Định</option>
                        <option value="VN-57">Bình Dương</option>
                        <option value="VN-58">Bình Phước</option>
                        <option value="VN-40">Bình Thuận</option>
                        <option value="VN-59">Cà Mau</option>
                        <option value="VN-CT">Cần Thơ</option>
                        <option value="VN-04">Cao Bằng</option>
                        <option value="VN-DN">Đà Nẵng</option>
                        <option value="VN-33">Đắk Lắk</option>
                        <option value="VN-72">Đắk Nông</option>
                        <option value="VN-71">Điện Biên</option>
                        <option value="VN-39">Đồng Nai</option>
                        <option value="VN-45">Đồng Tháp</option>
                        <option value="VN-30">Gia Lai</option>
                        <option value="VN-03">Hà Giang</option>
                        <option value="VN-63">Hà Nam</option>
                        <option value="VN-HN">Hà Nội</option>
                        <option value="VN-23">Hà Tĩnh</option>
                        <option value="VN-61">Hải Dương</option>
                        <option value="VN-HP">Hải Phòng</option>
                        <option value="VN-73">Hậu Giang</option>
                        <option value="VN-SG">Hồ Chí Minh</option>
                        <option value="VN-14">Hòa Bình</option>
                        <option value="VN-66">Hưng Yên</option>
                        <option value="VN-34">Khánh Hòa</option>
                        <option value="VN-47">Kiên Giang</option>
                        <option value="VN-28">Kon Tum</option>
                        <option value="VN-01">Lai Châu</option>
                        <option value="VN-35">Lâm Đồng</option>
                        <option value="VN-09">Lạng Sơn</option>
                        <option value="VN-02">Lào Cai</option>
                        <option value="VN-41">Long An</option>
                        <option value="VN-67">Nam Định</option>
                        <option value="VN-22">Nghệ An</option>
                        <option value="VN-18">Ninh Bình</option>
                        <option value="VN-36">Ninh Thuận</option>
                        <option value="VN-68">Phú Thọ</option>
                        <option value="VN-32">Phú Yên</option>
                        <option value="VN-24">Quảng Bình</option>
                        <option value="VN-27">Quảng Nam</option>
                        <option value="VN-29">Quảng Ngãi</option>
                        <option value="VN-13">Quảng Ninh</option>
                        <option value="VN-25">Quảng Trị</option>
                        <option value="VN-52">Sóc Trăng</option>
                        <option value="VN-05">Sơn La</option>
                        <option value="VN-37">Tây Ninh</option>
                        <option value="VN-20">Thái Bình</option>
                        <option value="VN-69">Thái Nguyên</option>
                        <option value="VN-21">Thanh Hóa</option>
                        <option value="VN-26">Thừa Thiên–Huế</option>
                        <option value="VN-46">Tiền Giang</option>
                        <option value="VN-51">Trà Vinh</option>
                        <option value="VN-07">Tuyên Quang</option>
                        <option value="VN-49">Vĩnh Long</option>
                        <option value="VN-70">Vĩnh Phúc</option>
                        <option value="VN-06">Yên Bái</option>
                    </select>
                    <button type="submit" class="btn btn-info col-2 col-md-1"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<div class=" container-fluid mt-5">
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-sm-6 col-md-3">
            <div class="card card-add">
                <img class="card-img-top img-fluid"
                    src="https://images.unsplash.com/photo-1616399798569-dc2779dd0373?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDE1fHRvd0paRnNrcEdnfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                    alt="Card image">
                <div class="card-body">
                    <p class="card-title"><a href="#" class="text-dark font-weight-bold">CHUYÊN VIÊN DIGITAL
                            MARKETING</a></p>
                    <p class="card-text"><a href="#" class="text-dark">Công ty Cổ phần DKRA Việt Nam</a></p>
                    <p class="card-text text-truncate">Note how text-capitalize only changes the first letter of each
                        word, leaving the case of any other letters unaffected.</p>
                    <a href="#" class="float-right">See more ></a>
                </div>
            </div>
        </div>
    @endfor
</div>
<div class="d-flex justify-content-center">
    <a href="#" class="btn btn-primary mt-5">See More</a>
</div>
</div>

@endsection
