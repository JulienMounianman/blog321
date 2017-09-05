@if(Auth::guest())
    <li><a class="" href="{{ route('login') }}">Login</a></li>
    <li><a class="" href="{{ route('register') }}">Inscription</a></li>
@else

    <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->pseudo }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('AdminCatIndex') }}">Administration</a></li>
                <li><a href="{{ route('AdminUserDashboard') }}">Mon profil</a></li>
                <li role="separator" class="divider"></li>
                <li>
                    <a class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i> Logout
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
          style="display: none;">{{ csrf_field() }}</form>
@endif


