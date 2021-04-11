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
        @foreach ($postJobs as $postJob)
        <div class="col-sm-6 col-md-3 mb-4">
            <div class="card card-add">
                <img class="card-img-top img-fluid"
                    src="{{ asset("company_logo/$postJob->company_logo") }}"
                    alt="Card image">
                <div class="card-body">
                    <p class="card-title"><a href="{{ route('employee.detailJob',["$postJob->id","$postJob->employer_id"]) }}" class="text-dark font-weight-bold">{{ $postJob->hire_position }}</a></p>
                    <p class="card-text h6"><a href="#" class="text-dark h6">{{ $postJob->company_name }}</a></p>
                    <p class="card-text text-truncate">{{ $postJob->description }}</p>
                    <a href="{{ route('employee.detailJob',["$postJob->id","$postJob->employer_id"]) }}" class="float-right">See more ></a>
                </div>
            </div>
        </div>
        @endforeach
</div>
<div class="d-flex justify-content-center">
    <a href="{{ route('employee.findjob') }}" class="btn btn-primary mt-5">See More</a>
</div>
</div>

@endsection
