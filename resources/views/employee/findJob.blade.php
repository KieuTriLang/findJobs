<?php
function convertString($str,$sChar){
    return "$sChar".str_replace([" ","/"],["!","&",],mb_strtolower($str,'utf-8'));
}
function searchLink($string,$sChar){
    $link=Request::path();
    $regex="/(\+$sChar)[!&a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ-]*(?(?=\+(?:nn|vt|dd)))/";
    $regex0="/\+[\+!&a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ-]*/";
    if(preg_match($regex0,$link)){
        preg_match($regex0,$link,$matches);
        if(preg_match($regex,$matches[0])){
            $newLink= preg_replace($regex,"+".convertString($string,$sChar),$matches[0]);
            return $newLink;
        }else{
            return "+".convertString($string,$sChar);
        }
    }else{
        return "+".convertString($string,$sChar);
    }
}

?>
@extends('layouts.employee')
@section('content')
<style>
    .text-hiden {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }

    .font-size {
        font-size: 13px;
    }

    .tg-themetag {
        background-color: #e91e63;
    }

    .tg-themetag {
        background: #ff9800;
        right: -20px;
        left: initial;
        top: 10px;
        width: 80px;
        text-align: center;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        font-size: 8px;
        padding: 5px 3px 3px 6px;
    }

    .tg-themetag {
        background: #ff9800;
        right: -20px;
        left: initial;
        top: 12px;
        width: 90px;
        text-align: center;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        font-size: 9px;
    }

    .tg-themetag {
        top: 7px;
        z-index: 2;
        color: #fff;
        font-size: 10px;
        font-weight: 500;
        line-height: 10px;
        position: absolute;
        background: #ff526c;
        padding: 5px 3px 3px 10px;
        text-transform: uppercase;
    }

    .tg-featuretag:before {
        border-left: 10px solid #ff9800;
        display: none;
    }

    .tg-featuretag:before {
        top: 0;
        left: 100%;
        border-top: 9px solid transparent;
        border-bottom: 9px solid transparent;
        border-left: 10px solid #ff526c;
    }

    .tg-featuretag:after,
    .tg-featuretag:before {
        width: 0;
        height: 0;
        content: '';
        position: absolute;
    }

    .tg-featuretag:after {
        border-top: 5px solid #ff9800;
        border-top-width: 5px;
        border-top-style: solid;
        border-top-color: rgb(255, 152, 0);
        display: none;
    }

    .tg-featuretag:after {
        top: 100%;
        left: 0;
        border-top: 5px solid #eb344f;
        border-left: 5px solid transparent;
    }

    .tg-featuretag:after,
    .tg-featuretag:before {
        width: 0;
        height: 0;
        content: '';
        position: absolute;
    }

    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .item {
        overflow: hidden;
    }
    .filter-box{
        height: 200px;
        overflow-y: auto;
    }
</style>

<div class="container-fluid mt-5">
    <div class="d-flex mt-5 ml-3">
        <h4 class="mb-2">Hiện có {{ $post_jobs->total() }} công việc</h4>
    </div>
    <div class="row mx-2 mt-3">
        <div class="col-12  col-sm-9 col-md-9 col-lg-9">
            <div class="row pt-0">
                @foreach ($post_jobs as $job)
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="job-box p-1">
                        <div class="row border border-muted item">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3  p-1 p-sm-2 p-md-2 p-lg-2">
                                <img class="img-fluid" src="{{ asset("company_logo/$job->company_logo") }}"
                                    alt="company">
                            </div>
                            <div class="col-9 col-sm-9 col-md-9 col-lg-9 p-2">
                                <a href="{{ route('employee.detailJob',["$job->id","$job->employer_id"]) }}"
                                    class="text-danger">
                                    <h5 class="mb-1 text-hiden mt-3">{{ $job->hire_position }}</h5>
                                </a>
                                <a href="#" class="h6 d-block text-secondary mb-1">{{ $job->company_name }}</a>
                                <span class="font-size"><i
                                        class="fas fa-dollar-sign mr-1"></i>{{ $job->salary }}&ensp;</span>
                                <span class="font-size"><i
                                        class="fas fa-map-marker-alt mr-1"></i>{{ $job->location }}&ensp;</span>
                                <span class="font-size"><i
                                        class="far fa-clock mr-1"></i>{{ date('d-m-Y',strtotime($job->created_at)) }}</span>&ensp;
                                <div class="tg-themetag tg-featuretag platinum">Hot</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $post_jobs->links() }}
            </div>
        </div>
        <div class="col-12  col-sm-3 col-md-3 p-0 pt-1">
            <p class="bg-danger text-white text-center font-weight-bold py-3">BỘ LỌC KẾT QUẢ</p>
            <div class="">
                {{-- <p class="my-3 text-danger font-weight-bold">ĐIỀU CHỈNH BỘ LỌC</p>
                <small class="bg-warning p-1 rounded">Hồ Chí Minh <a href="#" class="text-decoration-none text-dark"><i
                            class="fas fa-minus ml-3"></i></a></small> --}}
                <div class="my-3 bg-danger text-light font-weight-bold p-2"><span>TỈNH / THÀNH PHỐ</span> </div>
                <ul class="list-unstyled mx-2 filter-box">
                    @foreach ($cities as $city)
                    <li class="border-bottom mt-1 d-flex justify-content-between"><a
                            href="{{ route("searchJob",searchLink($city->city_name,"dd-"))   }}"
                            class="text-dark">{{ $city->city_name }}</a><span class="text-muted">12.000</span></li>
                    @endforeach
                </ul>
                <p class="my-3 text-danger font-weight-bold">NGÀNH NGHỀ</p>
                <ul class="list-unstyled mx-2 filter-box">
                    @foreach ($industries as $industry)
                    <li class="border-bottom mt-1 d-flex justify-content-between"><a
                            href="{{ route("searchJob",searchLink($industry->industry_name,"nn-"))   }}" class="text-dark">
                            {{ $industry->industry_name }}</a><span class="text-muted">3000</span></li>
                    @endforeach
                </ul>
                <p class="my-3 text-danger font-weight-bold">VỊ TRÍ</p>
                <ul class="list-unstyled mx-2 filter-box">
                    @foreach ($hirePositions as $hirePosition)
                    <li class="border-bottom mt-1 d-flex justify-content-between"><a
                        href="{{ route("searchJob",searchLink($hirePosition->hire_position,"vt-"))   }}"
                        class="text-dark">{{ $hirePosition->hire_position }}</a><span class="text-muted">3476</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
