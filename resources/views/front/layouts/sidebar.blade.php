<aside class="aside is-placed-left is-expanded">
	<div class="aside-tools">
		<div>
			Denpasar <b class="font-black">MB</b>
		</div>
	</div>
	<div class="menu is-menu-main">
		<p class="menu-label">{{ trans('front.menu') }}</p>
		<ul class="menu-list">
			<li class="active">
				<a href="{{ url('/') }}">
					<span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
					<span class="menu-item-label">{{ trans('front.dashboard') }}</span>
				</a>
			</li>
			<li>
				<a href="#!">
					<span class="icon"><i class="mdi mdi-account-circle"></i></span>
					<span class="menu-item-label">{{ trans('front.tips') }}</span>
				</a>
			</li>
			<li>
				<a class="dropdown">
					<span class="icon"><i class="mdi mdi-help-circle"></i></span>
					<span class="menu-item-label">{{ trans('front.tentang') }}</span>
					<span class="icon"><i class="mdi mdi-plus"></i></span>
				</a>
				<ul>
					<li>
						<a href="#void">
							<span>{{ trans('front.tentang-kami', ['app' => 'Denpasar MD']) }}</span>
						</a>
					</li>
					<li>
						<a href="#void">
							<span>{{ trans('front.faq') }}</span>
						</a>
					</li>
					<li>
						<a href="#void">
							<span>{{ trans('front.kebijakan-privasi') }}</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<p class="menu-label">{{ trans('front.link-eksternal') }}</p>
		<ul class="menu-list">
			<li>
				<a href="#!" class="has-icon">
					<span class="icon"><i class="mdi mdi-view-list"></i></span>
					<span class="menu-item-label">Web KB</span>
				</a>
			</li>
			<li>
				<a href="#!" class="has-icon">
					<span class="icon"><i class="mdi mdi-github-circle"></i></span>
					<span class="menu-item-label">Web Portal Denpasar</span>
				</a>
			</li>
		</ul>
	</div>
</aside>