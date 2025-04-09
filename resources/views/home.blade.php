@extends('layouts/app')
@section('content')

 <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('client/img/carousel-1.svg')}}" alt="">
                
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('client/img/carousel-2.svg')}}" alt="">
            </div>
            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('client/img/carousel-3.png')}}" alt="">
            </div> -->
        </div>
    </div>
    <!-- Carousel End -->


<!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Years Experience</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">2</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Skilled Professionals</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-bread-slice fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Total Products</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">40</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-cart-plus fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Order Everyday</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1200</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{url('client/img/about-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{url('client/img/about-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">// About Us</p>
                        <h1 class="display-6 mb-4">Baking with Love, Freshness & Perfection</h1>
                        <p>At HNT Bakers, we bring you the finest <b>freshly baked bread, cakes, pastries, and cookies</b>, crafted with love and the highest quality ingredients. Every bite is a delightful experience, made to satisfy your sweet cravings and bring warmth to every occasion.</p>
                        <p>From <b>classic flavors to custom creations</b>, we take pride in offering delicious, handmade treats that make your moments special. Whether you need a <b>birthday cake, festive desserts, or daily fresh bread</b>, we have something for everyone.</p>
                        
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i> Fresh & Quality Ingredients
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i> Custom Cakes & Pastries
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i> Easy Online Ordering
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i> Fast & Safe Home Delivery
                            </div>
                        </div>
                        
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">The Best Bakery In Your City</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+91 749 4911 175</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
                <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
            </div>
            <div class="row g-4">
                @foreach($getProduct->take(6) as $value)
                    @php
                        $getProductImage = $value->getImageSingle($value->id);
                    @endphp
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">₹{{$value->price}} - ₹{{$value->old_price}}</div>
                                <h3 class="mb-3">{{$value->title}}</h3>
                            </div>
                            <div class="position-relative mt-auto">
                                @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                    <img style="object-fit: cover; aspect-ratio: 4/3;" src="{{ $getProductImage->getLogo() }}" alt="{{$value->title}}" class="product-image img-fluid">
                                @endif
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ url($value->slug) }}">
                                        <i class="fa fa-eye text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-primary text-uppercase mb-2">// Our Services</p>
                    <h1 class="display-6 mb-4">What Do We Offer For You?</h1>
                    <p class="mb-5">At Hindustan Next Taste (HNT) Bakery, we take pride in offering a delightful range of freshly baked goods, including bread, cakes, pastries, and cookies. Our customized cakes are perfect for birthdays, weddings, and special occasions, designed to match your vision. We also provide home delivery in Sonipat, making it easy to enjoy our treats from the comfort of your home. Whether you're looking for eggless, sugar-free, or gluten-free options, we cater to all dietary needs. Additionally, we offer event catering and bulk orders for corporate gatherings and celebrations. Experience the perfect blend of taste, quality, and tradition with HNT Bakery!</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-bread-slice text-white"></i>
                                </div>
                                <h5 class="mb-0">Freshly Baked Goods</h5>
                            </div>
                            <span>Enjoy daily fresh bread, cookies, cakes, and pastries made with premium ingredients.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-birthday-cake text-white"></i>
                                </div>
                                <h5 class="mb-0">Customized Cakes & Desserts</h5>
                            </div>
                            <span>Order personalized cakes for birthdays, weddings, and special occasions with unique designs and flavors.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cart-plus text-white"></i>
                                </div>
                                <h5 class="mb-0">Online Ordering & Home Delivery</h5>
                            </div>
                            <span>Get your favorite baked treats delivered straight to your doorstep in Sonipat, Haryana.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <h5 class="mb-0">Corporate Orders & Bulk Supplies</h5>
                            </div>
                            <span>Place large bakery orders for offices, cafes, and events at special rates.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{url('client/img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{url('client/img/service-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    
<!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Client's Review</p>
                <h1 class="display-6 mb-4">More Than 20000+ Customers Trusted Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($getReview as $value)
                    <div class="testimonial-item bg-white rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="flex-shrink-0 rounded-circle border p-1" src="{{url('public/'.$value->image)}}" alt="">
                            <div class="ms-4">
                                <h5 class="mb-1">{{$value->name}}</h5>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="mb-0">{{$value->message}}</p>
                    </div>
                @endforeach
            </div>
            <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 text-light mb-0">Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="position-relative">
                            <input class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection