<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FindJobs</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    @yield('additional-Style')
</head>

<body>
    <div class="container-fluid m-0 p-0 sticky-top bg-dark">
        {{-- @if (Auth::check())
            <p class="d-none"></p>
        @else --}}
        <a href="{{ route('employer.home') }}"
            class="btn btn-outline-warning font-weight-bold p-1 col-md-6 offset-md-3 col-4 offset-4">Recruiter <span
                class="d-md-inline d-none">: Post Job or Find Talent</span></a>
        {{-- @endif --}}
        <nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
            <a class="navbar-brand ml-md-5 pt-2 " href="{{ url('/') }}">
                <h2><span class="text-primary font-weight-bold">Find</span><span
                        class="text-danger font-weight-bold">Jobs</span><span class="h6">employee</span></h2>
            </a>
            <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-md-2">
                        <a class="nav-link font-weight-bold active" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item mr-md-2">
                        <a class="nav-link font-weight-bold" href="{{ route('employee.findjob') }}">FIND JOBS</a>
                    </li>
                    <li class="nav-item mr-md-2">
                        <a class="nav-link font-weight-bold" href="#">CREATE RESUME</a>
                    </li>
                    <li class="nav-item mr-md-2">
                        <a class="nav-link font-weight-bold" href="{{ route('employee.faq') }}">FAQ</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('employee.viewLogIn') }}">Sign In</a>
                    </li>
                    @if (Route::has('employee.register'))
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('employee.register') }}">Sign Up</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-user-circle mr-2"></i>
                                Account Infomation
                            </a>
                            <a href="{{ route('resume.index') }}" class="dropdown-item">
                                <i class="fas fa-tasks mr-2"></i>
                                Resume Management
                            </a>
                            <a class="dropdown-item" href="{{ route('employee.logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('employee.logout') }}" method="POST"
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
                FindTalent JSC</div>
        </div>
    </footer>
    @yield('additional-Script')
</body>

</html>
