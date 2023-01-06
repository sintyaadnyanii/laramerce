@extends('layouts.dashboard-layout')
@section('head')
    <style>
        .upload__box {
            margin-top: 9px
        }

        .upload__inputfile {
            width: .1px;
            height: .1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all .3s ease;
            cursor: pointer;
            border: 2px solid;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: '\2716';
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
@endsection
@section('dashboard-content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- END: Top Bar -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update Product
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('manage_product.patch',['product'=>$product]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <input type="hidden" id="deleted_images" name="deleted_images">
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Name</label>
                        @error('name')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <input id="name" name="name" type="text" class="form-control w-full" placeholder="Input product name" value="{{old('name')??$product->name}}">
                    </div>
                    <div class="mt-3">
                        <label for="category_id" class="form-label mt-2">Category</label>
                        @error('category_id')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <select name="category_id" id="category_id" data-placeholder="Choose Product Category" class="tom-select w-full">
                            <option value="0">None</option>
                            @foreach ($categories as $item)
                            <option value="{{$item->id}}" {{ $product->category_id==$item->id?'selected':null }} >{{$item->name}}</option>                                  
                            @endforeach                           
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="product_code" class="form-label mt-2">Product Code</label>
                        @error('product_code')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <input id="product_code" name="product_code" type="text" class="form-control w-full" placeholder="Input Product Code" value="{{old('product_code')??$product->product_code}}">
                    </div>
                    <div class="mt-3">
                        <label for="condition" class="form-label mt-2">Condition</label>
                        @error('condition')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <select name="condition" id="condition" data-placeholder="Select Product Condition" class="tom-select w-full">
                            <option value="new" {{$product->condition=='new'?'selected':null}}>New</option>
                            <option value="second" {{$product->condition=='second'?'selected':null}}>Second</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="weight" class="form-label mt-2">Weight</label>
                        <input id="weight" name="weight" type="text" class="form-control w-full" placeholder="Input Product Weight (gram) ex: 250" value="{{old('weight')??$product->weight*1000}}">
                    </div>
                    <div class="mt-3">
                        <label for="price" class="form-label mt-2">Price</label>
                        <input id="price" name="price" type="text" class="form-control w-full" placeholder="Input Product Price (Rp)" value="{{old('price')??$product->price}}">
                    </div>
                    <div class="mt-3">
                        <label for="stock" class="form-label mt-2">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control w-full" placeholder="Input Product Stock" value="{{ old('stock')??$product->stock }}"></input>
                    </div>
                    <div class="upload__box">
                        @error('images[]')
                        <small class="text-xs text-red-500 ml-1">{{ '*' . $message }}</small>
                        @enderror
                        <div class="upload__btn-box">
                            <label class="upload__btn btn btn-primary">
                                <p>Choose An Image</p>
                                <input type="file" name="images[]" multiple data-max_length="10"class="upload__inputfile">
                            </label>
                        </div>
                        <div class="upload__img-wrap">
                            @foreach ($product->images as $item => $image)
                            <div class='upload__img-box'>
                            <div style='background-image: url({{ asset('storage/' . $image->src) }})'data-number='{{ $item }}' data-id="{{ $image->id }}"
                                data-file='{{ 'storage/' . $image->src }}' class='img-bg'>
                            <div class='upload__img-close'></div>
                            </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <a href="{{ route('manage_product.all') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary shadow-md w-24 mr-1">Save</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection
@section('script')
    <script src="{{ asset('dist/js/view/manage-product/product.js') }}"></script>
@endsection