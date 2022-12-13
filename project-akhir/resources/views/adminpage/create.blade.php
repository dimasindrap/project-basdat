@extends('layout.admin')

@section('admin_container')
     
     <form action='{{ url('home') }}' method='post' enctype="multipart/form-data">
    @csrf
        
            <div>
                <p class="text-center">Input Data ormanan </p>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' id="name"required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='image' id="image" required>
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                <div class="input-group-prepend">
                
                </div>
                @foreach($category as $c)

                <div class="form-check">
                    <input name="categories[]" class="form-check-input" type="checkbox" value="{{ $c->id }}" id="{{  $c->id }}">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        {{  $c->nama  }}
                    </label>
                  </div>

                  <br/>

                  @endforeach
              </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='price' id="price"required>
                </div>
                
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-11"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        

        

@endsection