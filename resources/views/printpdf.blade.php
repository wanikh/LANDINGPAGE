<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MAJAPAHIT.ID | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  {{-- fav icon --}}
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class=" container-fluid">
        <div class="col">

            <div class="row">
              <div class="col-12">
                <h2 class="page-header">
                  <i class="fas fa-globe"></i> INVOICE
                  <small class="float-right">Date : {{$data_invoice->tanggal}}</small>
                </h2>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Admin, MAJAPAHIT TEKNOLOGI.</strong>
                    <br>Jl. Taman Asri 1 No. 7, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, 13940<br>
                    Phone : 
                    (021) 461-5656 / 085161707936<br>
                    Email : info@majapahit.id
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                To
                <address>
                  <strong>{{$data_invoice->namaLengkap}}</strong><br>
                  795 Folsom Ave, Suite 600<br>
                  San Francisco, CA 94107<br>
                  Phone: (555) 539-1037<br>
                  Email: john.doe@example.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b></b><br>
                <br>
                <b>Order ID :</b> {{$data_invoice->NoInvoice}}<br>
                <b>Payment Due :</b> {{$data_invoice->jatuhTempo}}<br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        
            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>CUSTOMER</th>
                      <th>TOTAL TAGIHAN</th>
                      <th>KETERANGAN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{$data_invoice->namaLengkap}}</td>
                      <td><?= "Rp.".number_format($data_invoice['totalTagihan']) ." ,-"; ?></td>
                      <td>{{$data_invoice->keterangan}}</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
            <!-- /.row -->
        
            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="/adminlte/dist/img/credit/visa.png" alt="Visa">
                <img src="/adminlte/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="/adminlte/dist/img/credit/american-express.png" alt="American Express">
                <img src="/adminlte/dist/img/credit/paypal2.png" alt="Paypal">
        
                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
                  jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
              </div>
              <!-- /.col -->
              {{-- <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>
        
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>$250.30</td>
                    </tr>
                    <tr>
                      <th>Tax (9.3%)</th>
                      <td>$10.34</td>
                    </tr>
                    <tr>
                      <th>Shipping:</th>
                      <td>$5.80</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>$265.24</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
      </div> --}}
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
