@extends('layouts.employer')
<head>
    <title>FindJobs - Employer - Trang chủ</title>
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
            <a href="">
                <img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-large_ed_25_03.png" alt="Los Angeles"
                    height="520px" width="100%" height="100%">
            </a>
        </div>
        <div class="carousel-item">
            <a href=""><img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-large_ed_25_03.png"
                    alt="Chicago" height="520px" width="100%" height="100%">
            </a>
        </div>
        <div class="carousel-item">
            <a href="">
                <img src="https://www.findjobs.vn/htdocs/thumbs/banners/1900x747x0-large_ed_25_03.png" alt="New York"
                    height="520px" width="100%" height="100%">
            </a>
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
    <p class="h2 text-center font-weight-bold mb-5 text-primary">Product & Service</p>
    <div class="row">
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-bullseye display-2 d-block mb-3"></i>
                JOB POSTING
            </a>

        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-volume-up display-2 d-block mb-3"></i>
                JOB BRANDING
            </a>

        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-search display-2 d-block mb-3"></i>
                RESUME SEARCHING
            </a>

        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-tv display-2 d-block mb-3"></i>
                BANNER ADVERTISING
            </a>

        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-paper-plane display-2 d-block mb-3"></i>
                EMAIL MARKETING
            </a>

        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="far fa-calendar-alt display-2 d-block mb-3"></i>
                CUSTOM CAREER EVENT
            </a>

        </div>
    </div>
</div>
<hr>
<div class="container-fluid mt-5">
    <p class="h2 text-center mb-5 font-weight-bold text-primary">Why FindJobs?</p>
    <div class="row">
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-hand-holding-usd display-1 d-block mb-3"></i>
                Saving cost by Pay As You Go method
            </a>
        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-link display-1 d-block mb-3"></i>
                Host your job posting on Findjobs.vn from other job sites
            </a>
        </div>
        <div class="col-10 offset-1 col-sm-6 col-md-4 offset-sm-0 text-center mb-5">
            <a href="" class="text-secondary text-decoration-none font-weight-bold">
                <i class="fas fa-project-diagram display-1 d-block mb-3"></i>
                Approaching thousands target candidate by exclusive e-mail marketing technology
            </a>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <p class="h2 text-center mb-2 font-weight-bold text-primary">What Customers Are Thinking About FindJobs</p>
    <p class="h4 text-center mb-5">Don’t take it from us, let our customers do the talking!</p>
    <div class="d-flex justify-content-around">
        <div class="col-6 col-md-3">
            <div class="card-deck">
                <div class="card border-0">
                    <img class="card-img-top" src="https://vingroup.net/assets/images/logo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">“I was impressed by the work style of Findjobs team: friendly, passionate and professional”.</p>
                        <p class="card-text mb-0">Kieu Tri Lang</p>
                        <p class="card-text"><small class="text-muted">General Director, VinGroup</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-deck">
                <div class="card border-0">
                    <img class="card-img-top" src="https://vingroup.net/assets/images/logo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">“Friendly and new style in design, I believe Findjobs.vn will develop and become our companion in recruiment.”.</p>
                        <p class="card-text mb-0">Kieu Tri Lang</p>
                        <p class="card-text"><small class="text-muted">General Director, VinGroup</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-deck">
                <div class="card border-0">
                    <img class="card-img-top" src="https://vingroup.net/assets/images/logo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">“I was impressed by the work style of Findjobs team: friendly, passionate and professional”.</p>
                        <p class="card-text mb-0">Kieu Tri Lang</p>
                        <p class="card-text"><small class="text-muted">General Director, VinGroup</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
