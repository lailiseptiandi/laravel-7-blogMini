@extends('layouts.frontApp')

@section('content')
<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- Post content -->
      <div class="col-md-8">
        <div class="section-row sticky-container">
          <div class="main-post">

            <h3>{{ $artikel_detail->judul }}</h3>

            <figure class="figure-img">
              <figcaption>{{ $artikel_detail->created_at }}</figcaption>
              <br>
              <img class="img-responsive" src="{{ asset('/uploads/'.$artikel_detail->gambar) }}" alt="" height="10px">
            </figure>
            {!! $artikel_detail->body !!}
          </div>
          <div class="post-shares sticky-shares">
            <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
        </div>

        <!-- ad -->
        <div class="section-row text-center">
          <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="./img/ad-2.jpg" alt="">
          </a>
        </div>
        <!-- ad -->

      </div>
      <!-- /Post content -->

      <!-- aside -->
      <div class="col-md-4">

        <!-- post widget -->
        <div class="aside-widget">
          <div class="section-title">
            <h2>Featured Posts</h2>
          </div>
          @foreach ($artikelterkait as $item)
              
          <div class="post post-thumb">
            <a class="post-img" href="blog-post.html"><img src="{{ asset('/uploads/'.$item->gambar) }}" alt=""></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category cat-2" href="#">{{ $item->nama_kategori }}</a>
                <span class="post-date">{{ $item->created_at }}</span>
              </div>
              <h3 class="post-title"><a href="{{ route('artikel.detail', $item->judul ) }}">{{ $item->judul }}</a></h3>
            </div>
          </div>
          @endforeach

        </div>
        <!-- /post widget -->

        <!-- catagories -->
        <div class="aside-widget">
          <div class="section-title">
            <h2>Catagories</h2>
          </div>
          <div class="category-widget">
            <ul>
              @foreach ($categori as $c)
                  
              <li><a href="#" class="cat-1">{{ $c->nama_kategori }}<span>{{ $c->artikel_count }}</span></a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <!-- /catagories -->

      </div>
      <!-- /aside -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /section -->
@endsection