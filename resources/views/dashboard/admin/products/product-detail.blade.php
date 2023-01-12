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
                    <div class="md:flex-shrink-0 w-[200px]">

                        <img class="h-48 w-48 object-cover md:h-48 md:w-48 rounded-lg" src="{{ asset($product->images->count() ? 'storage/' . $product->images->first()->src : 'dist/images/default.jpg') }}" alt="">

                        <div id="controls-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-20 overflow-hidden rounded-lg md:h-20 mt-10">
                                @foreach ($product->images as $item)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{asset('storage/' . $item->src)}}" class="absolute block w-full" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-6 h-6 text-black dark:text-white-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-6 h-6 text-black dark:text-white-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                        <div class="p-3">
                            <button class="btn success">Favoritkan</button>
                            <button class="btn info">Bagikan</button>
                        </div>


                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Nama :{{ $product->name }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Price :{{ $product->price }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Code :{{ $product->product_code}}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Condition :{{ $product->condition }}</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Weight :{{ $product->weight }}</div>

                        <div class="uppercase tracking-wide text-sm text-black font-semibold">Stock :{{ $product->stock }}</div>


                        <button class="btn mr-5 mt-20 bg-white-500 md:bg-white-500"><i class=""></i> Chat</button>
                        <button class="btn mr-5 mt-20 bg-white-500 md:bg-white-500"><i class=""></i> Masukkan Keranjang</button>
                        <button class="btn mt-3 bg-red-500 md:bg-red-500"><i class=""></i> Beli Sekarang</button>
                    </div>
                    <div class="md:flex">
                        <div class="box-content h-70 w-64 p-4 border-2">
                            <p class="text-sm text-black font-semibold">Atur Jumlah Pesanan</p>
                            <div class="border-solid border-black-600 mt-10">
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" min="1" max="100">
                                <button class="btn mr-5 bg-white-500 md:bg-green-600"><i class=""></i> Submit</button>
                            </div>
                            <div class="">
                                <p>Jumlah Stock :{{ $product->stock }}</p>
                            </div>
                            <div class="mt-20">
                                <p class="text-sm text-black font-semibold">Subtotal : </p>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div>
                                <button class="btn mt-3 bg-blue-500 md:bg-blue-500"><i class=""></i> Back</button>
                                <button class="btn mt-3 bg-blue-500 md:bg-blue-500"><i class=""></i> Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-sm text-black mt-5 ml-2">
                    <p class="uppercase tracking-wide text-sm text-black font-semibold">Deskripsi</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laudantium architecto earum nemo sequi quia, molestias adipisci ipsam doloremque! Illum mollitia excepturi libero dolorum praesentium animi exercitationem fugiat cum omnis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
<script src="{{ asset('dist/js/view/manage-product/product.js') }}"></script>
@endsection