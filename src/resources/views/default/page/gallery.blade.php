@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
    <div class="gallery mt-11 mb-11 space-ptb">
        <div class="container">
            <div class="row">
                @foreach($page->gallery->items as $item)
                    <div class="col-lg-4 pb-4 magnific-img">
                        <a class="image-popup-vertical-fit" href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                            <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            $(document).ready(function() {
                $('.gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    image: {
                        verticalFit: true
                    }
                });
            });
        </script>
    @endpush
@endsection
