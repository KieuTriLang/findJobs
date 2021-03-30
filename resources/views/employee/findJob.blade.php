@extends('layouts.employee')
@section('content')
<div class="d-flex mt-5 ml-md-5">
        <p class="h2">Search job result: <span class="text-danger">12.567</span></p>
</div>
<div class="d-flex flex-column flex-md-row justify-content-md-around mt-4">
        <div class="col-10 col-md-8">
                @for ($i = 0; $i < 10; $i++) <div class="d-flex flex-column flex-md-row align-items-md-center mx-auto mt-2 ml-md-5 border">
                        <a href="#" class="col-1 p-0 text-center text-dark">
                                <i class="fas fa-star"></i>
                        </a>
                        <div class="col-10 col-md-2 p-0">
                                <img src="https://www.findjobs.vn/htdocs/thumbs/employers/202011/133x100x0-200x100x0_13796_digiworld.jpg"
                                        alt="">
                        </div>
                        <div class="col-12 col-md-6 p-0 ml-3">
                                <p class="font-weight-bold m-0">[HCM] Giám Sát Bán Hàng Kênh MT - Ngành hàng FMCG</p>
                                <p class="mb-1">Công Ty Cổ Phần Thế Giới Số</p>
                                <small>
                                        <span>Skill tags >></span>
                                        <span class="bg-warning p-1 ml-1 rounded">fcmg</span>
                                        <span class="bg-warning p-1 ml-1 rounded">marketing</span>
                                        <span class="bg-warning p-1 ml-1 rounded">trading</span>
                                </small>
                                <p class="mt-2">
                                        <span class="mr-5"><i class="fas fa-dollar-sign"></i>20 - 100tr</span>
                                        <span><i class="fas fa-map-marker-alt"></i>Tp. Hồ Chí Minh</span>
                                </p>
                        </div>
                        <div class="col-12 col-md-3 d-flex flex-column">
                                <p class="text-center"><i class="far fa-calendar-alt mr-2"></i>20-10-2021</p>
                                <a href="#" class="btn btn-outline-danger">Apply now</a>
                        </div>
        </div>
        @endfor
        <div class="d-flex justify-content-center mt-5">
                <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
        </div>
</div>
<div class="col-10 col-md-3 offset-md-0 p-0 border">
        <p class="bg-danger text-white text-center font-weight-bold py-3">FILTER RESUTLS</p>
        <div class="px-2">
                <p class="my-3 text-danger font-weight-bold">REFINEMENTS</p>
                <small class="bg-warning p-1 rounded">Hồ Chí Minh <a href="#" class="text-decoration-none text-dark"><i
                                        class="fas fa-minus ml-3"></i></a></small>
                <p class="my-3 text-danger font-weight-bold">JOB BY LOCATIONS</p>
                <ul class="list-unstyled">
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Hồ
                                        Chí
                                        Minh</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Cần
                                        Thơ</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Hà
                                        Nội</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Cà
                                        Mau</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Đà
                                        Nẵng</a><span class="text-muted">12.000</span></li>
                </ul>
                <p class="my-3 text-danger font-weight-bold">JOB BY INDUSTRY</p>
                <ul class="list-unstyled">
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Sales /
                                        Business
                                        Development</a><span class="text-muted">3000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Manufacturing /
                                        Process</a><span class="text-muted">3000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Customer
                                        Service</a><span class="text-muted">3000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Accounting /
                                        Auditing / Tax</a><span class="text-muted">3000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Marketing</a><span class="text-muted">3000</span></li>
                </ul>
                <p class="my-3 text-danger font-weight-bold">JOB BY LEVEL</p>
                <ul class="list-unstyled">
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Experienced</a><span class="text-muted">3476</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Entry
                                        Level</a><span class="text-muted">3476</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Manager</a><span class="text-muted">3476</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Team
                                        Leader
                                        /
                                        Supervisor</a><span class="text-muted">3476</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#"
                                        class="text-dark">Student /
                                        Internship</a><span class="text-muted">3476</span></li>
                </ul>
                <p class="my-3 text-danger font-weight-bold">JOB BY LOCATIONS</p>
                <ul class="list-unstyled">
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Hồ
                                        Chí
                                        Minh</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Cần
                                        Thơ</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Hà
                                        Nội</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Cà
                                        Mau</a><span class="text-muted">12.000</span></li>
                        <li class="border-bottom mt-1 d-flex justify-content-between"><a href="#" class="text-dark">Đà
                                        Nẵng</a><span class="text-muted">12.000</span></li>
                </ul>
        </div>
</div>
</div>

@endsection
