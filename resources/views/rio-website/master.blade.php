<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant In Online - @yield('title') </title>

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Jquery js -->
    <script src="{{ asset('/') }}rio-website/assets/vendor/jquery/jquery-3.6.4.min.js"></script>

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
            <img src="{{ asset('/') }}rio-website/assets/image/logo.png" alt="">
            <h1>RIO<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            @yield('nav-links')
        </nav><!-- .navbar -->

        <div class="d-flex align-items-center justify-content-between me-auto me-lg-0">
            <a class="btn-book-a-table me-3" href="#book-a-table">Book a Table</a>

            <button type="button" class="btn btn-sm border-1 border-danger position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-cart4" style="font-size: 20px;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>
        </div>
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

<!-- ======= Cart Items ======= -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Your cart</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-dark">
        <div class="h-100 w-100  d-flex align-items-start flex-column">
            <div class="p-2">
                <div class="master-container">
                    <div class="card cart">
                        <label class="title">Your Lunch Items</label>
                        <div class="products">
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                        </div>
                    </div>

                    <div class="card cart">
                        <label class="title">Your Dinner Items</label>
                        <div class="products">
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                            <div class="product">
                                <svg fill="none" viewBox="0 0 60 60" height="60" width="60" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#FFF6EE" rx="8.25" height="60" width="60"></rect>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" fill="#FFB672" d="M34.2812 18H25.7189C21.9755 18 18.7931 20.5252 17.6294 24.0434C17.2463 25.2017 17.0547 25.7808 17.536 26.3904C18.0172 27 18.8007 27 20.3675 27H39.6325C41.1993 27 41.9827 27 42.4639 26.3904C42.9453 25.7808 42.7538 25.2017 42.3707 24.0434C41.207 20.5252 38.0246 18 34.2812 18Z"></path>
                                    <path fill="#FFB672" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5ZM42 36H39.75Z"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M18 36H17.25C16.0074 36 15 34.9926 15 33.75C15 32.5074 16.0074 31.5 17.25 31.5H29.0916C29.6839 31.5 30.263 31.6754 30.7557 32.0039L33.668 33.9453C34.1718 34.2812 34.8282 34.2812 35.332 33.9453L38.2443 32.0039C38.7371 31.6754 39.3161 31.5 39.9084 31.5H42.75C43.9926 31.5 45 32.5074 45 33.75C45 34.9926 43.9926 36 42.75 36H42M18 36L18.6479 38.5914C19.1487 40.5947 20.9486 42 23.0135 42H36.9865C39.0514 42 40.8513 40.5947 41.3521 38.5914L42 36M18 36H28.5M42 36H39.75"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#FF8413" d="M34.512 22.5H34.4982"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.25" stroke="#FF8413" d="M27.75 21.75L26.25 23.25"></path>
                                </svg>
                                <div>
                                    <span>Cheese Burger</span>
                                    <p>Extra Spicy</p>
                                    <p>No mayo</p>
                                </div>
                                <div class="quantity">
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M20 12L4 12"></path>
                                        </svg>
                                    </button>
                                    <label>2</label>
                                    <button>
                                        <svg fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#47484b" d="M12 4V20M20 12H4"></path>
                                        </svg>
                                    </button>
                                </div>
                                <label class="price small">$23.99</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-auto p-2">
                <div class="master-container">
                    <div class="card coupons">
                        <label class="title">Apply coupons</label>
                        <form class="form">
                            <input type="text" placeholder="Apply your coupons here" class="input_field">
                            <button>Apply</button>
                        </form>
                    </div>
                    <div class="card checkout">
                        <label class="title">Checkout</label>
                        <div class="details">
                            <span>Your cart subtotal:</span>
                            <span>47.99$</span>
                            <span>Discount through applied coupons:</span>
                            <span>3.99$</span>
                            <span>Shipping fees:</span>
                            <span>4.99$</span>
                        </div>
                        <div class="checkout--footer">
                            <label class="price"><sup>$</sup>57.99</label>
                            <a href="{{ route('checkout') }}"  class="checkout-btn">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= Cart Items Ends ======= -->

<!-- Vendor JS Files -->
{{--<script src="{{ asset('/') }}rio-website/assets/vendor/jquery/jquery-3.6.4.min.js"></script>--}}
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

@yield('script')

</body>
</html>
