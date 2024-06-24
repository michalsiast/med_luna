@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])

    <div>{!! $fields->text1 ?? '- none -' !!}</div>

@endsection
