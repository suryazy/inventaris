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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengguna</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Pilih Pengguna
                        </button>
                        <ul class="dropdown-menu">
                          @foreach ($users as $user)
                            <li><button class="dropdown-item" type="button">{{ $user->name }}</button></li>
                          @endforeach
                        </ul>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            hapus
          </td>
        </tr>   
        @endforeach
      </tbody>
    </table>
</div>
@endsection

@endcan