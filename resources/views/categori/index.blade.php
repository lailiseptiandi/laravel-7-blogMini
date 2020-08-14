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
          <div class="card-header ">
            <h4 class="card-title mb-3">Data Kategori</h4>
            <a href="{{ route('categori.create') }}" class="btn btn-info">Tambah Data</a>

          </div>

          <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                {{-- @if ($categori->count() > 0) --}}
                @foreach ($categori as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_kategori }}</td>
                  <td>{{ $item->slug }}</td>
                  <td>
                    <form action="{{ route('categori.destroy', $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('categori.edit', $item->id) }}" class="btn btn-info"><i class="fas fa-edit"></i>
                        Edit</a>
                      <button class="btn btn-danger" type="submit"
                        onclick="return confirm('Yakin ingin menghapus data?')"><i
                          class="fa fa-trash"></i>Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                {{-- @endif --}}

              </tbody>
            </table>
            {{-- {{ $categori->links() }} --}}
            {{-- {{ $categori->appends(['sort' => 'votes'])->links() }} --}}
            {{ $categori->onEachSide(1)->links() }}
            {{-- <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- @push('dataTable')
<Script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</Script>
@endpush --}}
@endsection