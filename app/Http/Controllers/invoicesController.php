<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;


class invoicesController extends Controller
{
    public function index()
    {
        return view('invoice');
    }

    public function store(Request $invoice)
    {
        $table=invoice::create([
            'tanggal'=>$invoice->tanggal,
            'NoInvoice'=>$invoice->NoInvoice,
            'namaLengkap'=>$invoice->namaLengkap,
            'periode'=>$invoice->periode,
            'totalTagihan'=>$invoice->totalTagihan,
            'keterangan'=>$invoice->keterangan,
            'jatuhTempo'=>$invoice->jatuhTempo
        ]);
        return redirect('viewinvoice');
    }

    public function view()
    {
        $data_invoice=invoice::all();
        return view ('viewinvoice', compact('data_invoice'));
    }

    public function delete($id) 
    {
        invoice::where('id',$id)->delete();
        return redirect ('viewinvoice');
    }
    
    public function print($id)
    {
        $data_invoice = invoice::find($id);
        return view('print', compact('data_invoice'));
    }

    public function printpdf ($id)
    {
        $data_invoice = invoice::find($id);
        return view('printpdf', compact('data_invoice'));
    }

    public function invoice(Request $invoice, $id)
    {
        $data_invoice = invoice::find($id);
        $data_invoice->invoice($invoice->all());
        return redirect('invoice');
    }

    
}
