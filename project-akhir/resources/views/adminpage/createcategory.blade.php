@extends('layout.admin')

@section('admin_container')
     
     <form action='{{ url('category') }}' method='post'>
    @csrf
        
            <div>
                <p class="text-center">Input kategori ormanan </p>
            </div>
            <div class="input-group mb-3">
                <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                <div class="input-group-prepend">
                
                </div>
                <select class="col-sm-10" id="inputGroupSelect01" name="nama">
                  <option selected>Pilih..</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
              </div>
           
                
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-11"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        

        

@endsection