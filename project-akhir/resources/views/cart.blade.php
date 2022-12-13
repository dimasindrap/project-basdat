@extends('layout.main')


@section('container')
<section class="h-100 h-custom" style="background-color: #eee;">
  <form action='{{ url('cart') }}' method='post' enctype="multipart/form-data">
    
    {{-- <div class="container h-100 py-5"> --}}
      {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
              <div class="row">
              
                <dd>{{ $menu }}</dd>
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Cart</h3>
  
                  {{-- @foreach($user as $u)
                  <div class="form-outline mb-5">
                    <label class="form-label" for="typeName">Id</label>
                   <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                    value=" {{ $u->id}}" />
                    <div class="form-outline mb-5">
                      <label class="form-label" for="typeName">Nama</label>
                     <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      value=" {{ $u->name }}" />
                  
                  @endforeach --}}
                  <form action="{{ url('cart') }}" method="post">
                    @csrf
                    <input type="text" name="menu_id" value="{{ $menu->id }}" hidden>
                    <div class="form-outline mb-5">
                      <label class="form-label" for="typeName">Alamat</label>
                     <input type="text" id="typeName" name="address" class="form-control form-control-lg" siez="17"
                       required/>
                      <div class="form-outline mb-5">
                        <label class="form-label" for="typeName">Bukti Transfer</label>
                      <input type="file" id="typeName" name="image_nota" class="form-control form-control-lg" siez="17" required/>
                    </div>
                  </div>
                    <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
    
                    <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                      <h5 class="fw-bold mb-0">Total:</h5>
                      <h5 class="fw-bold mb-0">${{ $menu->price }}</h5>
                     
                      <button class="btn btn-primary btn-block btn-lg" >Buy</button>
                    </div>

                  </form>
                 
                  
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection