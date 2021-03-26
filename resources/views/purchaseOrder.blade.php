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
        <p class="h2" id="Paragraph">Purchase Orders</p>

        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Invoice No.</th>
                    <th>Pin No.</th>
                    <th>LPO No.</th>
                    <th>Invoice To: </th>
                    <th>ATT</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>18-Dec-20</td>
                    <td>2344</td>
                    <td>P034134234322</td>
                    <td>PO23423543523434</td>
                    <td>Insight Warrior</td>
                    <td>Mr. Hussein</td>
                    <td>55,000</td>
                </tr>
                <tr>
                    <td>18-Dec-20</td>
                    <td>2344</td>
                    <td>P034134234322</td>
                    <td>PO23423543523434</td>
                    <td>Insight Warrior</td>
                    <td>Mr. Hussein</td>
                    <td>55,000</td>
                </tr>
            </tbody>
        </table>
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
