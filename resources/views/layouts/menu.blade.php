<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('psikologs.index') }}" class="nav-link {{ Request::is('psikologs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Psikolog</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('masyarakats.index') }}" class="nav-link {{ Request::is('masyarakats*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Masyarakat</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dassPertanyaans.index') }}" class="nav-link {{ Request::is('dassPertanyaans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dass Pertanyaans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dasshasils.index') }}" class="nav-link {{ Request::is('dasshasils*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dasshasils</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('keluhans.index') }}" class="nav-link {{ Request::is('keluhans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Keluhans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('jadwals.index') }}" class="nav-link {{ Request::is('jadwals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Jadwals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('masalahs.index') }}" class="nav-link {{ Request::is('masalahs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Masalahs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('konselings.index') }}" class="nav-link {{ Request::is('konselings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Konselings</p>
    </a>
</li>
