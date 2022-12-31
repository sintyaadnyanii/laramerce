@extends('layouts.dashboard-layout')
@section('dashboard-content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- END: Top Bar -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add Order
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <form action="#" method="POST">
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label for="name" class="form-label">User ID</label>
                    @error('name')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="number" name="user_id" id="order_user_id" class="form-control w-full" placeholder="Input User ID" value="{{ old('user_id')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Order Name</label>
                    @error('order_name')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="text" name="name" id="order_name" class="form-control w-full" placeholder="Input Order Name" value="{{ old('name')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Phone</label>
                    @error('order_phone')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="text" name="phone" id="order_phone" class="form-control w-full" placeholder="Input Phone" value="{{ old('phone')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Email</label>
                    @error('order_email')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="email" name="email" id="order_email" class="form-control w-full" placeholder="Input Email" value="{{ old('email')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Gross Amount</label>
                    @error('gross_amount')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="number" name="gross_amount" id="order_gross_amount" class="form-control w-full" placeholder="Input Gross Amount" value="{{ old('gross_amount')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Transaction ID</label>
                    @error('transaction_id')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="number" name="transaction_id" id="order_transaction_id" class="form-control w-full" placeholder="Input Transaction ID" value="{{ old('transaction_id')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Payment Token</label>
                    @error('payment_token')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="text" name="payment_token" id="order_payment_token" class="form-control w-full" placeholder="Input Payment Token" value="{{ old('payment_token')??'' }}">
                </div>

                <div>
                    <label for="name" class="form-label">Payment Type</label>
                    @error('payment_type')
                        <small class="text-xs text-red-500 ml-1">{{'*'.$message }}</small>
                    @enderror
                    <input type="text" name="payment_type" id="order_payment_type" class="form-control w-full" placeholder="Input Payment Type" value="{{ old('payment_type')??'' }}">
                </div>
                
                <div class="text-right mt-5">
                    <a class="btn btn-outline-secondary w-24 mr-1" href="{{ route('manage_category.all') }}">Cancel</a>
                    <a class="btn btn-outline-primary w-24 mr-1"><input type="submit" value="Save"></a>
                </div>
            </div>
        </form>
        <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection