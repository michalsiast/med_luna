@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
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
                                <a href="{{route('offer_category.show.'.$item->id)}}">Zobacz więcej <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
