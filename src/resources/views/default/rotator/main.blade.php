<section class="slider-01 banner-01">
    <div id="main-slider" class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($rotator->gallery->items as $item)
            <div class="swiper-slide slide-1 align-items-center d-flex custom_bg_slider"
                 style="background-image: url('{{renderImage($item->url, 1920, 700, `fit`)}}'); background-size: cover;background-position-y: 30%;">
                <div class="swipeinner container">
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-sm-10">
                            <div class="slider-1 position-relative">
                                <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                    <span class="animated text-primary sub-title-text  text-center" data-swiper-animation="fadeInUp"
                          data-duration="1.5s" data-delay="0.25s">Med Luna Kosmetologia Estetyczna</span>
                                    <h1 class="animated text-white mt-4" data-swiper-animation="fadeInUp" data-duration="1.5s"
                                        data-delay="0.25s">{{$item->name}}</h1>
                                    {!! preg_replace('/<p([^>]+)?>/', '<p$1 class="animated details-text text-white display-9 mt-4" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">', $item->text) !!}
                                    <div class="mt-4 mt-xl-5">
                                        <a href="{{route('realization.index')}}" class="btn btn-primary animated4 appointment "
                                           data-swiper-animation="fadeInUp" data-duration="3s" data-delay="0.25s">Zobacz cennik <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Pagination -->
    @if($rotator->arrows)
    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
            class="fas fa-chevron-left"></i></div>
    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i
            class="fas fa-chevron-right"></i></div>
    @endif
</section>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
