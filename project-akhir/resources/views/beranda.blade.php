@extends('layout.main')


@section('container')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="logo/3.jpg" class="d-block w-100" alt="responsive image">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="logo/paket1.png" class="d-block w-100" alt="responsive image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Telah Hadir Paket Spesial</h5>
          <p>Cepat Pesan Sebelum Kehabisan</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="logo/jumat.png" class="d-block w-100" alt="responsive image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jumat Berkah</h5>
          <p>Setiap hari jumat pembelian es teh tidak di pungut biaya.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Menu</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div> --}}
  
  
@endsection
