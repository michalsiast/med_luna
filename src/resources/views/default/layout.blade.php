<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>

<!--=================================
  preloader -->
<div id="pre-loader">
    <img src="{{asset('images/loader-01.svg')}}" alt="">
</div>
<header class="header header-sticky default">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <div class="container-fluid main-header position-relative">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
                    class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="/">
                <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="logo">
                <img class="img-fluid sticky" src="{{asset('images/logo.png')}}" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-end justify-content-lg-end" style="margin-right: 30px;">
                @include('default.nav_item.main', ['name' => 'main'])
            </div>
            <div class="add-listing">
                <a class="btn btn-primary" href="{{route('contact.show')}}">Rezerwuj teraz</a>
            </div>
        </div>
    </nav>
</header>
{{--@include('default._helpers.lang_nav')--}}
@yield('content')

<footer class="footer bg-overlay-theme-10">
    <div class="min-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h5>Dane firmy</h5>
                    <div class="footer-contact-info footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-fw fa-map-marker-alt text-primary"></i><a href="{{getConstField('google_map')}}">{{getConstField('company_address')}} <br> {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></li>
                            <li><p>NIP: {{getConstField('company_nip')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h5>Dane kontaktowe</h5>
                    <div class="footer-contact-info footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-fw fa-phone text-primary"></i><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></li>
                            <li><i class="far fa-fw fa-envelope text-primary"></i><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></li>
                        </ul>
                    </div>
                    <div class="social-icon mt-4">
                        <ul>
                            <li><a href="{{getConstField('facebook')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center copyright text-md-start text-center">
                <div class="col-12">
                    <p class="mb-0 text-center"><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.com.pl">Palmax</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-to-top" class="back-to-top">
    <a href="#"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/swiper/swiper.min.js')}}"></script>
<script src="{{asset('js/swiperanimation/SwiperAnimation.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
