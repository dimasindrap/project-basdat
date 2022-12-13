@extends('layout.admin')

@section('admin_container')
@include('partial.navbarAdmin')
            <!-- START DATA -->
            <div class="my-5 p-5 bg-body rounded shadow-sm">
                <div class="row position-relative">
                   
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="/home" method="GET">
                      <input class="form-control me-1" type="search" name="search" placeholder="input keyword" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('home/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Gambar</th>
                            <th class="col-md-4">Kategori</th>
                            <th class="col-md-4">Harga</th>
                        </tr>
                    </thead>
                    @foreach($menu as $p)
                    <tr>
                        <td>{{ $p->id}}</td>
                        <td>{{ $p->name }}</td>
                        <td>
                        <img src="{{ asset('storage/' . $p->image) }}" class="rounded" style="width: :70px; height:70px;"></td>
                        <td>
                    @foreach($p->categories as $node)
                        
                            {{ $node->nama}}, 
                    @endforeach
                        </td>
                        <td>{{ $p->price }}</td>
                        <td>
                            <a href='{{ url('home/'.$p->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href='' class="btn btn-danger btn-sm">Del</a> --}}
                            <form action="{{ url('home/'. $p->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
                </table>
{{ $menu ->links() }}
          </div>
          <!-- AKHIR DATA -->

@endsection