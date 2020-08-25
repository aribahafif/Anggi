@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.article') ? 'active' : '' }}" href="{{ route(ADMIN . '.article.index') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-pencil-alt"></i>
        </span>
        <span class="title">Article</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.gejala') ? 'active' : '' }}" href="{{ route(ADMIN . '.gejala.index') }}">
        <span class="icon-holder">
            <i class="c-orange-500 ti-receipt"></i>
        </span>
        <span class="title">Gejala</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.penyakit') ? 'active' : '' }}" href="{{ route(ADMIN . '.penyakit.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-pulse"></i>
        </span>
        <span class="title">Penyakit</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.basispengetahuan') ? 'active' : '' }}" href="{{ route(ADMIN . '.basispengetahuan.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-wand"></i>
        </span>
        <span class="title">Basis Pengetahuan</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.aturan') ? 'active' : '' }}" href="{{ route(ADMIN . '.aturan.index') }}">
        <span class="icon-holder">
            <i class="c-purple-500 ti-panel"></i>
        </span>
        <span class="title">Aturan</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.konsultasi') ? 'active' : '' }}" href="{{ route(ADMIN . '.konsultasi.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-support"></i>
        </span>
        <span class="title">Konsultasi</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.riwayat') ? 'active' : '' }}" href="{{ route(ADMIN . '.riwayat.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-notepad"></i>
        </span>
        <span class="title">Riwayat</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.faq') ? 'active' : '' }}" href="{{ route(ADMIN . '.faq.index') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-announcement"></i>
        </span>
        <span class="title">FAQ</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="#">
        <span class="icon-holder">
            <i class="c-red-500 fa fa-power-off"></i>
        </span>
        <span class="title">Logout</span>
    </a>
</li>
