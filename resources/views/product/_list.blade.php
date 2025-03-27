<div class="products mb-3">
    <div class="row justify-content-center">
        @foreach($getProduct as $value)
            @php
                $getProductImage = $value->getImageSingle($value->id);
            @endphp
	    <div class="col-6 col-md-4 col-lg-4 mb-4">
	        <div class="card product-card text-center shadow-sm border-0">
	            <a href="{{ url($value->slug) }}" class="product-image">
	                @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
	                    <img src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="card-img-top img-fluid" style="object-fit: cover; border-radius: 8px;">
	                @endif
	            </a>
	            <div class="card-body">
	                <div class="product-cat text-muted">
	                    <a href="{{ url($value->category_slug.'/'.$value->sub_category_slug) }}" class="text-decoration-none">{{ $value->sub_category_name }}</a>
	                </div>
	                <h5 class="product-title">
	                    <a href="{{ url($value->slug) }}" class="text-dark text-decoration-none">{{ $value->title }}</a>
	                </h5>
	                <div class="product-price text-primary fw-bold">
	                    ₹{{ number_format($value->price, 2) }}
	                </div>
	            </div>
	        </div>
	    </div>
    	@endforeach
	</div>
</div>

<!-- Pagination -->
<div  class="d-flex  mt-3">
    {!! $getProduct->appends(request()->except('page'))->links('pagination::simple-bootstrap-4') !!}
</div>
