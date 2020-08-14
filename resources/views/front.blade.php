@extends('layouts.frontApp')

@section('content')
<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <!-- post -->
      @foreach ($artikel as $a)
      <div class="col-md-6">
        <div class="post post-thumb">
          <a class="post-img" href="#"><img src="{{ asset('uploads/'. $a->gambar)}}" height="350" widht="300"
              alt=""></a>
          <div class="post-body">
            <div class="post-meta">
              <a class="post-category cat-2" href="#">{{ $a->kategori->nama_kategori }}</a>
              <span class="post-date">{{ $a->created_at->diffForHumans() }}</span>
            </div>
            <h3 class="post-title"><a href="{{ route('artikel.detail', $a->judul) }}">{{ $a->judul }}</a></h3>
          </div>
        </div>
      </div>
      <!-- /post -->
      @endforeach

    </div>
    <!-- /row -->

    <!-- row -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2>Recent Posts</h2>
                </div>
              </div>

              <!-- post -->

              @foreach ($artikelall as $all)

              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="#"><img src="{{ asset('/uploads/'.$all->gambar) }}" alt="" height="200px"
                      width="200px"></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a class="post-category cat-1" href="#">{{ $all->kategori->nama_kategori }}</a>
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title"><a href="{{ route('artikel.detail', $all->judul) }}">{{ $all->judul }}</a>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- /post -->
              @endforeach
              <div class="clearfix visible-md visible-lg"></div>

            </div>
          </div>
          <br>
          <br>
          <div class="col-md-4">
            <div class="aside-widget">
              <div class="section-title">
                <h2>Most Read</h2>
              </div>
              @foreach ($artikelterkait as $terkait)

              <div class="post post-widget">
                <a class="post-img" href="#">
                  <img src="{{ asset('uploads/'. $terkait->gambar)}}" height="80px" width="160px" alt=""></a>
                <div class="post-body">
                  <h3 class="post-title"><a
                      href="{{ route('artikel.detail', $terkait->judul) }}">{{ $terkait->judul }}</a>
                  </h3>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /container -->
  </div>
  <!-- /section -->
</div>
@endsection