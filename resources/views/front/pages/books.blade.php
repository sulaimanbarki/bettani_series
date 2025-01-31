@extends('front/layout/layout')

{{-- @section('title', 'Books - MCQ Collection') <!-- SEO Title --> --}}
@section('meta_description', 'Explore a wide collection of MCQs from various subjects, books, and categories. Enhance your learning and preparation.') <!-- Meta Description -->
@section('meta_keywords', 'MCQs, Books, Online MCQs, MCQ Collection, Bettani Series') <!-- Meta Keywords -->

@section('content')
@section('title','Books')
<div class="page-header mb-8">
    <div class="bg-img-hero bg-gradient-primary" style="background-image: url(../../assets/img/1920x840/img1.jpg);">
        <div class="container position-relative mb-2">
            <div class="d-flex justify-content-center space-2 space-lg-4">
                <h6 class="font-weight-medium text-white font-size-12 py-lg-5">Books</h6>
            </div>
            <script type="text/javascript">
            	atOptions = {
            		'key' : '8289a9236ddcfa77abaf7c470e453b65',
            		'format' : 'iframe',
            		'height' : 60,
            		'width' : 468,
            		'params' : {}
            	};
            	document.write('');
            </script>
            <nav class="woocommerce-breadcrumb font-size-2 d-flex justify-content-center align-items-center pb-4">
                <a class="text-white" href="{{url('/')}}">Home</a>
                <span class="breadcrumb-separator text-white mx-1"><i class="fas fa-angle-right"></i></span>
                <span class="text-white">Books</span>
            </nav>
        </div>
    </div>
</div>
<div class="site-content" id="content">
    <div class="container">
        <div class="row">
            <div id="primary" class="container">
                <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                    <div class="shop-control-bar__left mb-4 m-lg-0">
                        <!-- <p class="woocommerce-result-count m-0">Showing 1–12 of 126 results</p> -->
                    </div>
                    
                </div>

                <div class="tab-content p-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">

                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                            @foreach($books as $key=> $book)


                            <?php
                            $bookImageUrl = "#";
                            $bookpdf = '#';
                            if (count($book->getMedia('books')) > 0) {
                                if ($book->getMedia('books')[0]->hasGeneratedConversion('150x226')) {
                                    $bookImageUrl = $book->getMedia('books')[0]->getUrl('150x226');
                                }
                            }

                            if (count($book->getMedia('pdf'))) {
                                $bookpdf = $book->getMedia('pdf')[0]->getUrl();
                            }
                            ?>
                            <li class="product col">
                                @if ($book->status == 4)
                                    <img src="{{ asset('images/free.png') }}" class="blink" style="width: 60px; position: absolute; z-index: 9999;" alt="">
                                @endif 
                                @if ($book->status == 5)
                                    <img src="{{ asset('images/coming_soon.png') }}" class="blink" style="width: 60px; position: absolute; z-index: 9999;" alt="">
                                @endif
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            @if ($book->status == 5)
                                            <a class="d-block"><img src="{{  $bookImageUrl}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="{{$book->title}}-image"></a>                                                
                                            @else
                                            <a href="{{url('book',$book->slug)}}" class="d-block"><img src="{{  $bookImageUrl}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="{{$book->title}}-image"></a>                                                
                                            @endif
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                                @if ($book->status == 5)
                                                    <a href="javascript:void(0)">Paperback</a>
                                                @else
                                                    <a href="{{ url('book', $book->slug) }}">Paperback</a>
                                                @endif
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                @if ($book->status == 5)
                                                    <a >{{$book->title}}</a>
                                                @else
                                                    <a href="{{url('book',$book->slug)}}">{{$book->title}}</a>
                                                @endif
                                            </h2>
                                            {{-- <div class="font-size-2  mb-1 text-truncate"><a href="{{url('author', $book->author->slug)}}" class="text-gray-700">{{$book->author['name']}}</a></div> --}}
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <!-- <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{$website->currency_symbol}}</span>{{$book->price}}</span> -->
                                            </div>
                                        </div>
                                        @if ($book->status == 5)
                                            <button class="btn btn-sm btn-success btn-block">
                                                Coming Soon
                                            </button>
                                        @else
                                        <div class=" d-flex  align-items-center pt mobile-display">
                                            @if($bookpdf!='#')
                                            <a href="#" class="btn btn-sm btn-success mr-1">
                                                Pdf Content
                                            </a>
                                            @endif

                                            <a href="{{url('book',$book->slug)}}" class="btn btn-sm btn-primary mr-1">
                                                Read Online
                                            </a>

                                            @if($book->is_hard==true)
                                            <a href="{{url('items/add?slug=')}}{{$book->slug}}&type=order"
                                                class="btn btn-sm btn-success mr-1">
                                                <span>Online Order</span>
                                            </a>

                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>

                </div>

                <nav aria-label="Page navigation example ">
                    {{ $books->render("pagination::bootstrap-4") }}
                </nav>
            </div>
            <div id="secondary" class="sidebar widget-area order-1" role="complementary">
            </div>
        </div>
    </div>
</div>
@endsection