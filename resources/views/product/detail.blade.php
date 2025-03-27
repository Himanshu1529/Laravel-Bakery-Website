@extends('layouts.app')
@section('content')
<style>
    .custom-prev, .custom-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 18px;
        z-index: 10;
    }
    .custom-prev { left: -40px; }
    .custom-next { right: -40px; }
    .custom-prev:hover, .custom-next:hover { background: rgba(0, 0, 0, 0.8); }

     .small-img {
        height: 100px; /* Default height */
        object-fit: cover;
    }
     .custom-nav .nav-link {
        border: 2px solid transparent; /* Pehle koi border nahi rahega */
        color: #EAA636; /* Default text color */
        transition: all 0.3s ease-in-out;
    }

    /* Jab active ya hover ho tab sirf outline aaye */
    .custom-nav .nav-link.active,
    .custom-nav .nav-link:focus,
    .custom-nav .nav-link:hover {
        border: 2px solid #EAA636; /* Outline color */
        background-color: transparent !important; /* Background change nahi hoga */
        color: black; /* Text color */
    }

    @media (max-width: 768px) {
        .small-img {
            height: 60px; /* Choti screen pe aur choti ho jayegi */
        }

        #product-zoom-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
        }

        .product-gallery-item {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .small-img {
            height: 60px; /* Mobile pe aur choti ho jayegi */
        }
    }
    @keyframes phoneRing {
        0% { transform: rotate(0deg); }
        20% { transform: rotate(-15deg); }
        40% { transform: rotate(15deg); }
        60% { transform: rotate(-10deg); }
        80% { transform: rotate(10deg); }
        100% { transform: rotate(0deg); }
    }

    .animated-phone {
        display: inline-block;
        animation: phoneRing 0.6s ease-in-out infinite;
        animation-delay: 3s; /* Har 3 second baad repeat hoga */
    }
</style>

<div class="container-fluid page-header mb-2 py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{$getProduct->title}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li> -->
                <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                <!-- <li class="breadcrumb-item text-white" aria-current="page">Products</li> -->
                @if(!empty($getSubCategory))
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $getSubCategory->name }}</li>
                @elseif(!empty($getCategory))
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $getCategory->name }}</li>
                @endif
            </ol>
        </nav>
    </div>
</div>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url($getProduct->getCategory->slug) }}">{{$getProduct->getCategory->name}}</a></li>
                <li class="breadcrumb-item"><a href="{{ url($getProduct->getCategory->slug.'/'.$getProduct->getSubCategory->slug) }}">{{$getProduct->getSubCategory->name}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$getProduct->title}}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <hr class="mt-0">


    <div class="page-content">
        <div class="container">
            <div class="product-details-top mb-2">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-gallery">
                            <figure class="product-main-image">
                                @php
                                    $getProductImage = $getProduct->getImageSingle($getProduct->id);
                                @endphp
                                @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                    <img id="product-zoom" class="img-fluid main-image" src="{{ $getProductImage->getLogo() }}" data-zoom-image="{{ $getProductImage->getLogo() }}" alt="{{$getProductImage->title}}">
                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                @endif
                            </figure>
                            <!-- End .product-main-image -->
                            <div id="product-zoom-gallery" class="row justify-content-center">
                                @foreach($getProduct->getImage as $image)
                                    <div class="col-2 col-md-3">
                                        <a class="product-gallery-item" href="#" data-image="{{$image->getLogo()}}" data-zoom-image="{{$image->getLogo()}}">
                                            <img src="{{$image->getLogo()}}" class="img-fluid small-img" alt="product side">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details">
                            <small style="letter-spacing: 3px;" class="text-primary">HNT- Hindustand Next Taste</small>
                            <h2 style="letter-spacing: 5px;" class="product-title">{{$getProduct->title}}</h2>
                        <div class="ratings-container">
                            <div class="product-content">
                                <p>{{$getProduct->short_description}} </p>
                            </div><!-- End .product-content -->

                            <div class="product-price" style="margin-top: 60px">
                                <h3 class="text-primary" id="getTotalPrice">₹{{ number_format($getProduct->price,2) }}</h3>
                                 <small>Incl. of all taxes</small>
                            </div><!-- End .product-price -->  
                            <div class="row mt-3">
                                <span>Weight</span>
                                @foreach($getProduct->getSize as $size)
                                    <div class="col-md-3 mb-2 text-center">
                                        <span style="border: 1px solid #EAA636; padding: 5px; display: block; text-align: center;">
                                            {{$size->name}}
                                        </span>
                                        <small class="d-block text-primary">@if(!empty($size->price)) (₹{{ number_format($size->price,2) }}) @endif</small> <!-- Center aligned -->
                                    </div>
                                @endforeach
                            </div>

                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Category:</span>
                                    <a href="{{ url($getProduct->getCategory->slug) }}">{{$getProduct->getCategory->name}}</a>,
                                    <a href="{{ url($getProduct->getCategory->slug.'/'.$getProduct->getSubCategory->slug) }}">{{$getProduct->getSubCategory->name}}</a>
                                </div>
                            </div><!-- End .product-details-footer -->
                            <hr>
                            <div class="container">
                                <div class="bg-primary text-light rounded-bottom p-3 my-2 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-lg-6">
                                            <small class="display-6 text-light mb-0">The Best Bakery In Your City</small>
                                        </div>
                                        <div class="col-lg-6 text-lg-end">
                                            <div class="d-inline-flex align-items-center text-start">
                                                <i class="fa fa-phone-alt fa-4x flex-shrink-0 animated-phone"></i>
                                                <div class="ms-2">
                                                    <a href="tel:+917494911175" class="text-decoration-none text-white">
                                                    <p class=" fw-bold mb-0">Call Us</p>
                                                    <p class="fw-bold mb-0">
                                                        +91 749 4911 175</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="product-details-tab product-details-extended mt-5">
                                <div class="container">
                                    <ul class="nav nav-pills justify-content-center custom-nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="product-desc-link" data-bs-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="product-info-link" data-bs-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="product-shipping-link" data-bs-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                                        </li>
                                    </ul>
                                    <hr>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                    <div class="product-desc-content">
                                        <div class="container">
                                            {!! $getProduct->description !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                    <div class="product-desc-content">
                                        <div class="container">
                                            {!! $getProduct->additional_info !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                    <div class="product-desc-content">
                                        <div class="container">
                                            {!! $getProduct->shipping_returns !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .product-details -->
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .product-details-top -->
    </div><!-- End .container -->
                <!-- Testimonial Start -->
    <div class="container-xxl my-3 py-3 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-primary mb-4">You May Also Like</h1>
            </div>
            <div class="position-relative">
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach($getRelatedProduct as $value)
                        @php
                            $getProductImage = $value->getImageSingle($value->id);
                        @endphp
                        <div class="testimonial-item bg-white rounded p-4 text-center">
                            <a href="{{ url($value->slug) }}" class="d-block">
                                @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                    <div class="img-container">
                                        <img src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="img-fluid  w-100 h-100">
                                    </div>
                                @endif
                            </a>
                            <h3 class="product-title mt-3">
                                <a href="{{ url($value->slug) }}" class="text-dark">{{ $value->title }}</a>
                            </h3>
                        </div>
                    @endforeach
                </div>
                    <!-- Navigation buttons -->
                <button class="custom-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="custom-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>
</main><!-- End .main -->




<!-- Include jQuery & Owl Carousel JS (Ensure these are loaded) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        var owl = $(".testimonial-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false, // Hide default navigation
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        // Custom navigation
        $(".custom-prev").click(function() {
            owl.trigger("prev.owl.carousel");
        });

        $(".custom-next").click(function() {
            owl.trigger("next.owl.carousel");
        });
    });
</script>

    <script>


            document.addEventListener("DOMContentLoaded", function() {
        let mainImage = document.getElementById("product-zoom");
        let galleryItems = document.querySelectorAll(".product-gallery-item");

        galleryItems.forEach(item => {
            item.addEventListener("click", function(e) {
                e.preventDefault();
                let newImage = this.getAttribute("data-image");
                mainImage.src = newImage;
                mainImage.setAttribute("data-zoom-image", newImage);
            });
        });
    });
    </script>

@endsection