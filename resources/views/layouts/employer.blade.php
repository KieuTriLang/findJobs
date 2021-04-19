<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FindJobs</title>
    <link rel="shortcut icon" href="{{ asset('img/icon-findjobs.jpg') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
@yield('additional-Style')
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Plugin chat code -->
    <div class="fb-customerchat"
         attribution="page_inbox"
         page_id="101657632010860">
    </div>
</head>

<body>
<div class="container-fluid m-0 p-0 sticky-top bg-dark">
    @if (Auth::check())
        <p class="d-none"></p>
    @else
        <a href="{{ route('employee.home') }}"
           class="btn btn-outline-warning font-weight-bold p-1 col-md-6 offset-md-3 col-4 offset-4">Jobseeker <span
                class="d-md-inline d-none">: Find Job or Post Resume</span></a>
    @endif

    <nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
        <a class="navbar-brand ml-md-5 pt-2 " href="{{ route('employer.home') }}">
            <h2><span class="text-primary font-weight-bold">Find</span><span
                    class="text-danger font-weight-bold">Jobs</span><span class="h6">employer</span></h2>
        </a>
        <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-md-2">
                    <a class="nav-link font-weight-bold {{ Request::is('employer') ? 'active' : '' }}"
                       href="{{ route('employer.home') }}">HOME</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link font-weight-bold {{ Request::is('employer/job/create') ? 'active' : '' }}"
                       href="{{ route('job.create') }}">POST JOBS</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link font-weight-bold {{ Request::is('employer/find-resume') ? 'active' : '' }}"
                       href="#">FIND RESUME</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link font-weight-bold {{ Request::is('employer/faq') ? 'active' : '' }}"
                       href="{{ route('employer.faq') }}">FAQ</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold {{ preg_match('/employer\/sign-in/',Request::url()) ? 'active' : '' }}"
                           href="{{ route('employer.viewLogIn') }}">Sign In</a>
                    </li>
                    @if (Route::has('employer.register'))
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold {{ preg_match('/employer\/sign-up/',Request::url()) ? 'active' : '' }}"
                               href="{{ route('employer.register') }}">Sign Up</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('employer.profile') }}" class="dropdown-item">
                                <i class="fas fa-user-circle mr-2"></i>
                                Account Infomation
                            </a>
                            <a href="{{ route('job.index') }}" class="dropdown-item">
                                <i class="fas fa-tasks mr-2"></i>
                                Jobs Management
                            </a>
                            <a class="dropdown-item" href="{{ route('employer.logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('employer.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

</div>
<div class="container-fluid p-0">
    @yield('content')
</div>
<footer class="bg-dark mt-5">
    <div class="container pt-5">
        <div class="row text-center text-md-left">
            <div class="col-12 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                    <li>
                        <h4><span class="text-primary font-weight-bold">Find</span><span
                                class="text-danger font-weight-bold">Jobs</span></h4>
                    </li>
                    <li><a href="#" class="text-white">About Us</a></li>
                    <li><a href="#" class="text-white">Sitemap</a></li>
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white">Terms Of Use</a></li>
                    <li><a href="#" class="text-white">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                    <li>
                        <div class="text-danger h4 font-weight-bold">Job Seeker</div>
                    </li>
                    <li><a href="#" class="text-white">My FindJobs</a></li>
                    <li><a href="#" class="text-white">My Job Alert</a></li>
                    <li><a href="#" class="text-white">My Resume</a></li>
                    <li><a href="#" class="text-white">My Application</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                    <li>
                        <div class="text-danger h4 font-weight-bold">Recruiter</div>
                    </li>
                    <li><a href="#" class="text-white">Why Findjobs.Vn?</a></li>
                    <li><a href="#" class="text-white">Create Job Ads</a></li>
                    <li><a href="#" class="text-white">Search Resume</a></li>
                    <li><a href="#" class="text-white">Search Resume</a></li>
                    <li><a href="#" class="text-white">Customer Career Event</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <ul class="list-unstyled">
                    <li>
                        <div class="text-danger h4 font-weight-bold">Follow us</div>
                    </li>
                    <li><a href="#" class="text-white">Facebook</a></li>
                    <li><a href="#" class="text-white">Google+</a></li>
                    <li><a href="#" class="text-white">Linkedin</a></li>
                    <li><a href="#" class="text-white">Youtube</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center py-5 text-primary">&copy;2015 Findjobs.vn. All rights reserved. In association with
            FindTalent JSC
        </div>
    </div>
</footer>
@yield('additional-Scripts')
</body>

</html>
