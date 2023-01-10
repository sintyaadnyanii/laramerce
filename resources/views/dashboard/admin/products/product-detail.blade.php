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

            <div class="max-w-md mx-auto bg-white rounded-x1 shadow-md overflow-hidden md:max-w-5xl">

                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="" alt="">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Nama</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Price</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Code</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Condition</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold mb-2">Weight</div>
                        <div class="uppercase tracking-wide text-sm text-black font-semibold ">Stock</div>

                        <!-- <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Stock</a> -->
                    </div>
                </div>

                <div class="text-sm text-black mt-5 ml-2">
                    <p class="uppercase tracking-wide text-sm text-black font-semibold">Deskripsi</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laudantium architecto earum nemo sequi quia, molestias adipisci ipsam doloremque! Illum mollitia excepturi libero dolorum praesentium animi exercitationem fugiat cum omnis.</p>
                </div>
            </div>
            <!-- END: Data List -->

        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
<script src=""></script>
@endsection