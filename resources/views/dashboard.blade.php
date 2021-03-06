@extends('layouts/app')


@section('header')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
</h2>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="/invoices">Invoices</a></li>
            <li class="list-group-item"><a href="/purchaseorders">Purchase Orders</a></li>
            <li class="list-group-item"><a href="/users">Users</a></li>
        </ul>
    </div>

    <div class="col-9 bg-light p-3">
        <p class="display-4">Main section</p>
    </div>
</div>
@endsection
