@extends('rio-website.master')

@section('title')
    OurFoods
@endsection

@section('nav-links')
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('our-foods') }}" class="active">Menu</a></li>
        <li><a href="#about">About</a></li>
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

                    @foreach( $categories as $category)
                        @if( $loop->iteration === 1 )
                            <li class="nav-item">
                                <a class="nav-link active  show px-3" data-bs-toggle="tab" data-bs-target="#menu-{{ $category->name }}">
                                    <h4 class="text-capitalize" >{{ $category->name }}</h4>
                                </a>
                            </li><!-- End tab nav item -->
                        @else
                            <li class="nav-item">
                                <a class="nav-link  show px-3" data-bs-toggle="tab" data-bs-target="#menu-{{ $category->name }}">
                                    <h4 class="text-capitalize" >{{ $category->name }}</h4>
                                </a>
                            </li><!-- End tab nav item -->
                        @endif
                    @endforeach

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    @foreach($categories as $category)
                        @if( $loop->iteration === 1 )
                            <div class="tab-pane fade active show" id="menu-{{ $category->name }}">

                                <div class="tab-header text-center">
                                    <p>Menu</p>
                                    <h3>{{ $category->name }}</h3>
                                </div>

                                <div class="row g-3">
                                    @foreach( $category->productCategory as $products)
                                        <div class="col-lg-3 m-auto menu-item">
                                            <div class="card card-body neumorphism" style="width: auto;">
                                                <a href="{{ asset($products->product->image) }}" class="glightbox "><img src="{{ asset($products->product->image) }}" class="menu-img neumo-foods img-fluid" alt="" /></a>
                                                <h4 style="font-size: 17px;">{{ $products->product->name }}</h4>
                                                <p class="ingredients mb-3" style="font-size: 12px;">
                                                    Lorem, deren, trataro, filede, nerada
                                                </p>
                                                <div class="btn btn-sm price neumo-foods-price-btn w-50 m-auto">
                                                    <strike style="color: black">&dollar;{{ $products->product->regular_price }} </strike>
                                                        <?php
                                                        $date1 = date_create($products->product->start_sale_price_date);
                                                        $date2 = date_create($products->product->end_sale_price_date);
                                                        $diff  = date_diff($date1, $date2);
//                                                        echo $diff->format("%R%a days");
                                                        ?>
                                                    / ${{ $products->product->sale_price }}
                                                </div>
                                                <div class="row g-2 mt-2">
                                                    <div class="col-md-3 mt-2">
                                                        <input class="form-control neumo-input p-1" type="number" name="" id=""  placeholder="1" style="font-size: 12px"/>
                                                    </div>
                                                    <div class="col-md-9 mt-2">
                                                        <div class="btn btn-sm neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                                            <i class="bi bi-cart4 me-1"></i>
                                                            ADD TO CARD
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Menu Item -->
                                    @endforeach
                                </div>
                            </div><!-- End {{ $category->name }} Menu Content -->
                        @else
                            <div class="tab-pane fade show" id="menu-{{ $category->name }}">

                                <div class="tab-header text-center">
                                    <p>Menu</p>
                                    <h3>{{ $category->name }}</h3>
                                </div>

                                <div class="row g-3">
                                    @foreach( $category->productCategory as $products)
                                        <div class="col-lg-3 m-auto menu-item">
                                            <div class="card card-body neumorphism" style="width: auto;">
                                                <a href="{{ asset($products->product->image) }}" class="glightbox "><img src="{{ asset($products->product->image) }}" class="menu-img neumo-foods img-fluid" alt="" /></a>
                                                <h4 style="font-size: 17px;">{{ $products->product->name }}</h4>
                                                <p class="ingredients mb-3" style="font-size: 12px;">
                                                    Lorem, deren, trataro, filede, nerada
                                                </p>
                                                <div class="btn btn-sm price neumo-foods-price-btn w-50 m-auto">
                                                    <strike style="color: black">&dollar;{{ $products->product->regular_price }} </strike>
                                                        <?php
                                                        $date1 = date_create($products->product->start_sale_price_date);
                                                        $date2 = date_create($products->product->end_sale_price_date);
                                                        $diff  = date_diff($date1, $date2);
//                                                        echo $diff->format("%R%a days");
                                                        ?>
                                                    / ${{ $products->product->sale_price }}
                                                </div>
                                                <div class="row g-2 mt-2">
                                                    <div class="col-md-3 mt-2">
                                                        <input class="form-control neumo-input p-1" type="number" name="" id=""  placeholder="1" style="font-size: 12px"/>
                                                    </div>
                                                    <div class="col-md-9 mt-2">
                                                        <div class="btn btn-sm neumo-foods-cart-btn w-100 fw-bolder" style="font-size: 15px;">
                                                            <i class="bi bi-cart4 me-1"></i>
                                                            ADD TO CARD
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Menu Item -->
                                    @endforeach
                                </div>
                            </div><!-- End {{ $category->name }} Menu Content -->
                        @endif
                    @endforeach

                </div>

            </div>
        </section><!-- End Menu Section -->

    </main>


@endsection

