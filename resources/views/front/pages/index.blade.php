@extends('front/layout/layout')
@section('title', 'Home')
@section('content')

<style>
    .a-slide {
        height: 100%;
        width: 100%;
        background-size: cover !important;
    }

    .slick-slider {
        height: 100%;
    }



    .fill {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden
    }

    .fill img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%
    }
</style>

<div class="row" style="background-image: url({{ asset('UI/assets/img/1920x588/img1.jpg') }}); "  id="hideOverflow">
    <div class="col-sm-6" style="padding-right: 0 !important; padding-left: 0 !important;">
        <div class="js-slick-carousel u-slick " data-pagi-classes="text-center  u-slick__pagination position-absolute right-0 left-0  bottom-0" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay":true}'>
            @foreach ($leftslides as $key => $slide)
            <?php
            $ImageUrl = '#';
            if (count($slide->getMedia('slide')) > 0) {
                if ($slide->getMedia('slide')[0]->hasGeneratedConversion('800x420')) {
                    $ImageUrl = $slide->getMedia('slide')[0]->getUrl('800x420');
                }
            }
            ?>
            <div class="js-slide fill">
                <div data-animation-in="fadeIn" data-delay-in="2" data-duration-in="2" data-animation-out="fadeOUt" data-delay-out="2" data-duration-out="2">
                    <img class="img-fluid" src="{{ $ImageUrl }}" alt="image-description">
                </div>

            </div>
            @endforeach
        </div>
    </div>
    <div class="col-sm-6 paddin-top" style="padding-left: 0 !important; padding-right: 0 !important">
        <style>
    /* paddin-top when on small screen then padding 100px top */
    @media (max-width: 767px) {
        .paddin-top {
            padding-top: 10px !important;
        }
    }
</style>
        <div class="js-slick-carousel u-slick" data-pagi-classes="text-center u-slick__pagination  position-absolute right-0 left-0  bottom-0" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay":true}'>
            @foreach ($rightslides as $key => $slide)
            <?php
            $ImageUrl = '#';
            if (count($slide->getMedia('slide')) > 0) {
                if ($slide->getMedia('slide')[0]->hasGeneratedConversion('800x420')) {
                    $ImageUrl = $slide->getMedia('slide')[0]->getUrl('800x420');
                }
            }
            ?>
            <div class="js-slide fill">
                <div data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                    <img class="img-fluid" src="{{ $ImageUrl }}" alt="image-description">
                    <span class="text-center font-size-48 font-weight-bold mb-0">{!!$slide->description!!}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<section class="space-bottom-3 pt-4">
    <header class="mb-4 container">
        <h2 class="font-size-7 text-center">Bettani Series Books</h2>
    </header>
    <div class="container">
        <ul class="nav justify-content-center justify-content-sm-center nav-gray-700 mb-5 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" id="featuredBooks" role="tablist">
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                {{-- hand gesture --}}
                <a class="nav-link px-0" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">
                    {{-- hand direction symbol --}}
                    <div class="d-flex flex-column align-items-center">
                        <span class="font-size-10 text-primary mb-2">
                            {{-- text color black --}}

                            
                            <i class="fas fa-hand-point-down">
                                {{-- down direction --}}
                                </i></span>
                    </div>
                </a>
            </li>

        </ul>
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
        <div class="tab-content" id="featuredBooksContent">
            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                    @foreach ($books as $key => $book)
                    <?php
                    $bookImageUrl = '#';
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
                                    {{-- <div class="font-size-2  mb-1 text-truncate"><a href="{{ url('author', $book->author->slug) }}" class="text-gray-700">{{ $book->author['name'] }}</a></div> --}}
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <!-- <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ $website->currency_symbol }}</span>{{ $book->price }}</span> -->
                                    </div>
                                </div>
                                
                                @if ($book->status == 5)
                                    <button class="btn btn-sm btn-success btn-block">
                                        Coming Soon
                                    </button>
                                @else 
                                    <div class=" d-flex  align-items-center pt mobile-display">
                                        @if ($bookpdf != '#')
                                        <a href="{{ $bookpdf }}" class="btn btn-sm btn-success">
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
    </div>
</section>

<section class="space-bottom-3">
    <div class="container">
        <header class="d-md-flex justify-content-between align-items-center mb-8">
            <h2 class="font-size-7 mb-3 mb-md-0">Favorite Authors</h2>
            <a href="{{ url('authors') }}" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
        </header>
        <ul class="row rows-cols-5 no-gutters authors list-unstyled js-slick-carousel u-slick" data-slides-show="{{ count($authors) }}" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-responsive='[{
                    "breakpoint": 1025,
                    "settings": {
                        "slidesToShow": 3
                    }
                }, {
                    "breakpoint": 992,
                    "settings": {
                        "slidesToShow": 2
                    }
                }, {
                    "breakpoint": 768,
                    "settings": {
                        "slidesToShow": 1
                    }
                }, {
                    "breakpoint": 554,
                    "settings": {
                        "slidesToShow": 1
                    }
                }]'>

            @foreach ($authors as $key => $author)
            <li class="author col">
                <a href="{{ url('authors', $author->slug) }}" class="text-reset">
                    <img src="{{ $author->getMedia('authors')[0]->getUrl('thumbnail') }}" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">{{ $author->name }}</h2>
                        <div class="text-gray-700 font-size-2">{{ count($author->books) }} Published Books</div>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</section>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        // $('.slideleft').slick({
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 2000,
        //     dots: false,
        //     prevArrow: false,
        //     nextArrow: false
        // });
    });
</script>

@endsection