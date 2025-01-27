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
