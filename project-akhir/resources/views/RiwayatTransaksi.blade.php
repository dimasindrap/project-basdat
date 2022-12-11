@extends('layout.main')

@section('container')


<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Nama</th>
        <th>Total</th>
        <th>Tanggal</th>
        <th>Nota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">Nama</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Id </p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill d-inline">Active</span>
        </td>
        <td>@Email</td>
        
      </tr>
     <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">Nama</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Id </p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill d-inline">Active</span>
        </td>
        <td>@Email</td>
      </tr>
    </tbody>
  </table>
  @endsection