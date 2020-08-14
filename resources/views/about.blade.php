@extends('layouts.frontApp')

@section('content')
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <ul class="page-header-breadcrumb">
          <li><a href="{{ route('beranda') }}">Home</a></li>
          <li>About</li>
        </ul>
        <h1>About</h1>
      </div>
    </div>
  </div>
</div>
<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-8">
        <div class="section-row">
          <p>Halo, Perkenalkan nama saya <b>Laili Muzzammil Septiandi</b> seorang mahasiswa asal <b>Sukabumi</b> yang
            menempuh
            kuliah
            di <b>Universitas PGRI Yogyakarta jurusan Teknik Informatika</b>.
            <br><br>
            <b>Singkat Cerita</b> <br>
            Saya seorang pemuda yang awam teknologi tidak begitu tau dengan perkuliahan apalagi jurusan-jurusan yang
            diminati. Dulu pengen ngambil jurusan Matematika,
            Teknik Elektro begitu daftar bukan rezekinya. Dan disitulah saya pengen kuliah yang ada nama
            teknik-tekniknya :V candaaa... tapi sebuah kenyataan. Akhirnya saya kuliah jurusan Teknik Informatika
            hehehe.... Sekarang lagi Programming Web dalam bidang Backend. Mungkin itu saja tentang Story of my life</p>
        </div>
        <div class="row section-row">
          <div class="col-md-6">
            <figure class="figure-img">
              <img class="img-responsive" src="{{ asset('img/about-mee.jpg') }}" alt="">
            </figure>
          </div>
          <div class="col-md-6">
            <h3>Biodata</h3>
            <p>Saya seorang Web Developer Pemula</p>
            <ul class="list-style">
              <li>
                <td>Name</td>
                <td>:</td>
                <td>Laili Septiandi</td>
              </li>
              <li>
                <td>Asal</td>
                <td>:</td>
                <td>Sukabumi</td>
              </li>
              <li>
                <td>Status</td>
                <td>:</td>
                <td>Mahasiswa</td>
              </li>
              <li>
                <td>Follow Sosmed</td>
                <td>:</td>
                <td>Laili Septiandi</td>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- aside -->
      <div class="col-md-4">
        <!-- ad -->
        <div class="aside-widget text-center">
          <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="./img/ad-1.jpg" alt="">
          </a>
        </div>
        <!-- /ad -->

        <!-- post widget -->
        <div class="aside-widget">
          <div class="section-title">
            <h2>Most Read</h2>
          </div>
          @foreach ($artikel as $item)

          <div class="post post-widget">
            <a class="post-img" href="#"><img src="{{ asset('uploads/'. $item->gambar)}}" alt=""></a>
            <div class="post-body">
              <h3 class="post-title"><a href="{{ route('artikel.detail', $item->judul) }}">{{ $item->judul }}</a>
              </h3>
            </div>
          </div>
          @endforeach

        </div>
        <!-- /post widget -->
      </div>
      <!-- /aside -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /section -->
@endsection