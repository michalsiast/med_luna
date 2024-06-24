@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
    <section class="space-ptb about-02 mb-0 mb-lg-5" style="margin-bottom: 0px!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img">
                        <div class="img-01">
                            <img class="img-fluid" src="{{asset('images/about_us_2.jpg')}}" alt="">
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
@endsection
