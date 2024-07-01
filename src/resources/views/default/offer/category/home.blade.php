<div class="owl-carousel owl-nav-bottom-center" data-nav-dots="false" data-nav-arrow="false" data-items="3"
     data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-space="20"
     data-autoheight="true">
@foreach($items as $item)
    <div class="item">
        <div class="category-box">
            <div class="category-img">
                <img class="img-fluid" style="height: 280px; width: 100%; object-fit: cover" src="{{ renderImage($item->galleryCover(), 280, 280, 'cover') }}" alt="">
            </div>
            <div class="category-title text-center mt-4">
                <h4><a href="{{route('offer_category.show.'.$item->id)}}">{{$item->title}}</a></h4>
            </div>
        </div>
    </div>
@endforeach
</div>
