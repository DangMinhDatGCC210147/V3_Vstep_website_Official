@extends('auth.layouts.layout-new')

@section('content')
<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll fixed-top sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="" class="logo text-uppercase">
                <img src="{{ asset('students/assets/images/main-logo-light.png') }}" alt="" class="logo-light"
                    height="80" />
                <img src="{{ asset('students/assets/images/main-logo.png') }}" alt="" class="logo-dark"
                    height="80" />
            </a>
        </div>
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ route('student.login') }}">Login For Lecturer </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- Home -->
<section class="home-half-form bg-half-home-form" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center vertical-content home-flex">
                    <div class="col-lg-6 mt-3 text-md-left mb-md-4">
                        <h6 class="home-title custom-home-title text-white">About Testing Vstep Practice</h6>
                        <p class="pt-4 home-sub-title text-white">This is the vstep test system of Greenwich Vietnam Can Tho. This website serves students at the Can Tho campus in taking the vstep test with an interface most similar to reality.</p>
                    </div>
                    <div class="col-lg-4 offset-lg-2 justify-content-center  mt-3">
                        <form method="POST" action="{{ route('loginAccount') }}" class="form-home">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <h3 class="text-center"> LOGIN FOR STUDENT </h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail FPT Address" name="email"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="form-group text-center">

                                <button type="submit" id="submit"
                                    class="btn btn-custom btn-rounded btn-block text-uppercase mb-2">Start Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home end -->

<!-- How do work -->
<section class="section services-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title">SOME HIGHLIGHTS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="{{ asset('homepageStudent/images/ten.png') }}" alt="service-icon-img"
                        class="service-icon" />
                    <div class="service-body">
                        <h5>Grading from lecturers</h5>
                        <p>
                            Lecturers will evaluate and grade your performance, providing detailed feedback to help you improve.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="{{ asset('homepageStudent/images/education.png') }}" alt="service-icon-img"
                        class="service-icon" />
                    <div class="service-body">
                        <h5>Simulate the real exam interface</h5>
                        <p>
                            Experience an interface that closely mirrors the real exam environment, ensuring you are well-prepared for the actual test.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-boxed">
                    <img src="{{ asset('homepageStudent/images/checked.png') }}" alt="service-icon-img"
                        class="service-icon" />
                    <div class="service-body">
                        <h5>Get feedback from lecturers</h5>
                        <p>
                            Receive constructive feedback from your lecturers, enabling you to understand your strengths and areas for improvement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How do work end  -->

<!-- More Features -->
<section class="section bg-light" id="features">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title">AWSOME FEATURES</h3>
            </div>
        </div>
        <div class="row vertical-content justify-content-center pb-4">
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('homepageStudent/images/icons/svg/Moviecam.svg') }}" alt=""
                        class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="more-features">
                    {{-- <i class="mbri-idea"></i> --}}
                    <h4 class="pt-4">Record the speaking part directly on the system</h4>
                    <p class="text-muted preference-subtitle mt-3 mb-0">Effortlessly record your speaking responses directly within the system, ensuring seamless submission and accurate evaluation.</p>

                    <p class="text-muted preference-subtitle mt-3 mb-0">Capture your spoken answers in real-time with the system's built-in recording feature, providing a convenient and efficient way to complete the speaking parts.</p>

                </div>
            </div>
        </div>
        <div class="row vertical-content mt-4 justify-content-center">
            <div class="col-lg-6">
                <div class="more-features">
                    {{-- <i class="mbri-like"></i> --}}
                    <h4 class="pt-4">Auto-save for Listening and Reading skills</h4>
                    <p class="text-muted preference-subtitle mt-3 mb-0">The system automatically saves your selected answers for Listening and Reading tasks as you progress, ensuring no loss of data and allowing you to focus entirely on your performance.</p>

                    <p class="text-muted preference-subtitle mt-3 mb-0">With the auto-save feature, your responses for Listening and Reading sections are securely stored in real-time whenever you select an answer, providing peace of mind and uninterrupted test-taking experience.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('homepageStudent/images/icons/svg/Paperdesk.svg') }}" alt=""
                        class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- More Features end -->

<!--cta -->
<section class="section bg-cta">
    <div class="program-bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center" id="counter">
            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-timer"></i>
                </div>
                <h1 class="counter-value" data-count="300">0</h1>
                <h4 class="counter-name">Total Testing Hours</h4>
            </div>

            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-bookmark"></i>
                </div>
                <h1 class="counter-value" data-count="2000">10</h1>
                <h4 class="counter-name">Exams</h4>
            </div>

            <div class="col-md-3 text-white text-center pt-3 pb-3">
                <div class="counter-icon">
                    <i class="mbri-database"></i>
                </div>
                <h1 class="counter-value" data-count="100">2</h1>
                <h4 class="counter-name">Do The Test</h4>
            </div>
        </div>
    </div>
</section>
<!--funfact end-->

@endsection
