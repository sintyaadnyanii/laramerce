@extends('layouts.dashboard-layout')
@section('dashboard-content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- END: Top Bar -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Layout
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <form action="" method="POST">
            <div class="intro-y box p-5">
                <div>
                    <label for="name" class="form-label">Category</label>
                    <input id="name" type="text" class="form-control w-full" placeholder="Input category">
                </div>
                <div>
                    <label for="dscription" class="form-label">Description</label>
                    <textarea id="dscription" class="form-control w-full" placeholder="Input description"></textarea>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <a class="btn btn-primary shadow-md w-24 mr-1"><input type="submit" value="Save"></a>
                </div>
            </div>
        </form>
        <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection