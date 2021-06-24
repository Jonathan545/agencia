<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


<li class="nav-item {{ Request::is('nosotros*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('nosotros.index') }}">
       <i class="fas fa-handshake"></i>
        <span>Nosotros</span>
    </a>
</li>




<li class="nav-item {{ Request::is('paquetesYPromociones*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('paquetesYPromociones.index') }}">
        <i class="fas fa-box-open"></i>
        <span>Paquetes y Promociones</span>
    </a>
</li>
<li class="nav-item {{ Request::is('registroDeActividades*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('registroDeActividades.index') }}">
        <i class="fas fa-clipboard"></i>
        <span>Registro De Actividades</span>
    </a>
</li>
<li class="nav-item {{ Request::is('centroDeLlamadas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('centroDeLlamadas.index') }}">
        <i class="fas fa-phone-volume"></i>
        <span>Centro De Llamadas</span>
    </a>
</li>

<li class="nav-item {{ Request::is('trabajadores*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('trabajadores.index') }}">
        <i class="fas fa-user-tie"></i>
        <span>Trabajadores</span>
    </a>
</li>

<li class="nav-item {{ Request::is('facturas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('facturas.index') }}">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Facturas</span>
    </a>
</li>


<li class="nav-item {{ Request::is('servicios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('servicios.index') }}">
        <i class="fas fa-globe"></i>
        <span>Servicios</span>
    </a>
</li>

<li class="nav-item {{ Request::is('personas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('personas.index') }}">
        <i class="fas fa-users"></i>
        <span>Personas</span>
    </a>
</li>