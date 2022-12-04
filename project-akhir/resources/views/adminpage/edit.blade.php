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
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' value="{{ $menu->name }}" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='image' value="{{ $menu->image }}" id="image">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                <div class="input-group-prepend">
                
            </div>
                    <select nama="category_id" class="col-sm-10" id="inputGroupSelect01" >
                        @foreach($category as $item)
                        <option @if ($menu->category_id == $item->id) selected="selected" @endif
                            value="{{ $item->id }}">
                            {{ $item->nama }}</option>
                            @endforeach
                    </select>
                </div>

            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='price' value="{{ $menu->price }}" id="price">
                </div>
            </div>
           
            <div class="mb-3 row">
                <label for="sumbit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>

@endsection