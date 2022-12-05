@extends('layout.admin')

@section('admin_container')
@include('partial.navbarAdmin')
            <!-- START DATA -->
            <div class="my-5 p-5 bg-body rounded shadow-sm">
                <div class="row position-relative">
                   
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="keyword" value="{{ Request::get('keyword') }}" placeholder="input keyword" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('category/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Nama</th>
                            
                        </tr>
                    </thead>
                    @foreach($category as $p)
                    <tr>
                        <td>{{ $p->id}}</td>
                        <td>{{ $p->nama }}</td>
                        <td>
                            <a href='{{ url('category/'.$p->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href='' class="btn btn-danger btn-sm">Del</a> --}}
                            <form action="{{ url('home/'. $p->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </table>

          </div>
          <!-- AKHIR DATA -->

@endsection