@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
    <section class="space-pb position-relative" style="padding-top: 50px">
        <div class="container">
            @foreach($items as $item)
                   <div style="margin-top: 50px">
                       <h2 class="title" style="font-size: 44px;">{{$item->title}}</h2>
                       <div style="margin-top: 20px;margin-left: 35px;">
                           {!! $item->text !!}
                       </div>
                   </div>
            @endforeach
        </div>
    </section>
@endsection
