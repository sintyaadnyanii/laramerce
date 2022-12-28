@extends('layouts.base-layout')

@section('base_head')
    <title>{{ $title }}</title>
    @yield('head')
@endsection
@section('base_body')
    <div>
        @yield('body')
        @include('frontpage.frontpage-navbar')
        @include('frontpage.frontpage-content')
        @include('frontpage.frontpage-footer')
    </div>
@endsection
@section('base_script')
    @yield('script')
@endsection
