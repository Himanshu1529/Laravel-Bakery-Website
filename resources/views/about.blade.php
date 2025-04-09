@extends('layouts/app')
@section('content')
 <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                        <h1 class="display-6">A Legacy of Taste Since 1998</h1>
                        <p>Welcome to Hindustan Next Taste, where tradition meets taste! Founded in 1998 by my grandfather, our bakery has been a symbol of quality, freshness, and authentic flavors for over two decades. What started as a small passion-driven venture has now grown into a beloved name in the community, known for its delicious cakes, pastries, and baked goods.</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Freshly Baked Goodness – Every product is baked with the finest ingredients.
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Authentic Recipes – Rooted in tradition, refined for today's taste.
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Wide Range of Treats – Cakes, cookies, bread, and more for every occasion.
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Customer Satisfaction – Your happiness is our priority.
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a> -->
                        <div>
                            <h1 class="display-6">
                                Carrying Forward a Tradition of Excellence
                            </h1>
                            <p>
                                I am Arun Rathee, and I take pride in continuing my grandfather's legacy by bringing you the finest baked products made with love, premium ingredients, and a commitment to taste. At Hindustan Next Taste, we blend time-honored recipes with modern baking techniques to ensure every bite is a delightful experience.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Whether you're celebrating a special occasion or simply indulging in a sweet treat, Hindustan Next Taste is here to make every moment memorable.</p>
                <p class="mt-0">📍 Visit Us Today! Experience the taste of tradition at our bakery.</p>
            </div>
        </div>
    </div>
    <!-- About End -->


@endsection