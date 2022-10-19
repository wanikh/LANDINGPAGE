@extends('home')

@section('content')


<div class="class text-center mb-4 mt-2">
  <h1>Form Invoice</h1>
</div>
<div class=" container-fluid">        
  <div class="card">
      <!--begin::Card body-->
      <div class="card-body ">
<form action="store"  method="POST">
  @csrf                   <!--begin::Wrapper-->
  <div class="d-flex flex-column align-items-start flex-md-row">
      <!--begin::Input group-->
      <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tanggal Invoice">
          <!--begin::Date-->
          <div class="fs-6 fw-bolder text-gray-700 text-nowrap">Tanggal </div>
          <!--end::Date-->
          <!--begin::Input-->
          <div class="position-relative d-flex align-items-center w-200px">
              <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggal" value="" />
          </div>
          <!--end::Input-->
      </div>
      <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="No Invoice">
          <!--begin::Date-->
          <div class="fs-6 fw-bolder text-gray-700 text-nowrap">No Invoice </div>
          <!--end::Date-->
          <!--begin::Input-->
          <div class="position-relative d-flex align-items-center w-200px">
              <input type="text" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Masukkan no invoice" name="NoInvoice" value="" />
          </div>
          <!--end::Input-->
      </div>                        
  </div>
  <!--end::Top-->
  <!--begin::Separator-->
  <div class="separator separator-dashed my-10"></div>
  <!--end::Separator-->
  <!--begin::Wrapper-->
  <div class="mb-0">
      <!--begin::Row-->
      <div class="row gx-10 mb-5">
          <!--begin::Col-->
          <div class="col-lg-6">
              <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Customer</label>
              <!--begin::Input group-->
              <div class="mb-5">
                  <select name="namaLengkap" aria-label="Select a customer" data-control="select2" data-placeholder="Pilih Customer" class="form-select form-select-solid">
                      <option value=""></option>
                      <option value="UPI" >UPI EV</option>
                      <option value="JOKO" >JOKO</option>
                      <option value="DIMAS" >DIMAS</option>
                      <option value="YUDA" >YUDA</option>
                      <option value="RENDY" >RENDY</option>
                      <option value="SANTIKA" >SANTIKA</option>
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
              <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Periode</label>
              <div class="mb-5">
                  <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tanggal Invoice">
                      <!--begin::Date-->
                      <!--end::Date-->
                      <!--begin::Input-->
                      <div class="position-relative d-flex align-items-center w-200px">
                          <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="periode" value="" />
                      </div>
                      <!--end::Input-->
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Total Tagihan</label>
              <!--begin::Input group-->
              <div class="mb-5">
                  <input type="text" name="totalTagihan" id="totalTagihan" class="form-control form-control-solid" value="" />
              </div>
          </div>
          <div class="col-lg-6">
              <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Keterangan</label>
              <div class="mb-5">
                  <textarea name="keterangan" class="form-control form-control-solid" rows="3" placeholder="Keterangan Tagihan"></textarea>
              </div>
          </div>
          <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tanggal Invoice">
              <!--begin::Date-->
              <div class="fs-6 fw-bolder text-gray-700 text-nowrap"> Jatuh Tempo</div>
              <!--end::Date-->
              <!--begin::Input-->
              <div class="position-relative d-flex align-items-center w-200px">
                  <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="jatuhTempo" value="" />
              </div>
              <!--end::Input-->
          </div>
          
          <!--end::Col-->

      </div>
      {{-- <a href="" class="btn btn-danger">Kembali</a> --}}
      <button type="submit" href="#" class="btn btn-primary" id="kt_invoice_submit_button">Buat Tagihan</button>
  </div>
  <!--end::Wrapper-->
</form>
<!--end::Form-->
</div>
<!--end::Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Content-->

</div>
          <!--end::Row-->
</div>
      <!--end::Container-->
</div>
  
      <!--end::Container-->
</div>
  <!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
@endsection