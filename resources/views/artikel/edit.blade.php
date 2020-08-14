@extends('layouts.default')
@section('title','Dahboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box-body">
          <!-- Default box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Artikel

              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label>Judul Artikel</label>
                  <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}" required>
                </div>
                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="gambar" value="{{ $artikel->gambar }}" required>
                </div>
                <div class="form-group">
                  <label>Kategori Artikel</label>
                  <select name="categories_id" class="form-control">
                    @foreach ($categori as $item)
                    @if($item->id==$artikel->id)
                    <option value={{$item->id}} selected>{{$item->nama_kategori}}</option>
                    @else
                    <option value={{$item->id}}>{{$item->nama_kategori}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                  <textarea name="body" id="ckedtor" class="ckeditor" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                    {!! $artikel->body  !!}
                   </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Update Artikel</button>
                  <a href="{{ route('artikel.index') }}" class="btn btn-danger">Kembali</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box -->
  @endsection