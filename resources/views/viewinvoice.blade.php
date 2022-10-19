@extends('home')

@section('content')


<div class="class text-center mb-4 mt-2">
  <h1>Data Invoice</h1>
</div>
 <div class="container-fluid mb-3">
    <div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <div class="btn">
                        <a href="/invoice" class="btn btn-primary btn-md mb-2">Tambah +</a>
                    </div>
                    <tr>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">NO INVOICE</th>
                        <th scope="col">CUSTOMER</th>
                        <th scope="col">PERIODE</th>
                        <th scope="col">TAGIHAN</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">JATUH TEMPO</th>
                        <th scope="col">OPSI</th>
                    </tr>
                    @foreach($data_invoice as $invoice)
                    <tr>
                        <td>{{$invoice->tanggal}}</td>
                        <td>{{$invoice->NoInvoice}}</td>
                        <td>{{$invoice->namaLengkap}}</td>
                        <td>{{$invoice->periode}}</td>
                        <td><?= "Rp.".number_format($invoice['totalTagihan']) ." ,-"; ?></td>
                        <td>{{$invoice->keterangan}}</td>
                        <td>{{$invoice->jatuhTempo}}</td>
                        <td>
                            <a href="{{route('print',['id'=>$invoice->id])}}" class="btn btn-icon btn-warning btn-active-color-primary "><i class="fas fa-eye" style="color: white"></i></a>
                            <a href="{{url('/delete/'.$invoice->id)}}" class="btn btn-icon btn-danger btn-active-color-primary" data_request-id="{{$invoice->id}}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection