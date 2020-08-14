@extends('layouts.frontApp')

@section('content')

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <ul class="page-header-breadcrumb">
          <li><a href="{{ route('contact') }}">Home</a></li>
          <li>Contact</li>
        </ul>
        <h1>Contact</h1>
      </div>
    </div>
  </div>
</div>
<!-- /Page Header -->
<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-6">
        <div class="section-row">
          <h3>Contact Information</h3>
          <p>Halo, Nama Saya Laili Septiandi...
            <br>Kali ini saya membuat blog menggunakan template webmag dan backend nya pake LARAVEL 7
          </p>
          <ul class="list-style">
            <li>
              <p><strong>Email:</strong> <a href="#">laili@testdev.my.id</a></p>
            </li>
            <li>
              <p><strong>Phone:</strong> 085798480792 (WA, Telegram) </p>
            </li>
            <li>
              <p><strong>IG:</strong> @lailiseptiandi </p>
            </li>
            <li>
              <p><strong>FB:</strong> Laili Septiandi </p>
            </li>
            <li>
              <p><strong>Linkedin:</strong> Laili Septiandi </p>
            </li>
            <li>
              <p><strong>Address:</strong> Sukabumi, Jawa Barat</p>
            </li>
          </ul>
        </div>
      </div>
      {{-- <div class="col-md-5 col-md-offset-1">
        <div class="section-row">
          <h3>Send A Message</h3>
          <form>
            <div class="row">
              <div class="col-md-7">
                <div class="form-group">
                  <span>Email</span>
                  <input class="input" type="email" name="email">
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <span>Subject</span>
                  <input class="input" type="text" name="subject">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="input" name="message" placeholder="Message"></textarea>
                </div>
                <button class="primary-button">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div> --}}
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /section -->

@endsection