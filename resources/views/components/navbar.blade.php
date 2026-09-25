<nav class="site-nav">
    <a class="brand" href="{{ route('user.index') }}">PWL <span>4</span></a>
    <div class="nav-links">
        <a class="{{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Daftar Pengguna</a>
        <a class="new-user-link" href="{{ route('user.create') }}">Tambah Pengguna</a>
    </div>
</nav>
