@extends('layout.main')

@section('container')

    <head>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Section-->
        {{-- <div class="d-flex flex-row "> --}}
             @foreach($menu as $p) 
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-8 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img src="{{ asset('storage/' . $p->image) }}" class="rounded" style="width: :70px; height:250px;">
                            <!-- Product details-->
                            <div class="card-body p-7">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $p->name }}</h5>
                                    <h6>@foreach ($p->categories as $node)
                        
                                        {{ $node->nama}}, 
                                    </h6>
                                @endforeach
                                    <!-- Product price-->
                                    Rp.{{ $p->price }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                
                                <div class="text-center"><a type="submit" class="btn btn-outline-dark mt-auto" href="{{ url('cart/'.$p->id ) }}">Buy</a></div>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
                @endforeach 
            </div>

            
         {{-- </div> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
@endsection
