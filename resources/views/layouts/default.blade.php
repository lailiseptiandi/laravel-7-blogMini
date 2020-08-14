<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Blog</title>
  <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @stack('before-style')
  @include('includes.style')
  @stack('after-style')


</head>

<body>
  {{-- sidebar --}}
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-wrapper">
        @include('includes.sidebar')
      </div>
    </div>

    {{-- navbar --}}
    <div class="main-panel">
      @include('includes.navbar')

      <!-- Content -->
      {{-- <div class="content"> --}}

      @yield('content')

      @include('includes.footer')
    </div>
  </div>
  <!-- /.content -->
  {{-- script --}}

  @stack('before-script')
  @include('includes.script')
  @stack('after-script')
</body>

</html>