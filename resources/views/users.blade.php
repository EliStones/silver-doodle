@extends('layouts/app')

@section('content')
<div class="row no-gutters">
    <div class="col-2">
        <ul class="list-group">
            <li class="list-group-item"><a href="/invoices">Invoices</a></li>
            <li class="list-group-item"><a href="/purchaseorders">Purchase Orders</a></li>
            <li class="list-group-item"><a href="/users">Users</a></li>
        </ul>
    </div>

    <div class="col-10 bg-light p-3">
        <p class="h2" id="Paragraph">Users</p>

        <div class="row">
            <div class="col-4 p-3">
                Add User
            </div>

            <div class="col-4 p-3">
                Admin
            </div>            
        </div>

    </div>
</div>
@endsection

@section('scripts')

@endsection
