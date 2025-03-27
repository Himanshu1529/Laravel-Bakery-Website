@extends('layouts.app')
@section('style')
<style>
	.active-color{
		border: 2px solid black;
	}
</style>
@endsection
@section('content')
<div class="container-fluid page-header mb-2 py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
       	<nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white" aria-current="page">Products</li>
                @if(!empty($getSubCategory))
        			<li class="breadcrumb-item text-primary active" aria-current="page">{{ $getSubCategory->name }}</li>
        		@elseif(!empty($getCategory))
        			<li class="breadcrumb-item text-primary active" aria-current="page">{{ $getCategory->name }}</li>
                @else
                  	<li class="breadcrumb-item text-primary active" aria-current="page">Search for {{ Request::get('q') }}</li>
        		@endif
            </ol>
        </nav>
    </div>
</div>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Product</a></li>
                @if(!empty($getSubCategory))
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{url($getCategory->slug)}}">{{ $getCategory->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $getSubCategory->name }}</li>
                @elseif(!empty($getCategory))
                    <li class="breadcrumb-item active" aria-current="page">{{ $getCategory->name }}</li>
                @endif
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
	<hr>
	<div class="page-content">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-9">
	                <div id="getProductAjax">
	                    @include('product._list')
	                </div>
	            </div><!-- End .col-lg-9 -->
	        </div><!-- End .row -->
	    </div><!-- End .container -->
	</div><!-- End .page-content -->
</main><!-- End .main -->	
@endsection