@auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth

<nav class="navbar nav-extended no-padding dark-primary-color">
    <div class="nav-wrapper">
        @auth
        <a href="#" class="brand-logo center hide-on-small-only">COMERCIAL FIGMA</a>
        <ul id="nav-mobile" class="right">
            <li><a href="{{ route('home') }}" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">person</i></a></li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
        <a href="#!" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons dark-primary-color-icon">menu</i></a>

        @endauth

        @yield('breadcrumb')
    </div>
</nav>
