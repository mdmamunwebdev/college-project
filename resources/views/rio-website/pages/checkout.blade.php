@extends('rio-website.master')

@section('title')
    Checkout
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

        checkout

    </main>

@endsection

