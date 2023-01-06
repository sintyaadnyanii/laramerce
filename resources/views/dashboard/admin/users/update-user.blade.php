@extends('layouts.dashboard-layout')
@section('dashboard-content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- END: Top Bar -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update User
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('manage_user.patch',['user'=>$user]) }}" method="POST">
                @csrf
                @method('patch')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Name</label>
                        @error('name')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                        @enderror
                        <input id="name" name="name" type="text" class="form-control w-full border border-gray-300 rounded-lg" placeholder="Input  name" value="{{old('name')??$user->name}}">
                    </div>
                    <div class="mt-3">
                        <label for="phone" class="form-label mt-2">Phone</label>
                        <input id="phone" name="phone" type="text" class="form-control w-full border border-gray-300 rounded-lg" placeholder="Input Phone" value="{{old('weight')??$user->phone}}">
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label mt-2">Email</label>
                        <input type="email" name="email" id="email" class="form-control w-full border border-gray-300 rounded-lg" placeholder="Input Email" value="{{ old('email')??$user->email }}"></input>
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label mt-2">Address</label>
                        <input id="address" name="address" type="text" class="form-control w-full border border-gray-300 rounded-lg" placeholder="Input Address" value="{{old('address')??$user->address}}">
                    </div>
                    <div class="text-right mt-5">
                        <a href="{{ route('manage_user.all') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                        <input type="submit" value="Save" class="btn btn-outline-primary shadow-md w-24 mr-1">
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection