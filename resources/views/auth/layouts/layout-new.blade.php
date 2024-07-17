<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap 5 landing template">
    {{-- <meta name="author" content="Themesbrand"> --}}

    <link rel="shortcut icon" href="{{ asset('students/assets/images/logo-white.png') }}">

    <title>VSTEP - GREENWICH CANTHO</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('homepageStudent/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Icons CSS -->
    <link href="{{ asset('homepageStudent/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homepageStudent/css/mobiriseicons.css') }}" rel="stylesheet">

    <!-- Magnific popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepageStudent/css/magnific-popup.css') }}" />

    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('homepageStudent/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepageStudent/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepageStudent/css/owl.transitions.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('homepageStudent/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('homepageStudent/css/style.css') }}" rel="stylesheet">

    <!-- Template Color -->
    <link href="{{ asset('homepageStudent/css/colors/default.css') }}" rel="stylesheet">

</head>

<body>
    @yield('content')

    <!-- Footer -->
    <section class="bg-dark footer" id="contact">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-5">
                    <h5 class="text-white footer-title ">About Testing Vstep Practice</h5>
                    <div class="mt-4">
                        <p class="footer-desc">
                            This is the vstep test system of Greenwich Vietnam Can Tho. This website serves students at the Can Tho campus in taking the vstep test with an interface most similar to reality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <h5 class="text-white footer-title">Address</h5>
                    <div class="mt-4">
                        <p>Greenwich Vietnam Cantho Campus</p>
                        <p>No. 160, St. 30/04, Ninh Kieu District, Cantho City</p>
                    </div>
                </div>
            </div>
            <div class="footer-border"></div>
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="float-end">
                        <p class="mb-0">© Greenwich Vietnam Cantho Campus
                            <script>document.write(new Date().getFullYear())</script>.
                        </p>
                    </div>
                    <div class="">
                        Developed by <a href="mailto:dangminhdat03.forwork@gmail.com"
                        target="_blank">Dang Minh Dat</a> and <a href="mailto:khoahnvithuy@gmail.com" target="_blank">Ho
                            Nhat Khoa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer end -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('homepageStudent/js/jquery.min.js') }}"></script>
    <script src="{{ asset('homepageStudent/js/popper.min.js') }}"></script>
    <script src="{{ asset('homepageStudent/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('homepageStudent/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('homepageStudent/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('homepageStudent/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('homepageStudent/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('homepageStudent/js/jquery.counterup.min.js') }}"></script>
    <!-- common script for all pages -->
    <script src="{{ asset('homepageStudent/js/jquery.app.js') }}"></script>
    <script src="{{ asset('students/assets/js/record_speaking.js') }}"></script>
    <script type="text/javascript">
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                            }
                        });
                });
                a = 1;
            }
        });
    </script>
</body>

</html>
