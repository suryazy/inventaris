@can('admin')

@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pengguna {{ $item->name }}</h1>
</div>

<form method="post" action="/dashboard/{{ $item->id }}/edit">
  @csrf
  @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="name" name="name" disabled value="{{ old('name', $item->name) }}">
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stok</label>
      <input type="number" class="form-control" name="stock" id="stock" disabled value="{{ old('stock', $item->stock) }}">
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="text" class="form-control" disabled value="@if($status){{ 'Tersedia' }} @else{{ 'Tidak Tersedia' }}@endif">
      <input type="hidden" class="form-control" name="status" id="status" value="{{ old('status', $status) }}">
    </div>
    <div class="mb-3">
      <label for="stock_ready" class="form-label">Jumlah Tersedia</label>
      <input type="number" class="form-control" id="stock_ready" name="stock_ready" disabled value="{{ $stock_ready }}">
    </div>
    @foreach ($using_by as $data)
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="using_by" class="form-label">Digunakan Oleh</label>
                <input type="text" class="form-control" id="using_by" name="using_by" value="{{ old('using_by', $data->name) }}">
                <input type="hidden" class="form-control" id="using" name="using" value="{{ $data->using }}">
            </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="used" class="form-label">Jumlah Digunakan</label>
            <input type="number" class="form-control" id="used" name="used" value="{{ old('used', $data->used) }}">
          </div>
        </div>
    </div>
    @endforeach
    <div class="row">
      <div class="col-md-6">
        <label for="using_by" class="form-label">Tambah Pengguna</label>
        <div class="row">
          <div class="col-md-6">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nama Pengguna
              </button>
              <ul class="dropdown-menu">
                @foreach ($list_users as $user)
                  <li><a class="dropdown-item" href="/dashboard/{{ $item->id }}/edit?n={{ $user->name }}">{{ $user->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="using_by" id="using_by" value="{{ request()->n }}">
            <input type="hidden" class="form-control" id="using" name="using" value="1">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="used" class="form-label">Jumlah Digunakan</label>
          <input type="number" class="form-control" id="used" name="used">
        </div>
      </div>
  </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
    
@endsection
    
@endcan