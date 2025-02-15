<!-- need to remove -->
<li class="nav-item">
	<a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
		<i class="nav-icon fas fa-home"></i>
		<p>Dashboard</p>
	</a>
</li>

@role('admin', true)
	<li class="nav-item {{ request()->is('admin/master/*') ? 'menu-open' : '' }}">
		<a href="#" class="nav-link {{ request()->is('admin/master/*') ? 'active' : '' }}">
			<i class="nav-icon fas fa-table"></i>
			<p>
			Master Data
			<i class="fas fa-angle-left right"></i>
			</p>
		</a>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="{{ route('psikologs.index') }}" class="nav-link {{ Request::is('admin/master/psikologs*') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Psikolog</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('masyarakats.index') }}" class="nav-link {{ Request::is('admin/master/masyarakats*') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Masyarakat</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('masalahs.index') }}" class="nav-link {{ Request::is('admin/master/masalahs*') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Masalahs</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('keluhans.index') }}" class="nav-link {{ Request::is('admin/master/keluhans*') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Keluhans</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('konselings.index') }}" class="nav-link {{ Request::is('admin/master/konselings*') ? 'active' : '' }}">
					<i class="far fa-circle nav-icon"></i>
					<p>Konselings</p>
				</a>
			</li>
		</ul>
	</li>
	
@endrole

@level(3)
<li class="nav-header">PENGATURAN</li>
	<li class="nav-item">
		<a href="{{ route('jadwals.index') }}" class="nav-link {{ Request::is('jadwals*') ? 'active' : '' }}">
			<i class="nav-icon fas fa-clock"></i>
			<p>Jadwal Psikolog</p>
		</a>
	</li>
@endrole


<!-- <li class="nav-item">
	<a href="{{ route('dassPertanyaans.index') }}" class="nav-link {{ Request::is('dassPertanyaans*') ? 'active' : '' }}">
		<i class="nav-icon fas fa-home"></i>
		<p>Dass Pertanyaans</p>
	</a>
</li>

<li class="nav-item">
	<a href="{{ route('konseling-masalahs.index') }}" class="nav-link {{ Request::is('konseling-masalahs*') ? 'active' : '' }}">
		<i class="nav-icon fas fa-home"></i>
		<p>Konseling Masalahs</p>
	</a>
</li>

<li class="nav-item">
	<a href="{{ route('dasshasils.index') }}" class="nav-link {{ Request::is('dasshasils*') ? 'active' : '' }}">
		<i class="nav-icon fas fa-home"></i>
		<p>Dasshasils</p>
	</a>
</li> -->
