@can('admin')

@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inventaris Perusahaan A</h1>
  </div>

  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Kategori</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Stok</th>
          <th scope="col">Status</th>
          <th scope="col">Jumlah Tersedia</th>
          <th scope="col">Digunakan Oleh</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->category_id }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->stock }}</td>
          <td>{{ $item->status }}</td>
          <td>ready berapa</td>
          <td>
            <a href="#">Edit</a>
            <a href="#">Hapus</a>
          </td>
        </tr>   
        @endforeach
      </tbody>
    </table>
</div>
@endsection

@endcan