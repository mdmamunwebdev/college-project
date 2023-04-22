@extends('rio-website.master')

@section('title')
    OurFoods
@endsection

@section('nav-links')
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="{{ route('our-foods') }}" class="active">Menu</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#chefs">Chefs</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
@endsection

@section('main-content')

    <main id="main" class="main">

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container neumorphism p-5" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p>Check Our <span>Yummy Menu</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center neumo-active" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show px-3" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Starters</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link px-3" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Breakfast</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link px-3" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link px-3" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Starters</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="glightbox "><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="menu-img neumo-foods img-fluid" alt="" /></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="menu-img neumo-foods img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="menu-img neumo-foods img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="menu-img neumo-foods img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="menu-img neumo-foods img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="menu-img neumo-foods img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <div class="btn price neumo-foods-price-btn">
                                    <strike style="color: black">&dollar;10.95 </strike>/ $5.95
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-3 mt-2">
                                        <input class="form-control neumo-input" type="number" name="" id=""  placeholder="1">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <div class="btn neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                            <i class="bi bi-cart4 me-1"></i>
                                            ADD TO CARD
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Breakfast</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="menu-img  img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Lunch</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Dinner</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('/') }}rio-website/assets/image/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>
        </section><!-- End Menu Section -->

    </main>

@endsection

