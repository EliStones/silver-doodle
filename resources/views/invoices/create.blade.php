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
        <p class="h2" id="Paragraph">Add Invoices</p>

        <form action="/addInvoice" method="POST" class="form-group">
            @csrf
            <input class="form-control" type="date" placeholder="Invoice Date" name="invoiceDate"><br>
            <input class="form-control" type="text" placeholder="Invoice Number" name="invoiceNo"><br>
            <input class="form-control" type="text" name="pinNo" placeholder="Pin Number"><br>
            <input class="form-control" type="text" name="lpoNo" placeholder="LPO Number"><br>
            <input class="form-control" type="text" name="attendant" placeholder="Attendant"><br>
            <input class="form-control" type="number" name="subtotal" placeholder="Subtotal"><br>
            <input class="form-control" type="number" name="vat" placeholder="VAT Amount"><br>
            <input class="form-control" type="number" name="total" placeholder="Total"><br>
            <input type="submit" name="submit" class="btn btn-success">
        </form>

    </div>
</div>
@endsection

@section('scripts')

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
