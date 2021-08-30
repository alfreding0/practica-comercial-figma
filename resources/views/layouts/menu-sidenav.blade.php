<ul id="sidenav-left" class="sidenav">
    <li><div class="user-view dark-primary-color">
            <a href="#user"><img class="circle" src="{{ asset('imgs/perfil.png') }}"></a>
            <a href="#name"><span class="white-text name">{{ auth()->user()->persona->nombre.' '.auth()->user()->persona->apellido }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>
    <li><a class="waves-effect" href="{{ route('persona.index') }}">Gestionar Personas<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="{{ route('producto.index') }}">Gestionar Productos<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="{{ route('venta.index') }}">Gestionar Ventas<i class="material-icons">class</i></a></li>
</ul>
