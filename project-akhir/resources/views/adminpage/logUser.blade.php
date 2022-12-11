@extends('layout.admin')

@section('admin_container')
@include('partial.navbarAdmin')
            <!-- START DATA -->
            <div class="my-5 p-5 bg-body rounded shadow-sm">
                <div class="row position-relative">
                   
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form  action="/log" method="GET">
                      <input class="form-control" type="search" name="search" placeholder="input keyword" id="inputPassword">
                
                  </form>
                </div>

            

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Id</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Password</th>
                            <th class="col-md-2">Email</th>
                            
                        </tr>
                    </thead>
                    @foreach($user as $u)
                    <tr>
                        <td>{{ $u->id}}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->password }}</td>
                        <td>{{ $u->email }}</td>

                        
                        <td>
                            <form action="{{ url('log/'. $u->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    
                    @endforeach
                </table>
             
          </div>
          {{ $user ->links() }}

@endsection