@extends('layouts.base-layout')

@section('base_head')
    <title>{{ $title }}</title>
    @yield('head')
@endsection
@section('base_body')
    <div>
        @yield('body')
        <div class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
            <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
                <!-- BEGIN: Mobile Menu -->
                @include('fragments.dashboard-mobile-fragment')
                <!-- END: Mobile Menu -->
                <!-- BEGIN: Side Menu -->
                @include('fragments.dashboard-sidemenu-fragment')
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- BEGIN: Top Bar -->
                    @include('fragments.dashboard-topbar-fragment')
                    <!-- END: Top Bar -->
                    @include('fragments.dashboard-content-fragment')
                </div>
                <!-- END: Content -->
            </div>
        </div>
    </div>
@endsection
@section('base_script')
    @yield('script')
@endsection
