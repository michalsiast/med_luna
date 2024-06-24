@extends('default.layout')
@section('content')
    <section class="inner-header bg-holder custom_subheader_bg" style="background-image: url({{ renderImage($item->galleryCover(), 1800, 400, 'cover') }});">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-md-8 text-center position-relative">
                    <h1 class="text-white">{!! $item->title !!}</h1>
                    <ul class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home pe-2"></i>Strona główna</a></li>
                        <li class="breadcrumb-item active"><span>{!! $item->title !!}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="service white-bg space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row" style="margin-bottom: 40px; margin-right: 30px">
                        <div class="col-lg-12">
                            <div class="service-img">
                                <img class="img-fluid" style="height: 450px;width: 100%; object-fit: cover" src="{{ renderImage($item->galleryCover(), 1800, 400, 'cover') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 30px">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2 class="title">{{$item->title}}</h2>
                                <p class="section-description">{!! $item->text !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    @include('default.offer.category.home2')
                </div>
            </div>
        </div>
    </section>

@endsection
