@extends('layouts.default')

@push('customCss')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

@endpush

@section('title','Category')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
          <div class="box-body">
            <div class="card-header ">
              <h4 class="card-title mb-3">Artikel</h4>
              <a href="{{ route('artikel.create') }}" class="btn btn-info ">Tambah Data</a>

            </div>
            <table id="example1" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Nama Kategori</th>
                  <th>Aksi</th>
                  {{-- <th>Aksi </th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($artikel as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->judul }}</td>
                  @if($item->gambar==null)
                  <td>Gambar Tidak Ada</td>
                  @else
                  <td><img src="{{ asset('uploads/'. $item->gambar) }}" width="50px" height="50px"></td>
                  @endif
                  <td>{{ $item->Kategori->nama_kategori }}</td>
                  <td>
                    <form action="{{ route('artikel.destroy', $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-info"><i class="fas fa-edit"></i>
                        Edit</a>
                      <button class="btn btn-danger" type="submit"
                        onclick="return confirm('Yakin ingin menghapus data?')"><i
                          class="fa fa-trash"></i>Delete</button>
                    </form>
                    @endforeach
                  </td>
                </tr>
              </tbody>
            </table>
            {{ $artikel->links() }}
            {{-- {{ $artikel->onEachSide(1)->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('dataTable')
<Script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</Script>
@endpush
@endsection