@extends('layout.admin')

@section('admin_container')

<div class="pb-3">
  <form class="d-flex" action="" method="get">
      <input class="form-control me-1" type="search" name="keyword" value="{{ Request::get('keyword') }}" placeholder="input keyword" aria-label="Search">
      <button class="btn btn-secondary" type="submit">Cari</button>
  </form>
</div>

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Nama</th>
        <th>Id</th>
        <th></th>
        <th>Tanggal</th>
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
              <p class="text-muted mb-0">Email</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Id </p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill d-inline">Active</span>
        </td>
        <td>xx/xx/xx</td>
        <td>
         
        </td>
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
              <p class="text-muted mb-0">Email</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Id </p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill d-inline">Active</span>
        </td>
        <td>xx/xx/xx</td>
        <td>      
        </td>
      </tr>
    </tbody>
  </table>
  @endsection