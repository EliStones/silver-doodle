<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if($request->input('submit') === "Submit"){
            $invoiceDate = $request->input('invoiceDate');
            $invoiceNumber = $request->input('invoiceNo');
            $pinNumber = $request->input('pinNo');
            $LPONumber = $request->input('lpoNo');
            $attendant = $request->input('ATT');
            $subtotal = $request->input('subtotal');
            $vatAmount = $request->input('vat');
            $total = $request->input('total');
        };

        $invoice = new Invoice();
        $invoice->date = $invoiceDate;
        $invoice->invoiceNo = $invoiceNumber;
        $invoice->pinNo = $pinNumber;
        $invoice->LpoNo = $LPONumber;
        $invoice->Attendant = $attendant;
        $invoice->Subtotal = $subtotal;
        $invoice->VAT = $vatAmount;
        $invoice->total =  $total;

        dd($invoice);
        // Save the new invoice Model
        $invoice->save();
        dd($invoice);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
