@foreach($items as $item)
    <li>
        {{$item->title}}
        {{$item->lead}}
    </li>
@endforeach

