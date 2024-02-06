@can('admin')

@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pengguna {{ $item->name }}</h1>
</div>

<form method="post" action="/dashboard/{{ $item->id }}">
    <div class="mb-3">
      <label for="name" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="name" name="name" disabled value="{{ old('name', $item->name) }}">
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stok</label>
      <input type="number" class="form-control" name="stock" id="stock" disabled value="{{ old('stock', $item->stock) }}">
    </div>
    <div class="mb-3">
      <label for="stockReady" class="form-label">Jumlah Tersedia</label>
      <input type="number" class="form-control" name="stockReady" id="stockReady">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="using" class="form-label">Digunakan Oleh</label>
                @foreach ($using_by as $data)
                    <input type="text" class="form-control" id="using" name="using" value="{{ old('using', $data->name) }}">
                @endforeach
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