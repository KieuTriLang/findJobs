@extends('layouts.employee')
<head>
    <title>FindJobs - Trang chủ</title>
</head>
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
            <img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-602f899eb555f_large_banner_new.png"
                alt="Los Angeles" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-item">
            <img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-1900x747x0_banner_large_new.jpg"
                alt="Chicago" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-item">
            <img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-banner_final.jpg"
                alt="New York" height="500px" width="100%" height="100%">
        </div>
        <div class="carousel-caption mb-5">
            <div class="d-flex justify-content-center">
                <form action="" method="POST"
                    class="form-row w-75 d-flex justify-content-center bg-success py-2 rounded">
                    <input type="text" name="keywordFind" id="keywordFind" class="form-control col-5 col-md-6 mr-md-2"
                        placeholder="Input Job Title, Companies or any Keywords">
                    <select name="location" id="location" class="form-control col-4 mr-2">
                        @foreach ($locations as $location)
                            <option value="{{ $location->city_code }}">{{ $location->city_name }}</option>
                        @endforeach
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
    <div class="container mx-auto row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-sm-6 col-md-3 mb-4">
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
    <a href="{{ route('employee.findjob') }}" class="btn btn-primary mt-5">See More</a>
</div>
</div>

@endsection
