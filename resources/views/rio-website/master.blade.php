<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant In Online - @yield('title') </title>

    <!-- Favicons -->
    <link href="{{ asset('/') }}rio-website/assets/image/favicon.png" rel="icon">
    <link href="{{ asset('/') }}rio-website/assets/image/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}rio-website/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}rio-website/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}rio-website/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/') }}rio-website/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}rio-website/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/') }}rio-website/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}rio-website/assets/css/style.css">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="neumo-head header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!--             <img src="assets/image/logo.png" alt="">-->
            <h1>RIO<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            @yield('nav-links')
        </nav><!-- .navbar -->

        <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header ><!-- End Header -->

<main>
    @yield('main-content')
</main>

<!-- ======= Footer ======= -->
<footer class="text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    &copy; Copyright <strong><span>RIO</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">Abdullah Al Mamun</a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="{{ asset('/') }}rio-website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}rio-website/assets/vendor/aos/aos.js"></script>
<script src="{{ asset('/') }}rio-website/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('/') }}rio-website/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{ asset('/') }}rio-website/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/') }}rio-website/assets/vendor/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="{{ asset('/') }}rio-website/assets/js/main.js"></script>

<script type="text/javascript">
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
</body>
</html>
