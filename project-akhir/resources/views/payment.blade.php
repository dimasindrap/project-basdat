@extends('layout.main')

@section('container')
<section class="h-100 h-custom" style="background-color: #eee;">
<div class="col-lg-6 px-5 py-4">
  
    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>

    <form class="mb-5">

      <div class="form-outline mb-5">
          <label class="form-label" for="typeText">Nomor Rekening</label>
        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
          value="" minlength="19" maxlength="19" />
        
      </div>

      <div class="form-outline mb-5">
          <label class="form-label" for="typeName">Atas Nama</label>
        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
          value="" />
      </div>

      <div class="form-outline mb-5">
        <label class="form-label" for="typeName">Bukti Transfer</label>
      <input type="file" id="typeName" class="form-control form-control-lg" siez="17"
        value="" />
    </div>
    <div class="form-outline mb-5">
      <label class="form-label" for="typeName">Alamat</label>
    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
      value="" />
  </div>


      <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>

    </form>

  </div>
</section>
@endsection