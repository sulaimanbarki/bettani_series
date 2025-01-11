<header id="site-header" class="site-header__v1">
    <div class="topbar border-bottom d-none d-md-block">
        <div class="container-fluid px-2 px-md-5 px-xl-8d75">
            <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                <ul class="topbar__nav--left nav ml-md-n3">
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Can we help you?</a></li>
                    <li class="nav-item"><a href="tel:{{ $website->phone }}" class="nav-link link-black-100"><i class="glph-icon flaticon-phone mr-2"></i>{{ $website->phone }}</a></li>
                </ul>
                <ul class="topbar__nav--right nav mr-md-n3">
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-pin"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-switch"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-heart"></i></a></li>
                    <li class="nav-item">
                        @if (!Auth::guest())
                        <a href="{{ url('dashboard') }}" class="nav-link link-black-100">{{ Auth::User()->name }}</a>
                        @else
                        <a id="sidebarNavToggler9" href="javascript:;" role="button" class="px-2 nav-link link-black-100" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-overlay='{
            "className": "u-sidebar-bg-overlay",
            "background": "rgba(0, 0, 0, .7)",
            "animationSpeed": 500
        }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <i class="glph-icon flaticon-user"></i>
                        </a>
                        @endif
                    </li>
                    <li class="nav-item">

                        <a id="sidebarNavToggler1" href="javascript:;" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 500
                                }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <span class="position-absolute bg-dark width-16 height-16 rounded-circle d-flex align-items-center justify-content-center text-white font-size-n9 right-0">{{ count($cart) }}</span>
                            <i class="glph-icon flaticon-icon-126515"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <a href="{{url('/')}}">
        <img src="{{ asset('images/banner.jpg') }}" alt="logo" style="width: 100% !important">
    </a>
    
    <div class="masthead border-bottom position-relative gradientBackground" style="margin-bottom: -1px;">
        <div class="container-fluid px-md-5 py-2 py-md-0">
            <div class="d-flex align-items-center position-relative flex-wrap"  style="line-height: 0 !important">
                <div class="offcanvas-toggler mr-4 mr-lg-8">
                    <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-overlay='{
                            "className": "u-sidebar-bg-overlay",
                            "background": "rgba(0, 0, 0, .7)",
                            "animationSpeed": 100
                        }' data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="100">
                        <svg width="20px" height="18px">
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
                        </svg>
                    </a>
                </div>
                <div class="site-branding pr-md-4" style="padding-top: 6px;">
                    <a href="{{ url('/') }}" class="d-block mb-1">
                        <img src="{{ $website->getMedia('settings')[0]->getUrl('original') }}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="bettani-series-logo"  style="width: 80% !important"></a>
                    </a>
                </div>
                <div class="site-navigation mr-auto d-none d-xl-block">
                    <ul class="nav">

                        <li class="nav-item"><a href="{{ url('/') }}"
                                class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium {{ Request::is('/') ? 'active border-bottom border-primary border-width-2' : '' }} ">
                                <i class="bi bi-house-check-fill mr-2"></i>
                                Home
                                {{-- home icon --}}
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{ url('books') }}"
                                class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium {{ Request::is('books') ? 'active border-bottom border-primary border-width-2' : '' }} ">
                                <i class="bi bi-book-fill mr-2"></i>
                                Books
                                {{-- books icon --}}
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{ url('about-us') }}"
                                class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium {{ Request::is('about-us') ? 'active border-bottom border-primary border-width-2' : '' }} ">
                                <i class="bi bi-info-circle-fill mr-2"></i>
                                About Us
                                {{-- about us icon --}}
                            </a></li>
                        <li class="nav-item"><a href="{{ url('contact-us') }}"
                                class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium {{ Request::is('contact-us') ? 'active border-bottom border-primary border-width-2' : '' }} ">
                                <i class="bi bi-telephone-fill mr-2"></i>
                                Contact Us
                                {{-- contact us icon --}}

                            </a></li>
                        <li class="nav-item"><a href="{{ url('test') }}"
                                class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium {{ Request::is('contact-us') ? 'active border-bottom border-primary border-width-2' : '' }} ">
                                <i class="bi bi-pencil-fill mr-2"></i>
                                Test
                                {{-- contact us icon --}}
                            </a>
                        </li>

                        {{-- intro videos is dropdown list for pc and mobile user --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link link-black-100 mx-4 px-0 py-3 font-weight-medium dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-film mr-2"></i>
                                Videos
                            </a>
                            

                            @php
                                $menu = App\Models\DropDownMenu::where('parent_id', null)->where('is_active', 1)->orderBy('order')->get();
                            @endphp
                            @if ($menu->count() > 0)
                                <ul class="dropdown-menu py-2" style="" aria-labelledby="navbarDropdown">
                                    @php
                                        $counter = 1;
                                    @endphp
                                    @foreach ($menu as $item)

                                        @php
                                            $subMenu = App\Models\DropDownMenu::where('parent_id', $item->id)->where('is_active', 1)->orderBy('order')->get();
                                        @endphp

                                        <li class="parent_li">
                                        @if ($subMenu->count() > 0)
                                            <a class="dropdown-item py-3 dropdown-toggle" id="{{$counter}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ $item->title }} 
                                            </a>
                                            <ul class="submenu2 py-2" aria-labelledby="{{$counter}}" >
                                                @foreach ($subMenu as $subItem)
                                                <li>
                                                    <a class="dropdown-item py-3" href="videos/{{ $subItem->slug }}">{{ $subItem->title }}</a>
                                                </li>
                                                @endforeach
                                            </ul>

                                            @php
                                                $counter++;
                                            @endphp
                                        @else
                                        <a class="dropdown-item py-3" href="videos/{{ $item->slug }}">{{ $item->title }}</a>
                                        @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        <style>
                            .parent_li {
                                position: relative;
                            }
                            .submenu2 {
                                position: absolute;
                                left: 100%;
                                top: 0;
                                display: none;
                                list-style: none;
                                /* margin: 2px; */
                                padding: 2px;
                                background-color: #fff;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-shadow: 0 6px 12px rgba(0,0,0,.175);
                                z-index: 1000;
                            }
                            .submenu2 li {
                                position: relative;
                            }
                            .submenu2 li a {
                                display: block;
                                /* padding: 3px 20px; */
                                /* clear: both; */
                                font-weight: normal;
                                /* line-height: 1.42857143; */
                                color: #333;
                                white-space: nowrap;
                                width: 240px;
                            }
                            .parent_li:hover > .submenu2 {
                                display: block;
                            }
                        </style>


                        {{-- <div class="dropdown-menu" style="padding-top: 0.5rem !important; padding-bottom: 0.5rem !important" aria-labelledby="navbarDropdown">
                            @foreach ($menu as $item)

                                @php
                                    $subMenu = App\Models\DropDownMenu::where('parent_id', $item->id)->where('is_active', 1)->get();
                                @endphp

                                @if ($subMenu->count() > 0)
                                    <a class="dropdown-item dropdown-toggle py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $item->title }}
                                    </a>
                                    <div class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($subMenu as $subItem)
                                            <a class="dropdown-item py-3" href="{{ url($subItem->slug) }}">{{ $subItem->title }}</a>
                                        @endforeach
                                    </div>
                                @else
                                <a class="dropdown-item py-3" href="{{ url($item->slug) }}">{{ $item->title }}</a>
                                @endif
                            @endforeach
                        </div> --}}


                    </ul>
                </div>
                <ul class="d-md-none nav mr-md-n3 ml-auto">
                    <li class="nav-item">
                        @if (!Auth::guest())
                        @ELSE
                        <a id="sidebarNavToggler9" href="javascript:;" role="button" class="px-2 nav-link link-black-100" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 500
                                }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <i class="glph-icon flaticon-user"></i>
                        </a>
                        @endif

                    </li>
                </ul>
                {{-- <div class="d-none d-lg-block site-search ml-xl-0 ml-md-auto w-r-100 my-1 my-xl-0 ">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                            </div>
                            <input class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" type="search" placeholder="Search for Books by Keyword ..." aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Search</button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</header>