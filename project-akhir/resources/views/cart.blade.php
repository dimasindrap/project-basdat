@extends('layout.main')


@section('container')
<section class="h-100 h-custom" style="background-color: #eee;">
    
    {{-- <div class="container h-100 py-5"> --}}
      {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
              <div class="row">
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">Category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/6.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">Harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">Category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">Category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">Category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">nama barang</h5>
                      <h6 style="color: #9e9e9e;">Category</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">harga</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
  
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">2261$</h5>
                  </div>
  
                </div>
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>
  
                  <form class="mb-5">
  
                    <div class="form-outline mb-5">
                        <label class="form-label" for="typeText">Nomor Rekening</label>
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                      
                    </div>
  
                    <div class="form-outline mb-5">
                        <label class="form-label" for="typeName">Atas Nama</label>
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        value="John Smith" />
                    </div>
  
  
                    <p class="mb-5">Harap simpan resi pembayaran, sebagai bukti pembayaran.</p>
  
                    <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>
  
                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                      <a href="menu"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                    </h5>
  
                  </form>
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection