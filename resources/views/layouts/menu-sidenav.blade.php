<ul id="sidenav-left" class="sidenav pink lighten-4">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src="https://images.pexels.com/photos/6765581/pexels-photo-6765581.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                alt=""
                class="responsive-img">
            </div>

            <div class="row">

                <div class="col s9 push-s3 center-align">
                    <a href="#user" class="centrado"><img class="circle responsive-img" src="{{ asset('imgs/perfil.png') }}"></a>
                </div>
            </div>
            <a href="#name"><span class="white-text name">{{ auth()->user()->persona->nombre.' '.auth()->user()->persona->apellido }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>
    <li><a class="waves-effect" href="{{ route('persona.index') }}">Gestionar Personas<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="{{ route('producto.index') }}">Gestionar Productos<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="{{ route('venta.index') }}">Gestionar Ventas<i class="material-icons">class</i></a></li>
</ul>
