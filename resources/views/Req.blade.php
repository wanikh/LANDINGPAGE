@extends('home')

@section('content')


<div class="class text-center mb-4 mt-2">
  <h1>Data Request</h1>
</div>
<div class="container-fluid mb-3">
  <div class="row justify-content-center">
  <div class="col">
      <div class="card">
          <div class="card-body">
              <table class="table table-bordered">
                  {{-- <div class="btn">
                      <a href="/request" class="btn btn-primary btn-md mb-2">Tambah +</a>
                  </div> --}}
                  <tr>
                      <th scope="col">NAME</th>
                      <th scope="col">NO WHATSAPP</th>
                      <th scope="col">DESKRIPSI</th>
                      <th scope="col">PERMASALAHAN</th>
                      <th scope="col">HARAPAN</th>
                      <th scope="col">BUDGET</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">OPSI</th>
                  </tr>
                  @foreach($data_request as $item)
                  <tr>
                      <td>{{$item->nama_lengkap}}</td>
                      <td>{{$item->no_whatsapp}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->permasalahan}}</td>
                      <td>{{$item->harapan}}</td>
                      <td><?= "Rp.".number_format($item['estimasi_budget']) ." ,-"; ?></td>
                      <td>
                          <?php 
                          if ($item['status']=="0") {
                              echo "<div class='card bg-warning text-white text-center'>FIX</div>";
                          }else if( $item['status']=="1" ) {
                              echo "<div class='card bg-info text-white text-center'>BELUM FIX</div>";
                          }else if( $item['status']=="2" ) {
                              echo "<div class='card bg-success text-white text-center'>DIPIKIRKAN</div>";
                          }
                          ?>
                      </td>
                      <td>
                          <a href="{{url('/edit-data/'.$item->id)}}" class="btn btn-icon btn-warning btn-active-color-primary"><i class="fas fa-pen" style="color:white"></i></a>
                          <a href="{{url('/delete-data/'.$item->id)}}" class="btn btn-icon btn-danger btn-active-color-primary" data_request-id="{{$item->id}}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                      </td>
                  </tr>
                  @endforeach
              </table>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>

@endsection