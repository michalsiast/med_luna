@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="space-ptb about-02 mb-0 mb-lg-5" style="padding-bottom: 0px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="about-img">
                    <div class="img-01">
                        <img class="img-fluid" src="{{asset('images/about_us_1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 pt-5 pt-lg-0 px-3 px-xl-5">
                <div class="section-title pt-5 pt-lg-0">
                    @if (!empty($fields->subtitle_about_us))
                        <span class="sub-title">{{$fields->subtitle_about_us}}</span>
                    @endif
                    @if (!empty($fields->title_about_us))
                        <h2 class="title">{{$fields->title_about_us}}</h2>
                    @endif
                </div>
                <div class="description mb-4 mb-md-5">
                    @if (!empty($fields->description_about_us))
                        {!! $fields->description_about_us !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about space-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    @if(!empty($fields->subtitle_recommended))
                        <span class="sub-title">{{$fields->subtitle_recommended}}</span>
                    @endif
                    @if(!empty($fields->title_recommended))
                        <h2 class="title">{{$fields->title_recommended}}</h2>
                    @endif
                </div>
                <div class="about-img pt-0 pt-lg-4">
                    <img class="img-fluid" style="height: 500px; object-fit: cover" src="{{asset('images/recommended_1.jpg')}}" alt="#">
                </div>
                @if(!empty($fields->description_1_recommended))
                    <p class="mt-3">{!! $fields->description_1_recommended !!}</p>
                @endif
            </div>
            <div class="col-lg-6 position-relative">
                <div class="about-right mt-5 mt-lg-0">
                    <div class="about-img text-end">
                        <img class="img-fluid" style="height: 500px; object-fit: cover" src="{{asset('images/recommended_2.jpg')}}" alt="about1">
                    </div>
                    @if(!empty($fields->description_2_recommended))
                        <p class="mt-3">{!! $fields->description_2_recommended !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category-section space-ptb position-relative px-md-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 pb-4 pb-xl-0 pe-0 pe-xl-5" style="align-items: flex-start; display: flex;flex-direction: column;justify-content: center;">
                <div class="section-title" style="margin-bottom: 0px">
                    @if (!empty($fields->subtitle_offer_category))
                        <span class="sub-title">{{$fields->subtitle_offer_category}}</span>
                    @endif
                    @if (!empty($fields->title_offer_category))
                        <h2 class="title">{{$fields->title_offer_category}}</h2>
                    @endif
                </div>
                <a href="{{route('offer_category.index')}}" class="btn btn-primary mt-4">Zobacz wszystkie oferty</a>
            </div>
            <div class="col-xl-7">
                @include('default.offer.category.home')
            </div>
        </div>
    </div>
</section>


<section class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12" style="background-image: url({{ asset('images/why_me.jpg') }}); background-position: center; background-size: cover;">
            </div>
            <div class="col-xl-6 col-lg-12 features-section">
                <div class="section-title">
                    @if(!empty($fields->subtitle_why_me))
                        <span class="sub-title text-white">{{$fields->subtitle_why_me}}</span>
                    @endif
                    @if(!empty($fields->title_why_me))
                        <h2 class="title text-white">{{$fields->title_why_me}}</h2>
                    @endif
                    @if(!empty($fields->description_why_me))
                        {!! preg_replace('/<p([^>]+)?>/', '<p$1 class="section-description text-white">', $fields->description_why_me) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
