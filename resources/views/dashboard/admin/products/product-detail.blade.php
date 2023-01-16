@extends('layouts.dashboard-layout')
@section('dashboard-content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- END: Top Bar -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Product
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="intro-y box p-5">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:basis-60 justify-center">
                                              
                        <img class="featured-img" src="{{  asset($product->images->count() ? 'storage/' . $product->images->first()->src : 'dist/images/default.jpg') }}" alt="">
                        <div class="thumb-slide-wrapper mt-5 p-1">
                            <i id="arrow-left" class="arrow" data-lucide="chevron-left"></i>
                            <div class="thumb-slider" id="slider_thumbnail">
                                @foreach ($product->images as $index=>$img)
                                    <img class="thumbnail-product {{$index==0?'active_thumb':''}}"
                                     src="{{ asset('storage/'.$img->src) }}" alt="product_pic_{{$loop->iteration}}">
                                @endforeach
                            </div>

                            <i id="arrow-right" class="arrow" data-lucide="chevron-right"></i>
                        </div>
                            

                    </div>
                    <div class="md:flex-shrink-0 md:basis-52 px-8 py-3">
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Nama :{{ $product->name }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Price :{{ $product->price }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Code :{{ $product->product_code}}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Condition :{{ $product->condition }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Weight :{{ $product->weight }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold">Stock :{{ $product->stock }}</div>

                    </div>
                    <div class="md:flex">
                        <div class="box-content h-70 w-64 p-4 border-2 rounded">
                            <p class="text-sm text-black font-semibold">Product Sales</p>
                            <div class="border-solid border-black-600 mt-10">
                                <label for="wishlist_num" class="font-semibold">Number of Product Wishlist</label>
                                <input type="number" id="wishlist_num" class="form-control w-1/2" disabled>
                            </div>
                            <div class="">
                                <label for="orderlist_num" class="font-semibold">Number of Orders</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-sm text-black mt-5 ml-2">
                    <p class="uppercase tracking-wide text-sm text-black font-semibold">Deskripsi</p>
                    <p>{!! $product->description !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
<script src="{{ asset('dist/js/view/manage-product/product.js') }}"></script>
@endsection