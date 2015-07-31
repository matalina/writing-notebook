@extends('master')

@section('body')
    @include('header)

    @yield('content')

    @include('footer')
@endsection