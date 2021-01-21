<div class="left-sidebar">
	<div class="sidebar-content">
		<div class="sidebar-head">
			<h3 class="title">Wareerior</h3>
		</div>

		<ul class="sidebar-menu">
			<li>
				<div class="menu-link">
					<a href="{{route('overview.index')}}" class="d-flex align-items-center">
						<i class="mdi mdi-home-outline"></i>
						<span>Overview</span>
					</a>
				</div>
			</li>

			<li>
				<div class="menu-link">
					<a href="#" class="d-flex align-items-center submenu-link">
						<i class="mdi mdi-clipboard-text"></i>
						<span>Registry</span>
					</a>
				</div>
				<ul class="submenu">
					<li>
						<a href="{{ route('claimants.index') }}">Claimant Registry</a>
					</li>
					<li>
						<a href="{{ route('deceaseds.index') }}">Deceased Registry</a>
					</li>
					<li>
						<a href="{{ route('objectors.index')  }}">Objector Registry</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="menu-link">
					<a href="#" class="d-flex align-items-center submenu-link">
						<i class="mdi mdi-calendar-blank"></i>
						<span>Scheduling</span>
					</a>
				</div>
				<ul class="submenu">
					<li>
						<a href="{{route('events.index')}}">Calendar</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="menu-link">
					<a href="{{ route('exhumation.index')  }}" class="d-flex align-items-center">
						<i class="mdi mdi-led-outline"></i>
						<span>Maps</span>
					</a>
				</div>
			</li>

			<li>
				<div class="menu-link">
					<a href="{{ route('report.index')  }}" class="d-flex align-items-center">
						<i class="mdi mdi-bulletin-board"></i>
						<span>Report</span>
					</a>
				</div>
			</li>

			<li>
				<div class="menu-link">
					<a href="#" class="d-flex align-items-center submenu-link">
						<i class="mdi mdi-settings"></i>
						<span>Settings</span>
					</a>
				</div>
				<ul class="submenu">
					<li>
						<a href="{{ route('user-roles.index') }}">User Roles</a>
					</li>
					<li>
						<a href="{{ route('roles.index') }}">Role List</a>
					</li>
					<li>
						<a href="#">Configure Catergories</a>
					</li>
					<li>
						<a href="#">Queue Display Settings</a>
					</li>
				</ul>
			</li>

			<li>
				<div class="menu-link">
					<a href="{{ route('logout') }}" class="d-flex align-items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="mdi mdi-logout"></i>
						<span>Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

					</a>
				</div>
			</li>
		</ul>
	</div>
</div>
