@extends('layouts.dashboard-layout')
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
            <form action="{{ route('manage_product.patch',['product'=>$product]) }}" method="POST">
                @csrf
                @method('patch')
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
                        <label for="code" class="form-label mt-2">Code</label>
                        @error('code')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <input id="code" name="code" type="text" class="form-control w-full" placeholder="Input Product Code" value="{{old('code')??$product->code}}">
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
                        <input id="weight" name="weight" type="text" class="form-control w-full" placeholder="Input Product Weight (kg)" value="{{old('weight')??$product->weight}}">
                    </div>
                    <div class="mt-3">
                        <label for="price" class="form-label mt-2">Price</label>
                        <input id="price" name="price" type="text" class="form-control w-full" placeholder="Input Product Price (Rp)" value="{{old('price')??$product->price}}">
                    </div>
                    <div class="mt-3">
                        <label for="stock" class="form-label mt-2">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control w-full" placeholder="Input Product Stock" value="{{ old('stock')??$product->stock }}"></input>
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