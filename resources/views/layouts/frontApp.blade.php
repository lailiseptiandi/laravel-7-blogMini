<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Selamat Datang</title>
  <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @stack('before-style')
  @include('template.style')
  @stack('after-style')


</head>

<body>
  @include('template.header')

  {{-- @stack('before-nav')
  @include('template.navbar')
  @stack('after-nav') --}}

  @yield('content')

  @include('template.footer')

  @stack('before-script')
  @include('template.script')
  @stack('after-script')
</body>

</html>