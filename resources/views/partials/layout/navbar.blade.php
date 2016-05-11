<header class="main-header">
	<a href="{{ url('/home') }}" class="logo">
		<span class="logo-mini"><i class="fa fa-fort-awesome"></i></span>
		<span class="logo-lg"><b>Laravel</b> AdminLTE</span>
	</a>
	<nav class="navbar navbar-static-top" role="navigation">
		@if (! Auth::guest() )
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{!! Html::image('assets/img/avatar04.png', 'User Image', array('class' => 'user-image')) !!}
							<span class="hidden-xs">{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								{!! Html::image('assets/img/avatar04.png', 'User Image', array('class' => 'img-circle')) !!}
								<p>
									{{ Auth::user()->name }}
								</p>
							</li>
							<li class="user-body">
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<a href="{{ url('profile') }}" class="btn btn-default btn-flat">Perfil</a>
								</div>
								<div class="pull-right">
									<a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">{{ trans('nav.logout') }}</a>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		@else
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('auth/login') }}">{{ trans('nav.login') }}</a></li>
					<li><a href="{{ route('auth/register') }}">{{ trans('nav.signup') }}</a></li>
				</ul>
			</div>
        @endif
	</nav>
</header>