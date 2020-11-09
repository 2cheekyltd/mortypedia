@extends('templates.main')
@section('body_content')

    @if(isset($data['data']))
        @include('includes.mortyprofile')
    @else
        @include('includes.morty+404')
    @endif

@endsection
