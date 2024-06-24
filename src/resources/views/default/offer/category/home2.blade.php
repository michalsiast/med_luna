<div style="border: 2px solid #c09f4e; border-radius: 4px; padding: 40px 20px">
    <h3 style="margin-bottom: 15px">Kategorie ofert:</h3>
    <ul>
@foreach($items as $item)
        <li><a style="color: #333" href="{{route('offer_category.show.'.$item->id)}}"><p>{{$item->title}}</p></a></li>
@endforeach
    </ul>
</div>
