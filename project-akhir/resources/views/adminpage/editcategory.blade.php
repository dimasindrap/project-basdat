@extends('layout.admin')

@section('admin_container')
     <!-- START FORM -->
     <form action='{{ url('home/'.$menu->id) }}' method='POST'>
    @csrf
    <input type="hidden" name="_method" value="PATCH">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div>
                <p class="text-center">Edit Data ormanan </p>
            </div>

                <div class="input-group mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="input-group-prepend">
                    
                    </div>
                    <select class="col-sm-10" id="inputGroupSelect01" value="{{ $category->nama }}" name="nama">
                      <option selected>Pilih..</option>
                      <option value="1">Makanan</option>
                      <option value="2">Minuman</option>
                    </select>
                  </div>
           
            <div class="mb-3 row">
                <label for="sumbit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->

@endsection