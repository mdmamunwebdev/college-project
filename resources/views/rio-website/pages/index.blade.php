@extends('rio-website.master')

@section('title')
    Home
@endsection

@section('nav-links')
    <ul>
        <li><a href="{{ route('home') }}" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="{{ route('our-foods') }}">Menu</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#chefs">Chefs</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
@endsection

@section('main-content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center ">
        <div class="container neumorphism pb-2">
            <div class="row neumorphism p-5">
                <div class="col-md-12">
                    <h1>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im Si.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-between gy-2  p-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start numorphism rounded-circle">
                    <img src="{{ asset('/') }}rio-website/assets/image/hero-img.png" class="img-fluid" alt="" data-aos="ease-in" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
