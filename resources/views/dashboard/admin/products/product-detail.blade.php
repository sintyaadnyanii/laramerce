@endsection
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


            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="" alt="">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Product</div>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Judul</a>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Harga</a>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Condition</a>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Weight</a>
                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Stock</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
<script src="{{  }}"></script>
@endsection