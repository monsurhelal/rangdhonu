@extends('frontend.layout.master')

@section('main_content')
@include('frontend.layout.inc.slider')

<div class="mb-4"></div><!-- End .mb-2 -->

@include('frontend.layout.inc.Category')
<div class="mb-3"></div><!-- End .mb-3 -->
<div class="container clothing ">
    <div class="heading heading-flex heading-border mb-3">
        <div class="heading-left mb-3">
            <h2 class="title">Clothing & Apparel</h2><!-- End .title -->
        </div><!-- End .heading-left -->
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="clot-new-tab" role="tabpanel" aria-labelledby="clot-new-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1280": {
                            "items":5,
                            "nav": true
                        }
                    }
                }'>

                @foreach ($products as $product)
                    <div class="product">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('assets/backend/uploads/products') }}/{{ $product->product_image }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                         </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{ $product->getCategory->category_name }}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('product.page',$product->product_slug) }}">{{ $product->product_title }}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                ৳{{ $product->product_price }}
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                @endforeach
                
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container -->
@endsection