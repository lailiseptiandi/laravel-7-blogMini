<div class="logo">
  <a href="{{ route('home') }}" class="simple-text">
    Mini Blog
  </a>
</div>
<ul class="nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="nc-icon nc-chart-pie-35"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('categori.index') }}">
      {{-- <i class="nc-icon nc-circle-09"></i> --}}
      <i class="fa fa-pencil-square" aria-hidden="true"></i>
      <p>Kategori</p>
    </a>
  </li>
  <li>
    <a class="nav-link" href="{{ route('artikel.index') }}">
      <i class="nc-icon nc-notes"></i>
      <p>Artikel</p>
    </a>
  </li>
  {{-- <li>
      <a class="nav-link" href="#">
        <i class="nc-icon nc-paper-2"></i>
        <p>Typography</p>
      </a>
    </li>
    <li>
      <a class="nav-link" href="#">
        <i class="nc-icon nc-atom"></i>
        <p>Icons</p>
      </a>
    </li>
    <li>
      <a class="nav-link" href="#">
        <i class="nc-icon nc-pin-3"></i>
        <p>Maps</p>
      </a>
    </li>
    <li>
      <a class="nav-link" href="./notifications.html">
        <i class="nc-icon nc-bell-55"></i>
        <p>Notifications</p>
      </a>
    </li> --}}
  <li class="nav-item active active-pro">
    <a class="nav-link active" href="upgrade.html">
      <i class="nc-icon nc-alien-33"></i>
      <p>Tentang</p>
    </a>
  </li>
</ul>