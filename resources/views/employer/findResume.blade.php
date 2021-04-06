@php
    $findresume = \App\Models\findresume::all();
@endphp
@extends('layouts.employer')
@section('additionall-Style')
@endsection
@section('content')
    <div id="box_quick_search">
        <div class="container">
            <form method="post" action="https://www.findjobs.vn/en/employers/search" id="frm_quick_search_job"
                  class="multiselect row from-group">
                <div class="col-md-3">
                    <input type="text" name="keywords" class="form-control" placecholder="Input keyword"
                           placeholder="nhập từ khóa" value>
                </div>
                <div class="col-md-3">
                    <input class="form-control" list="citys" name="city" id="city" placeholder="tất cả địa điểm">
                    <datalist id="citys">
                        <?php foreach ($findresume as $value):?>
                        <option value="<?= $value['location']?>">
                        <?php endforeach;?>
                    </datalist>
                </div>
                <div class="col-md-3">
                    <input class="form-control" list="browsers" name="browser" id="browser"
                           placeholder="tất cả các ngành">
                    <datalist id="browsers">
                        <?php foreach ($findresume as $value):?>
                        <option value="<?= $value['career']?>">
                        <?php endforeach;?>
                    </datalist>
                </div>
                <div class="col-md-3">
                    <input class="form-control" list="levers" name="lever" id="lever" placeholder="trình độ">
                    <datalist id="levers">
                        <?php foreach ($findresume as $value):?>
                        <option value="<?= $value['lever']?>">
                        <?php endforeach;?>
                    </datalist>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tìm kiếm sơ yếu ly lịch</h1>
            </div>
            <hr class="col-12 my-1 text-dark">
            <div class="col-md-4">
                <h2>Bán hàng/ Tiếp thị</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Bán buôn/ Bán lẻ <span class="text-danger">(3,725)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Bán hàng/ Phát triển kinh doanh <span class="text-danger">(30,712)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Tiếp thị<span class="text-danger">(14,037)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>FMCG</h2>
                <ol  class="arrow arrow-gray">
                    <li>
                        <a href="#"><p>Chăm sóc gia đình/ Cá nhân <span class="text-danger">(1,927)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Đồ ăn & Đồ uống (F&B) <span class="text-danger">(3,936)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Vận chuyển</h2>
                <ol>
                    <li>
                        <a href="#"><p>Chuỗi cung ứng <span class="text-danger">(1,405)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Hàng không <span class="text-danger">(393)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Trình điều khiển</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Vận chuyển hàng hóa/ Hậu cần/ Kho hàng <span class="text-danger">(7,186)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Hàng hải <span class="text-danger">(227)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Dịch vụ</h2>
                <ol  class="arrow arrow-gray">
                    <li>
                        <a href="#"><p>Tiếp viên hàng không </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Phi công</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Dịch Vụ tuyển dụng</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Bảo mật <span class="text-danger">(755)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Viễn thông <span class="text-danger">(5,675)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Dịch vụ khách hàng <span class="text-danger">(18,489)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Luật/ Dịch vụ pháp lý <span class="text-danger">(1,382)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>NGO/ Phi lợi nhuận <span class="text-danger">(1,859)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Tư vấn <span class="text-danger">(3,128)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Admin/HR</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Nguồn nhân lực <span class="text-danger">(18,854)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Quản lý điều hành <span class="text-danger">(7,882)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Hành chính/ Thư kí<span class="text-danger">(20,071)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Phiên dịch/ Phiên dich<span class="text-danger">(4,538)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Internet</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Thương mại điện tử</p></a>
                    </li>
                    <li>
                        <a href="#"><p>SEO/ SEM </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Tiếp thị trực tuyến<span class="text-danger">(14,037)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Chăm sóc sức khỏe</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Người chăm sóc</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Bác sĩ/ Bác sĩ </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Y tá</p></a>
                    </li>
                    <li >
                        <a href="#"><p>Trợ lý y tá</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Y tế/ Chăm sóc sức khỏe <span class="text-danger">(2,019)</span> </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Dược phẩm<span class="text-danger">(2,196)</span></p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Kế toán/ Tài chính</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Kế toán/ Kiểm toán/ Thuế <span class="text-danger">(23,297)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Ngân hàng<span class="text-danger">(14,120)</span> </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Tài chính/ Đầu tư <span class="text-danger">(27,330)</span></p></a>
                    </li>
                    <li >
                        <a href="#"><p>Bảo hiểm <span class="text-danger">(1,655)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Chứng khoán <span class="text-danger">(500)</span> </p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Máy tính</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>CNTT phần cứng/ Mạng <span class="text-danger">(2,350)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>CNTT - Phần mềm<span class="text-danger">(16,460)</span> </p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Hành chánh/ Nhân sự</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Nhân sự <span class="text-danger">(18,854)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Quản lý điểu hành <span class="text-danger">(7,882)</span> </p></a>
                    </li>
                    <li >
                        <a href="#"><p>Hành chính/ Thư ký <span class="text-danger">(20,075)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Biên phiên dịch <span class="text-danger">(4,538)</span> </p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Truyền thông/ Media</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Quảng cáo/ Đối ngoại <span class="text-danger">(1,751)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Tổ chức sự kiện <span class="text-danger">(1,557)</span> </p></a>
                    </li>
                    <li >
                        <a href="#"><p>Truyền hình/ Báo trí/ Biên tập <span class="text-danger">(1,660)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Mỹ thuật/ Nghệ thuật/ Thiết kế <span class="text-danger">(3,659)</span> </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Giải trí <span class="text-danger">(1,405)</span> </p></a>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <h2>Khoa học/ Kỹ thuật</h2>
                <ol class="arrow arrow-gray">
                    <li >
                        <a href="#"><p>Công nghệ cao</p></a>
                    </li>
                    <li>
                        <a href="#"><p>Chăn nuôi/ Thú y <span class="text-danger">(127)</span> </p></a>
                    </li>
                    <li >
                        <a href="#"><p>Cơ khí/ Ô tô/ Tự động háo <span class="text-danger">(11,625)</span></p></a>
                    </li>
                    <li>
                        <a href="#"><p>Công nghệ sinh học <span class="text-danger">(2,151)</span> </p></a>
                    </li>
                    <li>
                        <a href="#"><p>Dầu khí <span class="text-danger">(2,582)</span> </p></a>
                    </li>
                </ol>
            </div>
        </div>
    </div>

@endsection
