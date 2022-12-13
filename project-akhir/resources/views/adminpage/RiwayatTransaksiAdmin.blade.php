
@extends('layout.admin')

@section('admin_container')
@include('partial.navbarAdmin')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Id Transaksi</th>
        <th>Menu</th>
        <th>Tanggal</th>
        <th>Nota</th>
      </tr>
    </thead>
    {{-- <dd>{{ $transaction->first()->menu }}</dd> --}}
    <tbody>
      @foreach ($transaction as $item)
      <tr>
        <td>
          {{ $item->id }}
        </td>
        <td>
          <p class="fw-normal mb-1"> {{ $item->menu->name  }}</p>
        </td>
        <td>{{ $item->date }}</td>
        <td>
          <img
                src="{{ asset('storage/'.$item->image_nota) }}"
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>
  @endsection