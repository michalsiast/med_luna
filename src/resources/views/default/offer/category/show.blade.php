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
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-4 mb-md-0 mb-4">
                        <div class="feature-box feature-box-style-02 feature-box-light mb-3 mb-md-0">
                            <div class="feature-img">
                                <img style="object-fit: cover" src="{{ renderImage($item->galleryCover(), 200, 200, 'cover') }}" alt="services01">
                            </div>
                            <div class="feature-content">
                                <h3 style="margin-bottom: 10px">{{$item->title}}</h3>
                                {!! $item->lead !!}
                                <a href="{{route('offer.show.'.$item->id)}}">Zobacz ofertę <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
