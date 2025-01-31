<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title') - Bettani Series </title>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ URL::to('/') }}">

    <meta name="description" content="@yield('meta_description', 'Default meta description here')">
    <meta name="keywords" content="@yield('meta_keywords', 'default, keywords, here')">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph for social media sharing -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Bettani Series')">
    <meta property="og:description" content="@yield('meta_description', 'Default meta description here')">
    @php
        $og_image = $website->getMedia('settings')[0]->getUrl('original');
    @endphp
    <meta property="og:image" content="@yield('og_image', $og_image)">
    
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="shortcut icon" href="{{ asset('UI/assets/img/favicon.png') }}">
        <!--<link rel="stylesheet" href="{{ asset('UI/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/animate.css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('UI/assets/vendor/intl-tel-input-master/build/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('UI/assets/css/theme.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        #hideOverflow {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        .gradientBackground {
            background: rgb(34,193,195);
            background: linear-gradient(90deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
        }
        .submenu {
            transform: translate3d(258px, -2px, 0px) !important;
        }
        @media screen and (max-width: 600px) {
            .mobile-display {
            /* display text align left */
            /* mobile screen */
                display: flex;
                flex-direction: column !important;
                align-items: flex-start !important;
            }
            .mobile-display a {
                margin-bottom: 5px;
                /* width 100 % */
                display: flex;
                /* width 100% */
                width: 100%;
            }
        }
        
        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }
        @keyframes blink-animation {
            to {
            visibility: hidden;
            }
        }
        @-webkit-keyframes blink-animation {
            to {
            visibility: hidden;
            }
        }
    </style>

   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7662829215588279"
     crossorigin="anonymous"></script>
     <!--<link href="{{ asset('UI/assets/vendor/bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet"> -->
     <!--<script src="{{ asset('UI/assets/vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script> -->
     <!-- adstera ad-->
     <!---->
</head>

<body>

    <!-- import header in body  -->
    @include('front/components/header')
    <!-- end of header  -->
    <!-- import siderbar in body  -->
    @include('sweetalert::alert')
    @include('front/components/aside')
    <!-- end of siderbar  -->

    @yield('content')

    <!-- import header in body  -->
    @include('front/components/footer')
    <!-- end of header  -->
    
    <!-- import cookies modal -->
    @include('front/components/cookie-modal')

 <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
 <!--   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
 <!--   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

    <script src="{{ asset('UI/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>
    <script src="{{ asset('UI/assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.unfold.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.malihu-scrollbar.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.slick-carousel.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.selectpicker.js') }}"></script>
    <script src="{{ asset('UI/assets/js/components/hs.show-animation.js') }}"></script>
    <script src="{{ asset('UI/assets/vendor/intl-tel-input-master/build/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).on('ready', function() {

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // $('.js-slick-carousel').attr('dir', 'ltr');

            // init zeynepjs
            var zeynep = $('.zeynep').zeynep({
                onClosed: function() {
                    // enable main wrapper element clicks on any its children element
                    $("body main").attr("style", "");

                    console.log('the side menu is closed.');
                },
                onOpened: function() {
                    // disable main wrapper element clicks on any its children element
                    $("body main").attr("style", "pointer-events: none;");

                    console.log('the side menu is opened.');
                }
            });

            // handle zeynep overlay click
            $(".zeynep-overlay").click(function() {
                zeynep.close();
            });

            // open side menu if the button is clicked
            $(".cat-menu").click(function() {
                if ($("html").hasClass("zeynep-opened")) {
                    zeynep.close();
                } else {
                    zeynep.open();
                }
            });
        });


    </script>


    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "110200458390481");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
    
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v14.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
  </script>
    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TTXD86P5FB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TTXD86P5FB');
</script>


    @yield('script')
</body>



</html>
