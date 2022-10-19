@extends('home')

@section('content')


<div class="class text-center mb-4 mt-2">
    <h1>Edit Data</h1>
</div>
<div class="container container-fluid">
      <div class="card">
          <div class="card-body">
                  <form action="/update-data/{{$data_request->id}}" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{$data_request->nama_lengkap}}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nomor Telephone</label>
                              <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_request->no_whatsapp}}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Deskripsi proyek anda</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_request->deskripsi}}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Permasalahan yang dihadapi</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_request->permasalahan}}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Harapan dan Ekspektasi</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_request->harapan}}">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Estimasi Budget</label>
                              <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_request->estimasi_budget}}">
                      </div>
                      <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <select class="form-select" type="text" name="status" aria-label="Default select example">
                              <option selected>{{$data_request->status}}</option>
                              <option value="0">FIX</option>
                              <option value="1">BELUM FIX</option>
                              <option value="2">DIPIKIRKANs</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
          </div>
      </div>
  </div>
</div>

@endsection
























