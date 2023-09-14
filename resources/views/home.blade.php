@extends('app')

@section('title', 'NaksheBanwao')

@section('body')

<!-- Header Section -->
<x-header />
<!-- End Header Section -->

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1> अब घर बनेगा ONLINE</h1>
                <h2>Transforming Dreams Into Timeless Spaces</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#contact" class="btn-get-started scrollto">Contact</a>
                    <a href="https://www.youtube.com/@nakshebanwaoonline" class="btn-watch-video" target="_blank"><i class="bi bi-play-circle"></i><span>YouTube</span></a>
                    <!-- <a href="https://www.youtube.com/@nakshebanwaoonline" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->
@endsection
